<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = ['name','email','phone_no','address','item_name','price','quantity','image','user_id','item_id','event_id'];



    function item(){
        return $this->belongsTo(Item::class,'item_id');
    }
    function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
    function event(){
        return $this->belongsTo(Event::class, 'event_id');
    }


}


