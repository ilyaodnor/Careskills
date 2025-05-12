<div class="dialogue-wrapper" id="dialogueWraper">

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
