<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/9efe11bfbd.js" crossorigin="anonymous"></script>
    <script src="assets/js/app.js" type="module" defer></script>
    <link rel="stylesheet" href="assets/css/app.css">

    @vite('resources/scss/app.scss','resources/js/app.js')
</head>
<body>
    <div class="content">
        @yield('content')
    </div>
</body>
</html>