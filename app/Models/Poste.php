<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poste extends Model
{
    use HasFactory;
    protected $fillable =[
        'name',
        'carte_graphique',
        'processeur',
        'carte_mere',
        'ram',
        'memoire',
        'type',
    ];
}