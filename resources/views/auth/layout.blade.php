<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Science Academy</title>
    <link rel="stylesheet" href="{{ url('css/login.css') }}">
</head>
<body>
    <div class="container">
        <div class="image-panel @yield('image')"></div>
        <div class="login-panel">
            <div class="wrapper">
                @yield('content')
            </div>
        </div>
    </div>
</body>
</html>