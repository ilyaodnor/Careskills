<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Http\Controllers\DiagnosisController;
class DiagnosisSeeder extends Seeder
{
    public function run(): void
    {
        $controller = new DiagnosisController();
        $controller->saveSymptomsToDatabase();
        $controller->saveDiagnosesToDatabase();
    }

}
