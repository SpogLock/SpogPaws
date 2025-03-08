<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Adoption extends Model
{
    protected $fillable = [
        'name',
        'description',
        'is_adopted',
        'adoption_date',
        'contact'
    ];
}
