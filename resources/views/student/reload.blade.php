<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Reload Detected</title>
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
            color: #fd7e14;
            font-weight: 700;
            margin-top: 1.5rem;
        }

        p {
            color: #6c757d;
            font-size: 1rem;
            max-width: 420px;
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
        <!-- RELOAD SVG ICON -->
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 400 400">
            <circle cx="200" cy="200" r="180" fill="#fff4e6"/>
            <path d="M200 80
                     A120 120 0 1 1 100 200"
                  fill="none" stroke="#fd7e14" stroke-width="12" stroke-linecap="round"/>
            <polygon points="90,160 130,200 90,240" fill="#fd7e14"/>
            <circle cx="200" cy="200" r="140" fill="none" stroke="#fd7e14" stroke-width="8" stroke-dasharray="10 10" stroke-linecap="round"/>
        </svg>

        <h2>Page Reload Detected</h2>
        <p>{{ 'Your test session has ended due to page reload. Please contact your instructor to restart.' }}</p>
    </div>
</body>
</html>
