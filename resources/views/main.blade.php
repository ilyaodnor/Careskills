<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/main.css', 'resources/js/app.js'])
    <title>Document</title>
</head>
<body>
<style>
    body{
        background-image: url('{{ asset('images/background.png') }}');
        background-size: cover;
    }
</style>
<div class="patient">
    <img src="{{asset('images/main.png') }}" alt="Patient Image">
</div>

<button class="StartButton"> Start Game </button>

</body>
</html>
