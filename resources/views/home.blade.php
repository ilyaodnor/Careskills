<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Careskills</title>
    @vite(['resources/css/home.css', 'resources/js/home.js'])
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</head>
<body>
<div class="logo-container">
    <img src="CareskillsAssets/Social-media-icons/Da-Vinci-College-Logo.png" alt="">
    <a class="logo" href="{{ url('/') }}">Da Vinci: Careskills</a>
</div>

<main>
    <div class="main-containers">
        <x-home.main-containers.players-statistic />
        <x-home.main-containers.game-container />
        <x-home.main-containers.user-statistic />
    </div>
    <x-home.about-us />
</main>
<footer>
    <x-home.homepage-footer />
</footer>
</body>

</html>
