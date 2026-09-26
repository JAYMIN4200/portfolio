@props(['label'])

{{--
    A single label/value pair. Render the value through the slot; callers add
    their own <a> when the value should be a mailto:, tel: or web link.
--}}
<table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0" style="margin:0 0 18px 0;">
    <tr>
        <td class="email-stack email-field-label" width="130" valign="top" style="width:130px;padding:0 16px 0 0;font-size:11px;font-weight:700;letter-spacing:.08em;text-transform:uppercase;color:#94a3b8;line-height:22px;">
            {{ $label }}
        </td>
        <td class="email-stack email-field-value" valign="top" style="font-size:15px;line-height:22px;color:#0f172a;font-weight:500;word-break:break-word;">
            {{ $slot }}
        </td>
    </tr>
</table>
