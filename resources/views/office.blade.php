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
        background-image: url('{{ asset('images/Kantoor.png') }}');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        overflow: hidden;
    }
</style>

<main>
    {{--MENU BUTTON--}}
    <button class="menu-btn" id="menuButton">
        <span class="bar top"></span>
        <span class="bar middle"></span>
        <span class="bar bottom"></span>
    </button>
    {{--MENU--}}
    <div class="menu" id="menu">
        <a href="{{ route('home') }}" class="menu-item">Go back to menu</a>
        <button class="menu-item" id="openSettings">Settings</button>
        <button class="menu-item">Audio on/off</button>
    </div>
    {{--PATIENT IMG--}}
    <div class="patient">
        <img src="{{ asset('images/old-man.png') }}" alt="Old man">
    </div>

    {{--DIALOG--}}
    <div class="dialogue-wrapper">

        <div class="dialogue">
            <div class="dialogue-box">Dokter, ik heb al weken rugpijn... Is het gewoon ouderdom?</div>
            <div class="dialogue-arrow"></div>
        </div>
        <div class="answer">
            <div class="answer-option">Het kan slijtage zijn van de wervels. We maken een scan om dat te zien. </div>
        </div>
    </div>

    {{--ITEMS BOX--}}
    <x-items-box />


</main>

</body>

</html>
