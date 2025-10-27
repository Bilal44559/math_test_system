<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Time Expired</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8fafc;
            font-family: 'Poppins', sans-serif;
        }

        .timeout-container {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        h2 {
            color: #dc3545;
            font-weight: 700;
            margin-top: 1.5rem;
        }

        p {
            color: #6c757d;
            font-size: 1rem;
            max-width: 400px;
            margin: 10px auto 0;
        }

        svg {
            width: 220px;
            height: auto;
        }
    </style>
</head>
<body>
    <div class="timeout-container">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 400 400">
            <circle cx="200" cy="200" r="180" fill="#fdecea"/>
            <circle cx="200" cy="200" r="140" fill="none" stroke="#dc3545" stroke-width="8" stroke-dasharray="10 10" stroke-linecap="round"/>
            <path d="M200 100 v90 l60 40" fill="none" stroke="#dc3545" stroke-width="10" stroke-linecap="round" stroke-linejoin="round"/>
            <circle cx="200" cy="200" r="12" fill="#dc3545"/>
            <path d="M120 300 q80-40 160 0" fill="none" stroke="#adb5bd" stroke-width="6" stroke-linecap="round" opacity="0.5"/>
        </svg>

        <h2>Time’s Up!</h2>
        <p>{{ 'Your test session has expired. Please contact your instructor for assistance.' }}</p>
    </div>
</body>
</html>
