<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Course Placement</title>
</head>
<body style="margin: 0; padding: 0; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif; background-color: #f8f9fa;">
    <table width="100%" cellpadding="0" cellspacing="0" style="background-color: #f8f9fa;">
        <tr>
            <td align="center" style="padding: 40px 20px;">
                <table width="100%" maxwidth="600" cellpadding="0" cellspacing="0" style="max-width: 600px; background-color: #ffffff; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.08);">
                    <!-- Header -->
                    <tr>
                        <td style="padding: 40px 40px 30px; border-bottom: 1px solid #e8eaed; text-align: center;">
                            <div style="width: 56px; height: 56px; background-color: #d4edda; border-radius: 50%; margin: 0 auto 16px; display: flex; align-items: center; justify-content: center;">
                                <span style="font-size: 32px;">✓</span>
                            </div>
                            <h1 style="margin: 0; font-size: 28px; font-weight: 700; color: #1a1a1a;">Test Complete!</h1>
                            <p style="margin: 8px 0 0; font-size: 14px; color: #5f6368;">Your course placement is ready</p>
                        </td>
                    </tr>

                    <!-- Content -->
                    <tr>
                        <td style="padding: 40px;">
                            <p style="margin: 0 0 24px; font-size: 16px; line-height: 1.6; color: #202124;">Hello <strong>({{ $user->name }})</strong>,</p>
                            
                            <p style="margin: 0 0 24px; font-size: 16px; line-height: 1.6; color: #202124;">Thank you for completing the online diagnostic test. We've reviewed your performance and are pleased to share your results.</p>

                            <!-- Placement Box -->
                            <div style="background: linear-gradient(135deg, #1f73e6 0%, #1557b0 100%); color: #ffffff; padding: 32px; margin: 32px 0; border-radius: 8px; text-align: center;">
                                <p style="margin: 0 0 12px; font-size: 14px; font-weight: 600; text-transform: uppercase; letter-spacing: 0.5px; opacity: 0.9;">Your Placement</p>
                                <h2 style="margin: 0; font-size: 36px; font-weight: 700;">Level {{ $attempt->level }}</h2>
                                <p style="margin: 12px 0 0; font-size: 15px; opacity: 0.95;">You're ready to begin your course</p>
                            </div>

                            <p style="margin: 0 0 24px; font-size: 15px; line-height: 1.6; color: #5f6368;">Based on your performance, you have been placed in <strong>Level {{ $attempt->level }}</strong> of our program. This placement ensures you'll have the most effective learning experience tailored to your current skill level.</p>

                            <!-- Retake Option -->
                            <div style="background-color: #f1f3f4; padding: 20px; margin: 32px 0; border-radius: 4px;">
                                <p style="margin: 0 0 12px; font-size: 14px; font-weight: 600; color: #1a1a1a;">Request a Retake (Optional)</p>
                                <p style="margin: 0; font-size: 14px; line-height: 1.6; color: #5f6368;">If you believe your test result doesn't reflect your true ability due to technical issues or other difficulties, you may request a one-time retake. Email us within <strong>2 days</strong> with a brief explanation.</p>
                            </div>

                            <p style="margin: 0 0 24px; font-size: 15px; line-height: 1.6; color: #5f6368;">We will contact you soon with detailed course instructions and schedule updates well before the official start date.</p>

                            <p style="margin: 0; font-size: 15px; line-height: 1.6; color: #5f6368;">We're excited to have you in our program!</p>
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