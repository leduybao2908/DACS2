<!DOCTYPE html>
<html>
<head>
    <title>New Contact Message</title>
    <style>
        /* General styles */
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #f4f7fc;
            color: #333;
        }
        .email-container {
            max-width: 600px;
            margin: 20px auto;
            background: #ffffff;
            border: 1px solid #e6e9f0;
            border-radius: 12px;
            padding: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            font-size: 28px;
            color: #2c3e50;
            text-align: center;
            margin-bottom: 20px;
        }
        p {
            margin: 10px 0;
        }
        .details {
            margin: 20px 0;
            padding: 15px;
            background-color: #f9f9f9;
            border-radius: 8px;
            border: 1px solid #e6e9f0;
        }
        .details p {
            font-size: 16px;
            color: #2c3e50;
        }
        .details strong {
            color: #3498db;
        }
        .message-content {
            padding: 15px;
            background: #eef7ff;
            border-radius: 8px;
            border: 1px solid #d6e9ff;
            color: #2c3e50;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
            color: #7f8c8d;
        }
        /* Button (if needed) */
        .button {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #3498db;
            color: #ffffff;
            text-decoration: none;
            border-radius: 6px;
            font-size: 16px;
        }
        .button:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <h1>New Contact Message</h1>
        <div class="details">
            <p><strong>Name:</strong> {{ $name }}</p>
            <p><strong>Email:</strong> {{ $email }}</p>
            <p><strong>Message:</strong></p>
            <div class="message-content">
                {!! $messageContent !!}
            </div>
        </div>
        <div class="footer">
            <p>This email was sent from your website's contact form.</p>
            <p>&copy; {{ date('Y') }} Your Website. All Rights Reserved.</p>
        </div>
    </div>
</body>
</html>
