<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Symptom extends Model
{
    protected $fillable = [
        'name',
    ];

    public function diagnoses()
    {
        return $this->belongsToMany(Diagnosis::class);
    }

    public function treatments()
    {
        return $this->belongsToMany(Treatment::class);
    }

    public function scenarios()
    {
        return $this->belongsToMany(Scenario::class);
    }
    public function patients()
    {
        return $this->belongsToMany(Patient::class, 'patient_symptom');
    }
}
