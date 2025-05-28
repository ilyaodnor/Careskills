<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\File;
use App\Models\Symptom;
use App\Models\Diagnosis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

Class DiagnosisController extends Controller
{
    public function saveSymptomsToDatabase()
    {
        $json = file_get_contents(public_path('CareskillsAssets/symptoms.json'));
        $symptoms = json_decode($json, true);
        foreach ($symptoms as $symptom) {
            Symptom::create([
                'name' => $symptom['name'],
                'description' => $symptom['description'] ?? null,
            ]);
        }
    }
    public function saveDiagnosesToDatabase()
    {
        $json = file_get_contents(public_path('CareskillsAssets/diagnoses.json'));
        $diagnoses = json_decode($json, true);
        foreach ($diagnoses as $diagnosis) {
            $new_diagnosis = Diagnosis::create([
                'name' => $diagnosis['name'],
                'description' => $diagnosis['description'] ?? null,
            ]);
            foreach ($diagnosis['symptom_ids'] as $symptom) {
                $new_diagnosis->symptoms()->attach($symptom);
            }
        }
    }

}
