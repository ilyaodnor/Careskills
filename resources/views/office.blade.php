<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/office.css', 'resources/js/office.js'])
    <title>Document</title>
    <style>
        body {
            background-image: url('{{ asset('CareskillsAssets/backgrounds/office.png') }}');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            overflow: hidden;
        }
    </style>
</head>
<body>
<audio id="bg-audio" loop autoplay >
    <source src="{{ asset('/CareskillsAssets/musicAsset/background.mp3') }}" type="audio/mpeg">
</audio>
<main>
    <x-office.menu />
    <x-office.patient-indicators :patient="$patient" />
    <x-office.patient :patient="$patient" />
    <x-office.dialog-wraper :dialogue="$dialogue" :choiceIndex="$choiceIndex" />

{{--    Появление кнопки завершить процесс после выполненого действия --}}
    <button  class="menu-item" id="completeActionBtn" style="display: none; position: absolute; top: 4%; left: 80%">
        Завершить процесс
    </button>

    <div class="syringe">
        <img id="hand-with-syringe" src="/CareskillsAssets/procedures/hand-with-syringe.png" alt="Syringe" style="display: none;">
    </div>
    <div class="hand-with-Paracetomol">
        <img id="hand-with-Paracetomol" src="/CareskillsAssets/procedures/paracetomol.png" alt="Paracetomol" style="display: none;">
    </div>
    <x-modal name="MedicalBookMoodal" :show="false" maxWidth="md">
        <x-medical-book :patient="$patient"/>
    </x-modal>

    <x-office.items-box />
</main>

</body>

</html>
