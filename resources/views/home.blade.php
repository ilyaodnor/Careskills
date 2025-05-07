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
    <a class="logo" href="{{ route('home') }}">Da Vinci: Careskills</a>
</div>

<main>

        <div class="main-containers">
            <div class="players__statistic">

                <h1 class="header-players__statistic">Top Players:</h1>
                <ol>
                <li class="player-statistic">
                    <p class="rank-circle gold">1</p>
                    <div class="player__info">
                        <p class="players-name">Lev</p>
                        <p class="players-xp">Level: 100</p>
                    </div>
                </li>

                <li class="player-statistic">
                    <p class="rank-circle silver" >2</p>
                    <div class="player__info">
                        <p class="players-name">Ilya</p>
                        <p class="players-xp">Level: 90</p>
                    </div>
                </li>

                <li class="player-statistic">
                    <p class="rank-circle bronze">3</p>
                    <div class="player__info">
                        <p class="players-name">David</p>
                        <p class="players-xp">Level: 83</p>
                    </div>
                </li>

                <li class="player-statistic">
                    <p class="rank-circle gray">4</p>
                    <div class="player__info">
                        <p class="players-name">Vasya</p>
                        <p class="players-xp">Level: 82</p>
                    </div>
                </li>

                <li class="player-statistic">
                    <p class="rank-circle gray">5</p>
                    <div class="player__info">
                        <p class="players-name">Grisha</p>
                        <p class="players-xp">Level: 123</p>
                    </div>
                </li>
                </ol>
            </div>


            <div class="game__container">
                <a href="{{ route('office') }} " class="continue-button">Continue</a>
                <a href="{{ route('office') }} " class="New-game-button">Regels</a>
                <a id = "settingsButton">Instellingen</a>
            </div>
            <div class="user__info-container">

                @if (auth()->check() && auth()->user()->profile_photo_path)
                    <img src="{{ auth()->user()->profile_photo_url }}" alt="User Photo" class="user-photo">
                @else
                    <img src="{{ asset('CareskillsAssets/users-photos/default-user-photo.png') }}" alt="Default Male Photo" class="user-photo">
                @endif

                @if (auth()->check())
                    <h1>{{ auth()->user()->name ?? "Error" }}</h1>
                @else
                    <h1></h1>
                @endif
                <div class="user__info">
                    <h1 class = "user__name">{{ $name ?? 'Name Имя' }}</h1>
                    <h2 class = "user__level">{{ $level ?? "100Lvl" }}</h2>
                    <div class="user-xp-container">
                        <div class="xp-bar">
                            <div class="xp-bar-filled"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <div class="about-us">
        <h1 class="about-us__header">Over ons</h1>
        <p class="about-us__text">Dit is een website gemaakt door studenten van ROC Da Vinci College. Het doel van deze website is om studenten te helpen met het leren van zorgvaardigheden door middel van een interactieve game.</p>
        <p class="about-us__text">De game is ontworpen om studenten te helpen bij het ontwikkelen van hun vaardigheden en kennis in de zorgsector. De game biedt verschillende scenario's en situaties waarin studenten moeten handelen en beslissingen moeten nemen.</p>
        <p class="about-us__text">We hopen dat deze website en de game een waardevolle aanvulling zullen zijn op uw leerervaring.</p>
    </div>
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
                <li>
                    <a href="https://www.facebook.com/rocdavincicollege/" target="_blank">
                        <img src="{{ asset('CareskillsAssets/social-media-icons/facebook.png') }}"
                             class="social-icon facebook-icon"
                             onmouseover="this.src='{{ asset('CareskillsAssets/social-media-icons/facebook-hover.png') }}'"
                             onmouseout="this.src='{{ asset('CareskillsAssets/social-media-icons/facebook.png') }}'">
                    </a>
                </li>
                <li>
                    <a href="https://www.instagram.com/davincicollege/" target="_blank">
                        <img src="{{ asset('CareskillsAssets/social-media-icons/instagram.png') }}"
                             class="social-icon instagram-icon"
                             onmouseover="this.src='{{ asset('CareskillsAssets/social-media-icons/instagram-hover.png') }}'"
                             onmouseout="this.src='{{ asset('CareskillsAssets/social-media-icons/instagram.png') }}'">
                    </a>
                </li>
                <li>
                    <a href="https://www.linkedin.com/company/da-vinci-college-dordrecht" target="_blank">
                        <img src="{{ asset('CareskillsAssets/social-media-icons/linkedin.png') }}"
                             class="social-icon linkedin-icon"
                             onmouseover="this.src='{{ asset('CareskillsAssets/social-media-icons/linkedin-hover.png') }}'"
                             onmouseout="this.src='{{ asset('CareskillsAssets/social-media-icons/linkedin.png') }}'">
                    </a>
                </li>
                <li>
                    <a href="https://www.youtube.com/user/davincicollge" target="_blank">
                        <img src="{{ asset('CareskillsAssets/social-media-icons/youtube.png') }}"
                             class="social-icon youtube-icon"
                             onmouseover="this.src='{{ asset('CareskillsAssets/social-media-icons/youtube-hover.png') }}'"
                             onmouseout="this.src='{{ asset('CareskillsAssets/social-media-icons/youtube.png') }}'">
                    </a>
                </li>
            </ul>
        </div>
    </div>
</footer>
</body>
<script>
    const xpBarFilled = document.querySelector('.xp-bar-filled');

    function updateXP(currentXP, maxXP) {
        const percentage = (currentXP / maxXP) * 100;
        xpBarFilled.style.width = `${percentage}%`;
    }

    setTimeout(() => updateXP(75, 100), 200);
</script>
</html>
