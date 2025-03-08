<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClinicReview extends Model
{
    protected $fillable = [
        'rating',
        'comment',
    ];
}
