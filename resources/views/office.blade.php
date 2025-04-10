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

    <div class="dialogue">
        <div class="dialogue-arrow"></div>
        <div class="dialogue-box">
            <i>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem. lorem</i>
        </div>
    </div>

    <div class="answer">
        <div class="answer-option">
            1. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores culpa cupiditate exercitationem facilis harum illum ipsam maxime mollitia nam neque nisi praesentium quam ratione, repellat saepe temporibus, totam voluptatem voluptates?
        </div>
        <div class="answer-option">
            2. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis incidunt itaque iusto laboriosam
                maxime minus, nobis praesentium. Assumenda at doloribus, ducimus esse nostrum quibusdam repellat
                repellendus suscipit vero vitae! Doloribus!
        </div>


    </div>
</main>
</body>
</html>
