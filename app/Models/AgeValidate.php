<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgeValidate extends Model
{
    use HasFactory;
    protected $table = 'age_validates';
    protected $fillable = [
        'name',
        'email',
        'number',
        'age'
    ];
}
