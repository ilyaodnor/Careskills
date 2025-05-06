<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/office.css', 'resources/js/office.js'])

    <title>Document</title>
</head>
<body>
<style>
    body {
        background-image: url('{{ asset('CareskillsAssets/backgrounds/office.png') }}');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        overflow: hidden;
    }
</style>
<audio id="bg-audio" loop autoplay >
    <source src="{{ asset('/CareskillsAssets/musicAsset/background.mp3') }}" type="audio/mpeg">
    Ваш браузер не поддерживает элемент <code>audio</code>.
</audio>

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
        <button class="menu-item" id="Audio-toggle">Audio on/off </button>
    </div>
    <div id="overlay" style="display: none;"></div>

    <div class="settings" id="settings" style="display: none;">
        <button class="menu-item" id="Save-settings">Save settings</button>
    </div>

    {{--PATIENT IMG--}}
    <div class="patient" id="patient">
        <img src="{{ asset('/CareskillsAssets/characters/oldman/front.png') }}" alt="Old man">
    </div>

    {{--DIALOG--}}
    <div class="dialogue-wrapper" id="dialogueWraper">

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
