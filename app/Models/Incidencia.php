<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Incidencia extends Model
{
    use HasFactory;
    protected $fillable = [
        'cliente_id',
        'incidente',
        'email',
        'token',
    ];

    public $timestamps = false;
}
