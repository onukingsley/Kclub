<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = ['item_name','image','price','quantity','discount_price','description','category_id'];

    public function order(){
        return $this->hasMany(Order::class,'order_id');
    }
    public function cart(){
        return $this->hasMany(Order::class,'cart_id');
    }
    public function category(){
        return $this->belongsTo(Order::class,'category_id');
    }
}
