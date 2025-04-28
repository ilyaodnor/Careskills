<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Treatment extends Model
{
    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
    public function symptoms()
    {
        return $this->belongsToMany(Symptom::class);
    }
}
