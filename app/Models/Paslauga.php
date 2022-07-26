<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Invoice;
use App\Models\Autoservisas;
use App\Models\Machanikas;

class Paslauga extends Model
{
    use HasFactory;

    public function invoice()
    {
        return $this->hasMany(Invoice::class, 'paslauga_id', 'id');
    }
    public function autoservisas()
    {
        return $this->hasMany(Autoservisas::class, 'autoservisas_id', 'id');
    }
}
