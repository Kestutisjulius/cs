<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Invoice;
use App\Models\Autoservisas;

class Paslauga extends Model
{
    use HasFactory;

    public function invoice()
    {
        return $this->hasMany(Invoice::class, 'invoice_id', 'id');
    }
    public function autoservisas()
    {
        return $this->hasMany(Autoservisas::class, 'paslauga_id', 'id');
    }
}
