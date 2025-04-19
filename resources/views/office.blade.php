<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/office.js'])
    <title>Document</title>
</head>
<body>
<style>
    body{
        background-image: url('{{ asset('images/background.png') }}');
        background-size: cover;
    }
</style>
<main>
    <div class="patient">
        <img src="{{asset('images/old-man.png') }}" alt="Patient Image">
    </div>

    <play-button class="Menu" id="menuButton">
        <span class="bar top"></span>
        <span class="bar middle"></span>
        <span class="bar bottom"></span>
    </play-button>

    <play-button class="menu" id="menu">
        <button onclick="window.location.href='{{ route('main') }}'" class="menu-item">Go back to menu</button>
        <button class="menu-item" id="openSettings">Settings</button>
        <button id="toggleAudio" class="menu-item">Audio on/off</button>
        <audio id="audioPlayer" src="https://darn.es/sounds/daviddarnes.m4a"></audio>
    </play-button>

    <!-- Модальное окно -->
    <div class="modal" id="settingsModal">
        <div class="modal-content">
            <span class="close" id="closeModal">&times;</span>
            <h2>Settings</h2>
            <p> o </p>
            <button class="save-settings" id="save-settings">Save settings</button>
        </div>
    </div>
</main>

</body>
</html>
