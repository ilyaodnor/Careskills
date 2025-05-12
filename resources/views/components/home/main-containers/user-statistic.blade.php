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
