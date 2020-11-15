<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
    use HasFactory;

    public $primaryKey = 'train_id';

    protected $fillable = [
        'train_name',
    ];
}
