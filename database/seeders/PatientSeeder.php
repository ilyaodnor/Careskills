<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PatientSeeder extends Seeder
{
    public function run()
    {
        Patient::create([
            'avatar' => 'default-avatar',
            'name' => 'Jan',
            'surname' => 'Jansen',
            'gender' => 'Man',
            'age' => 67,
            'medical_history' => 'Langdurige rugklachten.',
            'symptoms' => 'Rugpijn, stijfheid in de ochtend.',
            'current_medications' => 'Paracetamol, Ibuprofen',
            'allergies' => 'Penicilline',
            'chronic_conditions' => 'Artrose',
            'smoker' => true,
            'alcohol_use' => false,
            'weight' => 82,
            'height' => 175
        ]);
    }
    public function kun(): void
    {
        $this->call([
            PatientSeeder::class,
        ]);
    }
}


