<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Document</title>
</head>
<body>
<style>
    body {
        background-image: url('{{ asset('images/background.png') }}');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
    }
</style>

<main>
    <div class="patient">
        <img src="{{ asset('images/old-man.png') }}" alt="Old man">
    </div>

    <div class="dialogue-wrapper">

        <div class="dialogue">
            <div class="dialogue-box">lorum ipsum dolor sit amet, consectetur adipisicing elit. Ab accusantium ad alias aliquid amet animi</div>
            <div class="dialogue-arrow"></div>
        </div>
        <div class="answer">
            <div class="answer-option">  lorum ipsum dolor sit amet, consectetur adipisicing elit. Ab accusantium ad alias aliquid amet animi</div>
            <div class="answer-option">  lorum ipsum dolor sit amet, consectetur adipisicing elit. Ab accusantium ad alias aliquid amet animi</div>
            <div class="answer-option">  lorum ipsum dolor sit amet, consectetur adipisicing elit. Ab accusantium ad alias aliquid amet animi</div>
        </div>
    </div>
    <x-items-box />
</main>
</body>
</html>
