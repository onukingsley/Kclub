<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['category_name','category_image'];

    /*
     * Relationship
     * */
    function item(){
        return $this->hasMany(Item::class,'item_id');
    }

}
