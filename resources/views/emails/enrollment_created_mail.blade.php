<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to TM Academy</title>
</head>
<body style="margin: 0; padding: 0; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif; background-color: #f8f9fa;">
    <table width="100%" cellpadding="0" cellspacing="0" style="background-color: #f8f9fa;">
        <tr>
            <td align="center" style="padding: 40px 20px;">
                <table width="100%" maxwidth="600" cellpadding="0" cellspacing="0" style="max-width: 600px; background-color: #ffffff; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.08);">
                    <!-- Header -->
                    <tr>
                        <td style="padding: 40px 40px 30px; border-bottom: 1px solid #e8eaed; text-align: center;">
                            <h1 style="margin: 0; font-size: 28px; font-weight: 700; color: #1a1a1a;">TM Academy</h1>
                            <p style="margin: 8px 0 0; font-size: 14px; color: #5f6368;">Welcome to Your Learning Journey</p>
                        </td>
                    </tr>

                    <!-- Content -->
                    <tr>
                        <td style="padding: 40px;">
                            <p style="margin: 0 0 24px; font-size: 16px; line-height: 1.6; color: #202124;">Hello <strong>({{ $enrollment->full_name }})</strong>,</p>
                            
                            <p style="margin: 0 0 24px; font-size: 16px; line-height: 1.6; color: #202124;">Thank you for enrolling in our course! We're excited to have you join our learning community.</p>

                            <!-- Credentials Box -->
                            <div style="background-color: #f1f3f4; border-left: 4px solid #1f73e6; padding: 20px; margin: 32px 0; border-radius: 4px;">
                                <p style="margin: 0 0 16px; font-size: 14px; font-weight: 600; color: #1a1a1a; text-transform: uppercase; letter-spacing: 0.5px;">Your Login Credentials</p>
                                <p style="margin: 0 0 12px; font-size: 15px; color: #202124;"><strong>Username:</strong> <span style="font-family: 'Courier New', monospace; background-color: #ffffff; padding: 4px 8px; border-radius: 3px;">{{ $emailAddress }}</span></p>
                                <p style="margin: 0; font-size: 15px; color: #202124;"><strong>Password:</strong> <span style="font-family: 'Courier New', monospace; background-color: #ffffff; padding: 4px 8px; border-radius: 3px;">{{ $password }}</span></p>
                            </div>

                            <p style="margin: 0 0 24px; font-size: 16px; line-height: 1.6; color: #202124;"><strong>Next Step: Complete Your Diagnostic Test</strong></p>
                            
                            <p style="margin: 0 0 24px; font-size: 15px; line-height: 1.6; color: #5f6368;">As a mandatory first step, please take the online diagnostic test. This assessment helps us understand your current skill level and place you in the course best suited to your needs.</p>

                            <!-- CTA Button -->
                            <div style="text-align: center; margin: 32px 0;">
                                <a href="{{ $link }}" style="display: inline-block; background-color: #1f73e6; color: #ffffff; text-decoration: none; padding: 14px 32px; border-radius: 6px; font-size: 16px; font-weight: 600; transition: background-color 0.2s;">Login & Take Test</a>
                            </div>

                            <!-- Important Info -->
                            <div style="background-color: #fef7e0; border-left: 4px solid #f9ab00; padding: 20px; margin: 32px 0; border-radius: 4px;">
                                <p style="margin: 0 0 12px; font-size: 14px; font-weight: 600; color: #1a1a1a;">Important Information</p>
                                <ul style="margin: 0; padding-left: 20px; font-size: 14px; color: #202124; line-height: 1.8;">
                                    <li>Complete the test independently without external help</li>
                                    <li>The test does not affect your course grades</li>
                                    <li>You must complete it within <strong>3 days</strong> of receiving this email</li>
                                </ul>
                            </div>

                            <p style="margin: 0 0 24px; font-size: 15px; line-height: 1.6; color: #5f6368;">Once you've finished, you'll receive a confirmation email with your final enrollment details and assigned course level.</p>

                            <p style="margin: 0; font-size: 15px; line-height: 1.6; color: #5f6368;">Wishing you the best of luck!</p>
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