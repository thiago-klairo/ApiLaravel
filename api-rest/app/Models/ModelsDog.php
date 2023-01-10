<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelsDog extends Model
{
    protected $fillable = [
        'raca',
        'nome'
    ];

    use HasFactory;
}
