<?php 
include(base_path('config/db.php'));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('page-title') | DC</title>
    @vite('resources/js/app.js')
</head>
<body class="vh-100">
    @include('partials.header')
</body>
</html>