<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    use HasFactory;
    protected $fillable = [
        'con_nome',
        'con_numero',
        'con_email',
        'user_id'
    ];
}
