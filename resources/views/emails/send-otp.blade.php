<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>OTP Code</title>
</head>

<body style="margin:0; padding:0; background:#0f0f0f; font-family:Arial, sans-serif;">
    <table width="100%" cellpadding="0" cellspacing="0">
        <tr>
            <td align="center" style="padding:40px;">
                <table width="600" cellpadding="0" cellspacing="0"
                    style="background:#1a1a1a; border-radius:8px; overflow:hidden;">
                    <tr>
                        <td align="center" style="padding:20px 0; background:#0f0f0f;">
                            <h1
                                style="color:#8c52ff; margin:0; font-size:24px; font-weight:bold; font-family:Arial, sans-serif;">
                                <img class="navbar-brand-img" src="{{ asset('backend/assets/img/logo.png') }}"
                                    alt="Math Skills for School Success" />
                            </h1>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:30px; color:#ffffff;">
                            <h2 style="margin-top:0; font-size:22px;">2FA code</h2>
                            <p style="font-size:16px; line-height:1.5; color:#cccccc;">
                                Here is your login verification code:
                            </p>
                            <p
                                style="font-size:28px; font-weight:bold; background:#2a2a2a; padding:15px; text-align:center; border-radius:6px; letter-spacing:3px; color:#ffffff;">
                                {{ $otp }}
                            </p>
                            <p style="font-size:14px; color:#aaaaaa; margin-top:20px;">
                                Please make sure you never share this code with anyone.
                            </p>
                            <p style="font-size:14px; color:#aaaaaa;">
                                <strong>Note:</strong> The code will expire in 15 minutes.
                            </p>
                        </td>
                    </tr>

        </tr>
    </table>
    </td>
    </tr>
    </table>
</body>

</html>
