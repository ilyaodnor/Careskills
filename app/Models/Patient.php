<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class Patient extends Model
{
    protected $fillable = [
        'name',
        'surname',
        'gender',
        'age',
        'diagnosis_id',
        'medical_history',
        'symptoms',
        'weight',
        'height',
        'background',
        'allergies',
        'chronic_conditions',
        'current_medications',
        'smoker',
        'alcohol_use',
        'blood_pressure',
        'pulse',
        'temperature_c',
        'oxygen_saturation',
        'pain'
    ];
    public function diagnoses()
    {
        return $this->belongsToMany(Diagnosis::class, 'patient_diagnosis');
    }
    public function treatments()
    {
        return $this->hasMany(Treatment::class);
    }
    public function symptoms()
    {
        return $this->belongsToMany(Symptom::class, 'patient_symptom');
    }
    public function pastDiagnoses()
    {
        return $this->belongsToMany(Diagnosis::class, 'patient_history');
    }
}
