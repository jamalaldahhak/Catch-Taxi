<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <h1>مرحباً بك في الـ Dashboard</h1>
    <p>تم تسجيل الدخول بنجاح!</p>

    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit">تسجيل الخروج</button>
    </form>
</body>
</html>
