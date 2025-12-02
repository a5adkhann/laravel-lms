<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login LMS</title>
</head>
<body>
    <form action="/login" method="POST">
        @csrf
        <input class="border" type="email" name="email">
        <input class="border" type="password" name="password">

        <button>Login</button>
    </form>
</body>
</html>