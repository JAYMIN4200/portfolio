<script>
document.addEventListener('DOMContentLoaded', function () {
    var forms = document.querySelectorAll('form[data-validate]');
    if (!forms.length) return;

    forms.forEach(function (form) {
        form.setAttribute('novalidate', '');
    });

    var activeSlots = [];

    function messagesFor(form) {
        var raw = form.getAttribute('data-validate-messages') || '{}';
        try {
            return JSON.parse(raw) || {};
        } catch (e) {
            return {};
        }
    }

    function labelFor(field) {
        var label = null;
        if (field.id) {
            label = document.querySelector('label[for="' + field.id + '"]');
        }
        if (!label) {
            var wrap = field.closest('div, li, .grid > div');
            if (wrap) label = wrap.querySelector('label');
        }
        if (!label) return field.name || 'this field';
        return label.textContent.replace(/[*:\s]+$/g, '').trim() || 'this field';
    }

    function messageFor(messages, field, rule) {
        var key = field.getAttribute('name') + '.' + rule;
        if (messages[key]) return messages[key];
        if (field.dataset.validateMsg) return field.dataset.validateMsg;
        var label = labelFor(field).toLowerCase();
        if (rule === 'email') return 'Please enter a valid email address.';
        return 'Please enter ' + label + '.';
    }

    function isEmpty(field) {
        if (field.type === 'checkbox' || field.type === 'radio') return !field.checked;
        if (field.tagName === 'SELECT') return field.value === '' || field.value === null;
        return !(field.value || '').trim();
    }

    function errorSlotFor(field) {
        if (field.dataset.validateErrorSlot) {
            var slot = document.querySelector(field.dataset.validateErrorSlot);
            if (slot) return slot;
        }
        return null;
    }

    function insertionHost(field) {
        var parent = field.parentElement;
        if (!parent) return field;
        var parentIsRelative = parent.classList && parent.classList.contains('relative');
        if (!parentIsRelative) return field;
        var host = null;
        Array.prototype.forEach.call(parent.children, function (child) {
            if (child === field) return;
            if (child.classList && (child.classList.contains('absolute') || child.style.position === 'absolute')) host = parent;
        });
        return host || field;
    }

    function clearErrors(form) {
        form.querySelectorAll('[data-inline-error]').forEach(function (el) {
            el.remove();
        });
        activeSlots.forEach(function (slot) {
            if (!slot.form || slot.form === form) {
                slot.textContent = '';
                slot.classList.add('hidden');
            }
        });
        activeSlots = [];
    }

    function showError(field, message) {
        var slot = errorSlotFor(field);
        if (slot) {
            slot.textContent = message;
            slot.classList.remove('hidden');
            activeSlots.push(slot);
            return;
        }
        var err = document.createElement('p');
        err.dataset.inlineError = '1';
        err.className = field.form.dataset.validateErrorClass || 'form-inline-error';
        err.textContent = message;
        insertionHost(field).insertAdjacentElement('afterend', err);
        field.setAttribute('aria-invalid', 'true');
    }

    document.addEventListener('input', function (e) {
        var field = e.target;
        if (!(field.tagName === 'INPUT' || field.tagName === 'SELECT' || field.tagName === 'TEXTAREA')) return;
        var form = field.closest('form[data-validate]');
        if (!form) return;
        var slot = errorSlotFor(field);
        if (slot) {
            slot.textContent = '';
            slot.classList.add('hidden');
            return;
        }
        var err = insertionHost(field).nextElementSibling;
        if (err && err.dataset && err.dataset.inlineError) {
            err.remove();
        }
    }, true);

    document.addEventListener('change', function (e) {
        var field = e.target;
        if (field.tagName !== 'SELECT') return;
        var form = field.closest('form[data-validate]');
        if (!form) return;
        var slot = errorSlotFor(field);
        if (slot) {
            slot.textContent = '';
            slot.classList.add('hidden');
            return;
        }
        var err = insertionHost(field).nextElementSibling;
        if (err && err.dataset && err.dataset.inlineError) {
            err.remove();
        }
    }, true);

    document.addEventListener('submit', function (e) {
        var form = e.target;
        if (form.tagName !== 'FORM' || !form.hasAttribute('data-validate')) return;
        var messages = messagesFor(form);
        var fields = form.querySelectorAll('[required]');
        if (!fields.length) return;

        clearErrors(form);
        var firstInvalid = null;

        fields.forEach(function (field) {
            if (isEmpty(field)) {
                showError(field, messageFor(messages, field, 'required'));
                if (!firstInvalid) firstInvalid = field;
            } else if (field.type === 'email' && field.value.trim()) {
                var re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!re.test(field.value.trim())) {
                    showError(field, messageFor(messages, field, 'email'));
                    if (!firstInvalid) firstInvalid = field;
                }
            }
        });

        if (firstInvalid) {
            e.preventDefault();
            e.stopImmediatePropagation();
            firstInvalid.scrollIntoView({ block: 'center', behavior: 'smooth' });
        }
    }, true);
});
</script>