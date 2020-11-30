<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    public $primaryKey = 'ticket_id';
    
    protected $fillable = [
        'from_city_id',
        'to_city_id',
        'price',
        'departure_time',
        'arrival_time',
        'path_time',
        'train_id'
    ];

    // public function train() {
    //     return $this->belongsTo('App\Models\Train');
    // }

    // public function city() {
    //     return $this->hasOne('App\Models\City');
    // }

    // public function toCity() {
    //     return $this->hasOne('App\Models\City');
    // }

    // public function fromCity() {
    //     return $this->hasOne('App\Models\City');
    // }

    public function users()
    {
        return $this->belongsToMany('App\Models\User');
    }
}
