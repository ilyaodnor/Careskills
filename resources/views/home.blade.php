<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Careskills</title>
    @vite(['resources/css/home.css', 'resources/js/home.js'])
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body {
        }
    </style>

</head>
<body>
<div class="logo-container">
    <img src="CareskillsAssets/Social-media-icons/Da-Vinci-College-Logo.png" alt="">
    <a class="logo" href="{{ route('home') }}">Da Vinci: Careskills</a>
</div>

<main>

    <header>
        <div class="main-containers">
            <div class="players__statistic">

                <h1 class="header-players__statistic">Top Players:</h1>
                <ol>
                <li class="player-statistic">
                    <p class="rank-circle gold" style="background: url('{{ asset("CareskillsAssets/Textures/gold.jpg") }}');">1</p>
                    <div class="player__info">
                        <p class="players-name">Player: Lev</p>
                        <p class="players-xp">|XP: 2133</p>
                    </div>
                </li>

                <li class="player-statistic">
                    <p class="rank-circle silver" style="background: url('{{ asset("CareskillsAssets/Textures/silver.jpg") }}');">2</p>
                    <div class="player__info">
                        <p class="players-name">Player: Ilya</p>
                        <p class="players-xp">|XP: 2111</p>
                    </div>
                </li>

                <li class="thirdly-player-position">
                    <p class="rank-circle bronze" style="background: url('{{ asset("CareskillsAssets/Textures/bronze.jpg") }}');">3</p>
                    <div class="player__info">
                        <p class="players-name">Player: David</p>
                        <p class="players-xp">|XP: 1729</p>
                    </div>
                </li>

                <li class="else-players">
                    <p class="rank-circle gray">4</p>
                    <div class="player__info">
                        <p class="players-name">Player: Vasya</p>
                        <p class="players-xp">|XP: 900</p>
                    </div>
                </li>

                <li class="else-players">
                    <p class="rank-circle gray">5</p>
                    <div class="player__info">
                        <p class="players-name">Player: Grisha</p>
                        <p class="players-xp">|XP: 123</p>
                    </div>
                </li>
                </ol>
            </div>


            <div class="game__container">
                <a href="{{ route('office') }} " class="continue-button">Continue</a>
                <a href="{{ route('office') }} " class="New-game-button">New game</a>
                <a id = "settingsButton">Settings</a>
            </div>
            <div class="user__info">
                <h2>Naam: Ilya Odnoral</h2>
                <h2>XP:  1300</h2>
                <h2>Achievements: </h2>
                <h2>Highest scoor: 98%</h2>
                <a href="">Meer</a>
            </div>
        </div>
    </header>

</main>

<footer>
    <div class="container">
        <div class="footer__about">
            <span class="footer__copyright">© 2025 - ROC Da Vinci College</span>
            <ul class="footer__about-list">
                <li>
                    <p>Website door MBO4 da Vinci studenten.</p>
                </li>
                <li>
                    <a href="https://www.davinci.nl/privacy-en-cookieverklaring/" class="footer__bottom-list-link">
                        Privacy- en cookieverklaring
                    </a>
                </li>
            </ul>
        </div>

        <div class="footer__socialmedia">
            <span class="footer__socialmedia-text">Volg ons op:</span>
            <ul class="footer__socialmedia-list">
                <li><a href="https://www.facebook.com/rocdavincicollege/" target="_blank"><img src="{{ asset('CareskillsAssets/Social-media-icons/facebook.png') }}" class="facebook-icon"></a></li>
                <li><a href="https://www.instagram.com/davincicollege/" target="_blank"><img src="{{ asset('CareskillsAssets/Social-media-icons/instagram.png') }}" class="instagram-icon"></a></li>
                <li><a href="https://www.linkedin.com/company/da-vinci-college-dordrecht" target="_blank"> <img src="{{ asset('CareskillsAssets/Social-media-icons/linkedin.png') }}" class="linkedin-icon"></a></li>
                <li><a href="https://www.youtube.com/user/davincicollge" target="_blank"><img src="{{ asset('CareskillsAssets/Social-media-icons/youtube.png') }}" class="youtube-icon"></a></li>
            </ul>
        </div>
    </div>
</footer>
</body>
</html>
