<x-app-layout>
    <div class="patient">
        <img src="{{ asset('images/characters/oldman.png') }}">
    </div>

    <div class="dialogue-wrapper">
        <div class="dialogue">
            <div class="dialogue-box"><i>"Sinds ik die nieuwe medicijnen gebruik, voel ik me constant moe en duizelig. Ik kan me nauwelijks concentreren op mijn werk"</i></div>
            <div class="dialogue-arrow"></div>
        </div>
        <div class="answer">
            <div class="answer-option">"Dat klinkt als een mogelijke bijwerking van het medicijn. We kunnen de dosering aanpassen of een alternatief overwegen. Ik wil graag bloedonderzoek doen om zeker te zijn."</div>
            <div class="answer-option">"Wat vervelend dat u zich zo voelt. Het is belangrijk dat u zich goed voelt bij uw behandeling. Laten we samen kijken naar een oplossing die beter werkt voor u."</div>
            <div class="answer-option">"Dit hoor ik vaker bij dit middel. U kunt het het beste ’s avonds innemen, dan zijn de bijwerkingen overdag minder merkbaar. Als dat niet helpt, zoeken we iets anders."</div>
        </div>
    </div>
    <x-items-box />
</x-app-layout>

<style>
    body {
        background-image: url('{{ asset('images/backgrounds/background.png') }}');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        overflow: hidden;
    }
</style>
