<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Retake Approved</title>
</head>
<body style="margin: 0; padding: 0; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif; background-color: #f8f9fa;">
    <table width="100%" cellpadding="0" cellspacing="0" style="background-color: #f8f9fa;">
        <tr>
            <td align="center" style="padding: 40px 20px;">
                <table width="100%" maxwidth="600" cellpadding="0" cellspacing="0" style="max-width: 600px; background-color: #ffffff; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.08);">
                    <!-- Header -->
                    <tr>
                        <td style="padding: 40px 40px 30px; border-bottom: 1px solid #e8eaed; text-align: center;">
                            <h1 style="margin: 0; font-size: 28px; font-weight: 700; color: #1a1a1a;">Retake Approved</h1>
                            <p style="margin: 8px 0 0; font-size: 14px; color: #5f6368;">You have one final attempt</p>
                        </td>
                    </tr>

                    <!-- Content -->
                    <tr>
                        <td style="padding: 40px;">
                            <p style="margin: 0 0 24px; font-size: 16px; line-height: 1.6; color: #202124;">Hello <strong>({{ $enrollment->full_name }})</strong>,</p>
                            
                            <p style="margin: 0 0 24px; font-size: 16px; line-height: 1.6; color: #202124;">Per your request, we've approved your retake of the diagnostic test. Your test access has been activated.</p>

                            <!-- CTA Button -->
                            <div style="text-align: center; margin: 32px 0;">
                                <a href="{{ $link }}" style="display: inline-block; background-color: #1f73e6; color: #ffffff; text-decoration: none; padding: 14px 32px; border-radius: 6px; font-size: 16px; font-weight: 600; transition: background-color 0.2s;">Retake Test Now</a>
                            </div>

                            <!-- Important Info -->
                            <div style="background-color: #fef7e0; border-left: 4px solid #f9ab00; padding: 20px; margin: 32px 0; border-radius: 4px;">
                                <p style="margin: 0 0 12px; font-size: 14px; font-weight: 600; color: #1a1a1a;">Important Reminders</p>
                                <ul style="margin: 0; padding-left: 20px; font-size: 14px; color: #202124; line-height: 1.8;">
                                    <li>You have <strong>3 days</strong> to complete the retake</li>
                                    <li>This is your <strong>final attempt</strong></li>
                                    <li>Complete the test independently without external help</li>
                                    <li>The test does not affect your course grades</li>
                                </ul>
                            </div>

                            <p style="margin: 0 0 24px; font-size: 15px; line-height: 1.6; color: #5f6368;">Once you've completed the retake, we'll review your results and contact you with your final placement decision.</p>

                            <p style="margin: 0; font-size: 15px; line-height: 1.6; color: #5f6368;">Good luck with your retake!</p>
                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td style="padding: 30px 40px; border-top: 1px solid #e8eaed; background-color: #f8f9fa; border-radius: 0 0 8px 8px;">
                            <p style="margin: 0 0 8px; font-size: 15px; font-weight: 600; color: #1a1a1a;">Kind regards,</p>
                            <p style="margin: 0 0 20px; font-size: 15px; color: #202124;"><strong>TM</strong><br>Founder & Lead Instructor<br>TM Academy</p>
                            <p style="margin: 0; font-size: 12px; color: #5f6368; border-top: 1px solid #e8eaed; padding-top: 16px;">© 2025 TM Academy. All rights reserved.</p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>