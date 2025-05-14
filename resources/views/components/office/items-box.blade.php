<div class="items-box" id="itemsBox">
    <div class="tooltip" x-data>
        <img
            src="{{ asset('CareskillsAssets/items-icons/medical-book.png') }}"
            alt="Medical Book"
            x-on:click="$dispatch('open-modal', 'MedicalBookMoodal')"
            class="cursor-pointer"
        >
        <span class="tooltip-text">Medische Kaart</span>
    </div>

    <div class="tooltip">
        <img src="{{ asset('CareskillsAssets/items-icons/blood.png') }}" alt="Blood">
        <span class="tooltip-text">Bloed</span>
    </div>
    <div class="tooltip">
        <img src="{{ asset('CareskillsAssets/items-icons/Pills.png') }}" alt="Pills">
        <span class="tooltip-text">Paracetomol</span>
    </div>
</div>

