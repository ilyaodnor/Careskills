<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

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
        <img src="{{ asset('/CareskillsAssets/characters/'.$patient->name.'/front.png') }}">
    </div>

{{--    DIALOG--}}
    <div class="dialogue-wrapper">

        <div class="dialogue">
            <div class="dialogue-box">{{ $dialogue['text'] }}</div>
            <div class="dialogue-arrow"></div>
        </div>
        @if ($choiceIndex === null)
            <div class="answer">
                @foreach($dialogue['choices'] as $index => $option)
                    <div class="answer-option">
                        <button type="submit" name="choice" value="{{ $index }}">
                            {{ $option['text'] }}
                        </button>
                    </div>
                @endforeach
            </div>
        @endif
    </div>



    {{--ITEMS BOX--}}
    <x-items-box />


</main>

</body>

</html>
