<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Population extends Model
{
    use HasFactory;

    protected $fillable = [
        'pu_country',
        'pu_total_all',
        'pu_density',
        'pu_median_age',
    ];
}
