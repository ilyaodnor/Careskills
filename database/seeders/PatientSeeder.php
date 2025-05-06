<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Http\Controllers\PatientController;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $controller = new \App\Http\Controllers\PatientController();
        $controller->savePatientsToDatabase();
        $controller->exportDialoguesToFiles();
    }

}
