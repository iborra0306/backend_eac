<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matricula extends Model
{
    use HasFactory;

    protected $fillable = [
        'estudiante_id',
        'modulo_id'
    ];

    public function estudiante()
    {
        return $this->belongsTo(User::class, 'estudiante_id');
    }

}
