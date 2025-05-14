<?php
    use App\Models\User;
    $users = User::orderBy('level', 'desc')->get();
?>
<div class="players__statistic">
    <h1 class="header-players__statistic">Top Players:</h1>
    <ol>
        <li class="player-statistic">
            <p class="rank-circle gold">1</p>
            <div class="player__info">
                <p class="players-name">{{ $users[0]->name }}</p>
                <p class="players-xp">Level: {{$users[0]->level}}</p>
            </div>
        </li>

        <li class="player-statistic">
            <p class="rank-circle silver" >2</p>
            <div class="player__info">
                <p class="players-name">{{ $users[1]->name }}</p>
                <p class="players-xp">Level: {{$users[1]->level}}</p>
            </div>
        </li>

        <li class="player-statistic">
            <p class="rank-circle bronze">3</p>
            <div class="player__info">
                <p class="players-name">{{ $users[2]->name }}</p>
                <p class="players-xp">Level: {{$users[2]->level}}</p>
            </div>
        </li>

        <li class="player-statistic">
            <p class="rank-circle gray">4</p>
            <div class="player__info">
                <p class="players-name">{{ $users[3]->name }}</p>
                <p class="players-xp">Level: {{$users[3]->level}}</p>
            </div>
        </li>

        <li class="player-statistic">
            <p class="rank-circle gray">5</p>
            <div class="player__info">
                <p class="players-name">{{ $users[4]->name }}</p>
                <p class="players-xp">Level: {{$users[4]->level}}</p>
            </div>
        </li>
    </ol>
</div>
