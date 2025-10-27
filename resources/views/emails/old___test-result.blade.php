<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Test Result</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f5f5f5; padding: 30px; color: #333; }
        .container { background: #fff; border-radius: 8px; padding: 25px; max-width: 600px; margin: auto; box-shadow: 0 0 8px rgba(0,0,0,0.1); }
        h2 { color: #007bff; }
        .summary { margin-top: 20px; }
        .summary p { margin: 6px 0; }
        .status { font-weight: bold; font-size: 16px; margin-top: 15px; }
        .passed { color: green; }
        .failed { color: red; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Hello, {{ $user->name }}</h2>
        <p>Your test for <strong>Level {{ $attempt->level }}</strong> has been completed.</p>

        <div class="summary">
            <p><strong>Total Questions:</strong> {{ $attempt->total_questions }}</p>
            <p><strong>Correct Answers:</strong> {{ $attempt->correct_count }}</p>
            <p><strong>Incorrect Answers:</strong> {{ $attempt->incorrect_count }}</p>
            <p class="status {{ $attempt->status }}">
                Result: {{ ucfirst($attempt->status) }}
            </p>
        </div>

        @if($attempt->status === 'passed')
            <p>🎉 Congratulations! You have successfully cleared this level.</p>
        @else
            <p>😞 Unfortunately, you did not clear this level. Please try again later.</p>
        @endif

        <p>Thank you,<br><strong>{{ config('app.name') }}</strong></p>
    </div>
</body>
</html>
