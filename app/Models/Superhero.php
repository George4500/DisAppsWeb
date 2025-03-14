<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Superhero extends Model
{
    use HasFactory;

    protected $table = 'superheroes';

    protected $fillable =[
        'gender_id',
        'universe_id',
        'real_name',
        'name',
        'picture',
    ];
}