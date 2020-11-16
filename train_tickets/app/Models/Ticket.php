<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    public $primaryKey = 'ticket_id';
    
    // protected $fillable = [
    //     'from_city_id',
    //     'to_city_id',
    //     'price',
    //     'train_id',
    //     'departure_time',
    //     'arrival_time',
    //     'path_time'
    // ];
}
