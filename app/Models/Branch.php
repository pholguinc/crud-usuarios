<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;

    //Relación uno a muchos inversa

    public function company(){
        return $this->belongsTo(Company::class);
    }
}
