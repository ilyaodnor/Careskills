<div class="indicators-container">
    <p class="{{ $patient->temperature_c > 37.2 || $patient->temperature_c < 35.0 ? 'text-red-500' : 'text-white' }}">
        Temp: {{ $patient->temperature_c }}°C
    </p>
    <p class="{{ $patient->pulse < 60 || $patient->pulse > 100 ? 'text-red-500' : 'text-white' }}">
        Pulse: {{ $patient->pulse }}
    </p>
    <p class="{{ $patient->systolic_bp < 90 || $patient->systolic_bp > 130  || $patient->diastolic_bp < 60 || $patient->diastolic_bp > 80 ? 'text-red-500' : 'text-white'}}">
        BP: {{ $patient->systolic_bp . '/' . $patient->diastolic_bp }}
    </p>
    <p class="{{ $patient->oxygen_saturation < 95 ? 'text-red-500' : 'text-white'}}">O2: {{ $patient->oxygen_saturation }}</p>
</div>
