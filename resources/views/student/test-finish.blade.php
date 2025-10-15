<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Test Finished</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f8f9fa;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            color: #333;
        }
        .container {
            background: #fff;
            padding: 40px 50px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            text-align: center;
            max-width: 600px;
        }
        h2 {
            color: #e63946;
            margin-bottom: 20px;
        }
        p {
            font-size: 16px;
            color: #555;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>{{ $message }}</h2>
        <p>Thank you for attempting the test. Please check your email for details.</p>
    </div>
</body>
</html>
