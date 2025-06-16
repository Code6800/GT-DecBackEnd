<!DOCTYPE html>
<html>
<head>
    <title>Account Verification</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap');

        body {
            font-family: 'Inter', sans-serif;
            background-color: #f1f5f9;
            color: #0f172a;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
            overflow: hidden;
        }

        .header {
            background-color: #0d9488;
            padding: 30px;
            text-align: center;
        }

        .logo {
            max-width: 160px;
            height: auto;
        }

        .content {
            padding: 30px;
        }

        h2 {
            font-size: 22px;
            font-weight: 600;
            margin-top: 0;
            margin-bottom: 16px;
            color: #0f172a;
            text-align: center;
        }

        p {
            font-size: 16px;
            line-height: 1.6;
            margin-bottom: 20px;
            color: #334155;
            text-align: center;
        }

        .code-container {
            display: flex;
            justify-content: center;
            gap: 12px;
            margin: 30px 0;
        }

        .code-digit {
            width: 50px;
            height: 60px;
            background: #f1f5f9;
            border-radius: 8px;
            border: 2px solid #e2e8f0;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            font-weight: 600;
            color: #0f172a;
        }

        .footer {
            background-color: #f8fafc;
            padding: 20px;
            text-align: center;
            font-size: 13px;
            color: #64748b;
            border-top: 1px solid #e2e8f0;
        }

        .footer a {
            color: #0d9488;
            text-decoration: none;
            margin: 0 5px;
        }

        .button {
            display: inline-block;
            padding: 12px 24px;
            background-color: #0d9488;
            color: #ffffff;
            text-decoration: none;
            border-radius: 6px;
            font-weight: 500;
            margin: 20px auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <img src="https://yourcompany.com/logo.png" alt="Company Logo" class="logo">
        </div>

        <div class="content">
            <h2>Your Verification Code</h2>
            <p>Please enter the following code to verify your account:</p>

            <div class="code-container">
                @foreach(str_split($code) as $digit)
                <div class="code-digit">{{ $digit }}</div>
                @endforeach
            </div>

            <p>This code is valid for the next 30 minutes. Do not share it with anyone for security reasons.</p>

            <p>If you didn’t request this code, simply ignore this message or contact our support team.</p>
        </div>

        <div class="footer">
            © {{ date('Y') }} Your Company Name. All rights reserved. <br>
            <a href="https://yourcompany.com">Visit our website</a> |
            <a href="https://yourcompany.com/privacy">Privacy Policy</a>
        </div>
    </div>
</body>
</html>
