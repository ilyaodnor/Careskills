<button class="menu-btn" id="menuButton">
    <span class="bar top"></span>
    <span class="bar middle"></span>
    <span class="bar bottom"></span>
</button>
<div class="menu" id="menu">
    <a href="{{ url('/') }}" class="menu-item">Go back to menu</a>
    <a href="{{ route('profile.edit') }}" class="menu-item" id="openSettings">Settings</a>
    <a class="menu-item" id="audioButton">Audio pause</a>
</div>
<div id="overlay" style="display: none;"></div>
