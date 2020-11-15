<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    public $primaryKey = 'city_id';

    protected $fillable = [
        'city_name',
        'city_code',
    ];
}
