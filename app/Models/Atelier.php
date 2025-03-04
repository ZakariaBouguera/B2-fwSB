<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atelier extends Model
{
    use HasFactory;
    public function responsables(){
        return $this->belongsTo(Responsable::class);
    }
}
