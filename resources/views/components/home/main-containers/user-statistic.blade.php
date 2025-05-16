<div class="user__info-container">
    <?php
    $userIMGSource = auth()->user()->avatar ? asset('storage/' . auth()->user()->avatar) : asset('CareskillsAssets/users-photos/default-user-photo.png');
    ?>
    <img
        src="{{ $userIMGSource }}"
        alt="Avatar"
        class="w-40 h-40 rounded-full object-cover"
        onerror="this.onerror=null; this.src='{{ asset('CareskillsAssets/users-photos/default-user-photo.png') }}';"
    />


    <div class="user__info">
        <h1 class = "user__name">{{ auth()->user()->name }}</h1>
        <h2 class = "user__level">100Lvl</h2>
        <div class="user-xp-container">
            <div class="xp-bar">
                <div class="xp-bar-filled"></div>
            </div>
        </div>
    </div>
</div>
