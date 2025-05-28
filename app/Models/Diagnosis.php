<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Diagnosis extends Model
{
    protected $fillable = [
        'name',
        'description',
    ];

    public function symptoms()
    {
        return $this->belongsToMany(Symptom::class);
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
        return $this->belongsToMany(Patient::class);
    }
    public function patientsWithHistory()
    {
        return $this->belongsToMany(Patient::class, 'patient_history');
    }

}
