<!DOCTYPE html>
<html lang="en" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="color-scheme" content="light dark">
    <meta name="supported-color-schemes" content="light dark">
    <title>@yield('mail-title', $title ?? 'Notification')</title>
    @php
        $siteName = $siteName ?? config('app.name');
        $siteUrl = $siteUrl ?? config('app.url');
    @endphp
    {{-- Outlook.com / Gmail inbox clipping guard --}}
    <div style="display:none;max-height:0;overflow:hidden;mso-hide:all;font-size:1px;line-height:1px;color:#f1f5f9;">
        @yield('mail-preheader', $preheader ?? '')
        &#8199;&#847;&#8199;&#847;&#8199;&#847;&#8199;&#847;&#8199;&#847;&#8199;&#847;&#8199;&#847;&#8199;&#847;&#8199;&#847;&#8199;&#847;&#8199;&#847;
    </div>
    <style>
        /* Client-side resets. All layout lives in inline styles on the elements
           themselves; this block only handles things inline CSS cannot. */
        body { margin: 0 !important; padding: 0 !important; width: 100% !important; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; }
        table { border-collapse: collapse !important; mso-table-lspace: 0pt; mso-table-lspace: 0; mso-table-rspace: 0pt; mso-table-rspace: 0; }
        img { border: 0; outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; }
        a { text-decoration: none; }
        /* Gmail applies its own line-height to blockquote/pre in some locales */
        @media only screen and (max-width: 620px) {
            .email-shell { width: 100% !important; }
            .email-card { border-radius: 0 !important; }
            .email-gutter { padding-left: 20px !important; padding-right: 20px !important; }
            .email-heading { font-size: 22px !important; line-height: 30px !important; }
            .email-field-label { font-size: 10px !important; }
            .email-field-value { font-size: 15px !important; }
            .email-stack { display: block !important; width: 100% !important; padding-left: 0 !important; }
            .email-button { display: block !important; width: 100% !important; text-align: center !important; }
        }
    </style>
</head>
<body style="margin:0;padding:0;background-color:#f1f5f9;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,sans-serif;">
<table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:#f1f5f9;">
    <tr>
        <td align="center" style="padding:32px 12px;">
            <table role="presentation" class="email-shell" width="600" cellpadding="0" cellspacing="0" border="0" style="width:600px;max-width:600px;">

                {{-- Brand bar --}}
                <tr>
                    <td style="padding:0 0 20px 0;">
                        <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0">
                            <tr>
                                <td align="center" style="font-size:13px;font-weight:700;letter-spacing:.14em;text-transform:uppercase;color:#6366f1;">
                                    {{ $siteName }}
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>

                {{-- Card --}}
                <tr>
                    <td class="email-card" style="background-color:#ffffff;border:1px solid #e2e8f0;border-radius:14px;overflow:hidden;">

                        {{-- Header --}}
                        <tr>
                            <td style="background-color:#4f46e5;background-image:linear-gradient(135deg,#4f46e5 0%,#7c3aed 100%);padding:28px 32px;">
                                @hasSection('mail-eyebrow')
                                    <div style="font-size:11px;font-weight:700;letter-spacing:.12em;text-transform:uppercase;color:#c7d2fe;padding-bottom:8px;">
                                        @yield('mail-eyebrow')
                                    </div>
                                @endif
                                <h1 class="email-heading" style="margin:0;font-size:24px;line-height:32px;font-weight:700;color:#ffffff;">
                                    @yield('mail-heading')
                                </h1>
                            </td>
                        </tr>

                        {{-- Body --}}
                        <tr>
                            <td class="email-gutter" style="padding:32px;">
                                @yield('mail-content')
                            </td>
                        </tr>
                    </td>
                </tr>

                {{-- Footer --}}
                <tr>
                    <td style="padding:24px 12px 0 12px;">
                        <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0">
                            <tr>
                                <td align="center" style="font-size:12px;line-height:20px;color:#64748b;">
                                    @yield('mail-footer-note', 'You are receiving this email because of activity on your portfolio site.')
                                    <br>
                                    <a href="{{ $siteUrl }}" style="color:#4f46e5;font-weight:600;text-decoration:underline;">{{ $siteUrl }}</a>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>

            </table>
        </td>
    </tr>
</table>
</body>
</html>
