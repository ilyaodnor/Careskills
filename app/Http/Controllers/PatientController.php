<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\File;
use App\Models\Patient;
use App\Models\Symptom;
use Illuminate\Http\Request;
class PatientController extends Controller
    {
        public function show(Request $request, $patient_id){
            $patient = Patient::find($patient_id);
            if (!$patient) {
                abort(404, 'Patient not found');
            }
            $dialoguePath = public_path("CareskillsAssets/characters/{$patient->name}/dialogue.json");

            if (!file_exists($dialoguePath)) {
                abort(404, 'Dialogue file not found');
            }

            $dialogues = json_decode(file_get_contents($dialoguePath), true);

            if (!$dialogues || !isset($dialogues[0])) {
                abort(500, 'Invalid dialogue format');
            }

            $dialogue = $dialogues[0];
            $choiceIndex = $request->get('choice');
            $choice = $followUp = null;

            if (isset($choiceIndex)) {
                $choice = $dialogue['choices'][$choiceIndex] ?? null;
                $followUp = $choice['followUp'] ?? null;
            }

            return view('office', compact('patient', 'dialogue', 'choiceIndex', 'choice', 'followUp'));
        }

        public function savePatientsToDatabase()
        {
            $json = file_get_contents(public_path('CareskillsAssets/scenarios.json'));
            $patients = json_decode($json, true);
            foreach ($patients as $patient) {
                $new_patient = Patient::create([
                    'name' => $patient['name'],
                    'surname' => $patient['surname'],
                    'gender' => $patient['gender'],
                    'age' => $patient['age'],
                    'diagnosis_id' => $patient['diagnosis_id'],
                    'weight' => $patient['weight'],
                    'height' => $patient['height'],
                    'allergies' => $patient['allergies'],
                    'chronic_conditions' => $patient['chronic_conditions'],
                    'current_medications' => $patient['current_medications'],
                    'smoker' => $patient['smoker'],
                    'alcohol_use' => $patient['alcohol_use'],
                    'systolic_bp' => $patient['systolic_bp'],
                    'diastolic_bp' => $patient['diastolic_bp'],
                    'pulse' => $patient['pulse'],
                    'temperature_c' => $patient['temperature_c'],
                    'oxygen_saturation' => $patient['oxygen_saturation'],
                    'pain' => $patient['pain']
                ]);
                if (!empty($patient['symptom_ids'])) {
                    $new_patient->symptoms()->attach($patient['symptom_ids']);
                }
                if (!empty($patient['medical_history'])) {
                    $new_patient->pastDiagnoses()->attach($patient['medical_history']);
                }
            }
        }
        public function exportDialoguesToFiles()
        {
            $json = file_get_contents(public_path('CareskillsAssets/scenarios.json'));
            $patients = json_decode($json, true);

            foreach ($patients as $patient)
            {
                $name = $patient['name'];
                $dialogues = $patient['dialogues'] ?? [];

                $directory = public_path("CareskillsAssets/characters/{$name}");
                if (!File::exists($directory)) {
                    File::makeDirectory($directory, 0755, true);
                }

                $dialoguePath = $directory . '/dialogue.json';
                File::put($dialoguePath, json_encode($dialogues, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

            }

            File::put(public_path('CareskillsAssets/scenarios.json'), json_encode($patients, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
        }

    }
