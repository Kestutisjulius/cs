<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Paslauga;
use App\Models\Machanikas;

class Autoservisas extends Model
{
    use HasFactory;

    public function mechanikas()
    {
        return $this->belongsTo(Machanikas::class, 'mechanikas_id', 'id');
    }
    public function paslauga()
    {
        return $this->hasMany(Paslauga::class, 'paslauga_id', 'id');
    }
}
