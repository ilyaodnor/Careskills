<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Diagnosis;
use App\Models\Symptom;
class DiagnosisSeeder extends Seeder
{
    public function run(): void
    {
        $symptoms = [
            'Pijn',
            'Stijfheid',
            'Vermoeidheid',
            'Zwakte',
            'Gevoelloosheid',
            'Tintelingen',
        ];

        $diagnosis = Diagnosis::firstOrCreate(['name' => 'Spondylose']);

        $symptomIds = [];

        foreach ($symptoms as $symptomName) {
            $symptom = Symptom::firstOrCreate(['name' => $symptomName]);
            $symptomIds[] = $symptom->id;
        }

        $diagnosis->symptoms()->sync($symptomIds);
    }

}
