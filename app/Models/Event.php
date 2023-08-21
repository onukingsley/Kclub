<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = ['venue','event_name','description','dress_code','ticketing','event_date','image'];

    function cart(){
        return $this->hasMany(Cart::class, 'cart_id');
    }

    function ticket(){
        return $this->hasMany(Ticket::class, 'ticket_id');
    }
    function order(){
        return $this->hasMany(Order::class, 'order_id');
    }
}
