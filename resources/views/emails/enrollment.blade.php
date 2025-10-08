<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Enrollment Confirmation</title>
</head>

<body>
    <h2>Welcome to TM Math Academy</h2>

    <p>Thank you for enrolling.</p>

    <p><strong>Email:</strong> {{ $emailAddress }}</p>
    <p><strong>Password:</strong> {{ $password }}</p>

    <p>You can access your account using the link below:</p>

    <p><a href="{{ $link }}">{{ $link }}</a></p>

    <p style="margin-top:20px;">Please login and change your password after your first login.</p>

    <p>Regards,<br>TM Math Academy</p>
</body>

</html>
