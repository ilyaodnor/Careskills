<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Diagnosis extends Model
{
    protected $fillable = [
        'name',
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
}
