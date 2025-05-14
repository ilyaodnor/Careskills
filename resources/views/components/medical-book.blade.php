<div class="max-w-md mx-auto bg-white shadow-2xl rounded-xl overflow-hidden border-4 border-blue-300">
    <div class="bg-blue-100 px-6 py-4 flex items-center justify-between border-b border-blue-300">
        <h2 class="text-xl font-bold text-blue-900">Medisch dossier</h2>
    </div>

    <div class="px-6 py-4 grid grid-cols-2 gap-4 text-sm text-gray-800">
        <div class="col-span-2 flex items-center space-x-4">
            <img src="{{ asset('CareskillsAssets/'.$patient->name.'/avatar.png') }}" alt="Patiënt" class="w-20 h-20 rounded-full border-2 border-blue-200">
            <div>
                <p><strong>Naam:</strong> {{ $patient->name }} {{ $patient->surname }}</p>
                <p><strong>Geslacht:</strong> {{ $patient->gender }}</p>
                <p><strong>Leeftijd:</strong> {{ $patient->age }} jaar</p>
            </div>
        </div>

        <div class="col-span-2 border-t pt-4">
            <h3 class="font-semibold text-blue-700 mb-2">Medische geschiedenis:</h3>
            <p class="text-gray-700 text-sm">{{ $patient->medical_history }}</p>
        </div>

        <div class="col-span-2 border-t pt-4">
            <h3 class="font-semibold text-blue-700 mb-2">Symptomen:</h3>
            <p class="text-gray-700 text-sm">{{ $patient->symptoms }}</p>
        </div>
        @isset($patient->current_medications)
        <div class="col-span-2">
            <h3 class="font-semibold text-blue-700 mt-4 mb-2">Medicijnen:</h3>

                <ul class="list-disc list-inside text-gray-700">
                    @foreach(explode(',', $patient->current_medications) as $medication)
                        <li>{{ $medication }}</li>
                    @endforeach
                </ul>
        </div>
        @endisset

        @isset($patient->allergies)
            <div class="col-span-2">
                <h3 class="font-semibold text-blue-700 mt-4 mb-2">Allergieën:</h3>
                <p>{{ $patient->allergies }}</p>
            </div>
        @endisset

        @isset($patient->chronic_conditions)
        <div class="col-span-2">
            <h3 class="font-semibold text-blue-700 mt-4 mb-2">Chronic Conditions:</h3>
            <p class="text-gray-700 text-sm">{{ $patient->chronic_conditions }}</p>
        </div>
        @endisset

        <div class="col-span-2">
            <h3 class="font-semibold text-blue-700 mt-4 mb-2">Roken:</h3>
            <p class="text-gray-700 text-sm">{{ $patient->smoker ? 'Ja' : 'Nee' }}</p>
        </div>

        <div class="col-span-2">
            <h3 class="font-semibold text-blue-700 mt-4 mb-2">Alcoholgebruik:</h3>
            <p class="text-gray-700 text-sm">{{ $patient->alcohol_use ? 'Ja' : 'Nee' }}</p>
        </div>
        <div class="col-span-2">
            <h3 class="font-semibold text-blue-700 mt-4 mb-2">Gewicht:</h3>
            <p class="text-gray-700 text-sm">{{ $patient->weight }} kg</p>
        </div>

        <div class="col-span-2">
            <h3 class="font-semibold text-blue-700 mt-4 mb-2">Lengte:</h3>
            <p class="text-gray-700 text-sm">{{ $patient->height }} cm</p>
        </div>
    </div>
</div>
