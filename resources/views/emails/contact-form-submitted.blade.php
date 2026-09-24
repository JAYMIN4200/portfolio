<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Form Enquiry</title>
    <style>
        body { font-family: Arial, Helvetica, sans-serif; background: #f1f5f9; margin: 0; padding: 24px; }
        .container { max-width: 600px; margin: 0 auto; background: #ffffff; border: 1px solid #e2e8f0; border-radius: 12px; overflow: hidden; }
        .header { background: #4f46e5; color: #ffffff; padding: 20px 24px; }
        .header h1 { margin: 0; font-size: 20px; }
        .body { padding: 24px; }
        .field { margin-bottom: 18px; }
        .field label { display: block; font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: .05em; color: #64748b; margin-bottom: 4px; }
        .field p { margin: 0; color: #0f172a; font-size: 15px; line-height: 1.5; }
        .message-box { background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 14px; white-space: pre-wrap; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>New Contact Form Enquiry</h1>
        </div>
        <div class="body">
            <div class="field">
                <label>Name</label>
                <p>{{ $inquiry->name }}</p>
            </div>
            <div class="field">
                <label>Email</label>
                <p><a href="mailto:{{ $inquiry->email }}" style="color:#4f46e5;">{{ $inquiry->email }}</a></p>
            </div>
            <div class="field">
                <label>Subject</label>
                <p>{{ $inquiry->subject ?: 'N/A' }}</p>
            </div>
            <div class="field">
                <label>Message</label>
                <div class="message-box">{{ $inquiry->message }}</div>
            </div>
        </div>
    </div>
</body>
</html>