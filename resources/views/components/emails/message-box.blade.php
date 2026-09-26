@props(['label' => null])

{{--
    Pre-formatted block for long free text (message bodies, notes) so
    whitespace and line breaks survive every mail client.
--}}
@if ($label)
    <div style="font-size:11px;font-weight:700;letter-spacing:.08em;text-transform:uppercase;color:#94a3b8;line-height:22px;padding-bottom:6px;">
        {{ $label }}
    </div>
@endif
<table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:#f8fafc;border:1px solid #e2e8f0;border-radius:10px;">
    <tr>
        <td style="padding:16px 18px;font-size:15px;line-height:24px;color:#334155;white-space:pre-wrap;word-break:break-word;">
            {{ $slot }}
        </td>
    </tr>
</table>
