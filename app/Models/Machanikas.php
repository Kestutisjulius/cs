<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Autoservisas;
use App\Models\Paslauga;

class Machanikas extends Model
{
    use HasFactory;

    public function autoservisas()
    {
        return $this->hasMany(Autoservisas::class, 'mechanikas_id', 'id');
    }

}
