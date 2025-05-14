<div class="dialogue-wrapper" id="dialogueWraper">

    <div class="dialogue">
        <div class="dialogue-box">{{ $dialogue['text'] }}</div>
        <div class="dialogue-arrow"></div>
    </div>
    @if ($choiceIndex === null)
        <div class="answer">
            @foreach($dialogue['choices'] as $index => $option)
                <div class="answer-option" data-feedback="{{ $option['followUp']['feedback'] }}">
                    {{ $option['text'] }}
                </div>
            @endforeach
        </div>
    @endif
</div>
