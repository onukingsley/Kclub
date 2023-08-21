<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = ['name','email','phone_no','address','price','image','user_id','event_id','USSID','quantity'];



    function event(){
        return $this->belongsTo(Event::class,'event_id');
    }
    function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
