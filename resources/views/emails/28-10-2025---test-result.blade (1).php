<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Test Complete!</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f0f2f5;
            margin: 0;
            padding: 0;
            -webkit-text-size-adjust: none;
            color: #333;
        }
        .email-container {
            max-width: 600px;
            margin: 30px auto;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        .header {
            background-color: #ffffff;
            padding: 25px;
            text-align: center;
            border-bottom: 1px solid #eee;
        }
        .header .checkmark-circle {
            background-color: #e6ffed;
            border-radius: 50%;
            width: 60px;
            height: 60px;
            margin: 0 auto 15px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .header .checkmark {
            color: #28a745;
            font-size: 36px;
            line-height: 1;
        }
        .header h1 {
            color: #333;
            font-size: 28px;
            font-weight: 700;
            margin: 0;
        }
        .header p {
            color: #666;
            font-size: 16px;
            margin-top: 5px;
        }
        .content {
            padding: 30px 40px;
        }
        .content p {
            font-size: 16px;
            line-height: 1.6;
            margin-bottom: 15px;
        }
        .content .greeting {
            font-size: 18px;
            font-weight: 400;
            color: #333;
        }
        .placement-box {
            background: linear-gradient(135deg, #007bff, #0056b3);
            color: #ffffff;
            border-radius: 8px;
            padding: 25px 30px;
            text-align: center;
            margin: 30px 0;
            box-shadow: 0 4px 10px rgba(0, 86, 179, 0.3);
        }
        .placement-box .label {
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 1px;
            opacity: 0.8;
            margin-bottom: 5px;
        }
        .placement-box .level {
            font-size: 48px;
            font-weight: 700;
            margin: 10px 0;
            line-height: 1;
        }
        .placement-box .message {
            font-size: 16px;
            font-weight: 300;
            opacity: 0.9;
        }
        .summary-details {
            margin-top: 20px;
            background-color: #f8f9fa;
            padding: 15px 20px;
            border-radius: 4px;
            border: 1px solid #e9ecef;
        }
        .summary-details p {
            margin: 5px 0;
            font-size: 15px;
            color: #555;
        }
        .summary-details strong {
            color: #333;
        }
        .status-message {
            font-size: 17px;
            font-weight: 700;
            margin-top: 20px;
            text-align: center;
        }
        .passed-message {
            color: #28a745; /* Green */
        }
        .failed-message {
            color: #dc3545; /* Red */
        }
        .retake-section {
            background-color: #f8f9fa;
            border-left: 5px solid #007bff;
            padding: 20px 25px;
            border-radius: 4px;
            margin: 30px 0;
        }
        .retake-section strong {
            color: #007bff;
            font-weight: 700;
            font-size: 17px;
        }
        .retake-section p {
            font-size: 15px;
            color: #555;
            margin-top: 8px;
            margin-bottom: 0;
        }
        .footer {
            padding: 25px 40px;
            border-top: 1px solid #eee;
            background-color: #f8f9fa;
            font-size: 14px;
            color: #777;
            line-height: 1.6;
        }
        .footer strong {
            color: #333;
            font-weight: 700;
        }
        .footer .copyright {
            margin-top: 20px;
            font-size: 12px;
            color: #999;
        }
    </style>
</head>
<body>
    <div class="email-container">
         <div class="email-container">
        @if($attempt->status === 'passed')
            <div class="header">
                <div class="status-icon-circle passed-icon">
                    <span>&#10003;</span> {{-- Checkmark --}}
                </div>
                <h1>Test Complete!</h1>
                <p>Your course placement is ready</p>
            </div>
        @else {{-- Failed --}}
            <div class="header">
                <div class="status-icon-circle failed-icon">
                    <span>&#10006;</span> {{-- Cross mark --}}
                </div>
                <h1>Test Result</h1>
                <p>Review your performance below</p>
            </div>
        @endif


        <div class="content">
            <p class="greeting">Hello, {{ $user->name }}</p>
            <p>Thank you for completing the online diagnostic test. We've reviewed your performance and are pleased to share your results.</p>

            {{-- Original functionality for test results --}}
            <div class="summary-details">
                <p><strong>Test for Level:</strong> {{ $attempt->level }}</p>
                <p><strong>Total Questions:</strong> {{ $attempt->total_questions }}</p>
                <p><strong>Correct Answers:</strong> {{ $attempt->correct_count }}</p>
                <p><strong>Incorrect Answers:</strong> {{ $attempt->incorrect_count }}</p>
                <p class="status-message @if($attempt->status === 'passed') passed-message @else failed-message @endif">
                    Result: {{ ucfirst($attempt->status) }}
                </p>
            </div>

            @if($attempt->status === 'passed')
                <div class="placement-box">
                    <div class="label">YOUR PLACEMENT</div>
                    <div class="level">Level {{ $attempt->level }}</div>
                    <div class="message">You're ready to begin your course</div>
                </div>
                <p>🎉 Congratulations! You have successfully cleared this level. Based on your performance, you have been placed in <strong>Level {{ $attempt->level }}</strong> of our program. This placement ensures you'll have the most effective learning experience tailored to your current skill level.</p>
            @else
                <p class="status-message failed-message">😞 Unfortunately, you did not clear this level. Please try again later.</p>
                <p>Based on your performance, you did not achieve the passing score for Level {{ $attempt->level }}. This placement ensures you'll have the most effective learning experience tailored to your current skill level.</p>
                <div class="retake-section">
                    <strong>Request a Retake (Optional)</strong>
                    <p>If you believe your test result doesn't reflect your true ability due to technical issues or other difficulties, you may request a one-time retake. Email us within <strong>2 days</strong> with a brief explanation.</p>
                </div>
            @endif

            <p>We will contact you soon with detailed course instructions and schedule updates well before the official start date.</p>
            <p>We're excited to have you in our program!</p>
        </div>

        <div class="footer">
            <p>Thank you,<br><strong>{{ config('app.name') }}</strong></p>
            <p class="copyright">&copy; 2023. TM Academy. All rights reserved.</p>
        </div>
    </div>
</body>
</html>