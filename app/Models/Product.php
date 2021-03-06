<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        "name",
        "price",
        "description",
        "images",
        "quantity",
        "height",
        "width",
        "category_id",
    ];

    protected $casts = [
        "images" => "array",

    ];

    public function category() {
        return $this -> belongsTo(Category::class ,'category_id');
    }

    public function offer() {
        return $this -> hasOne(Offer::class);
    }

    public function cart() {
        return $this -> hasMany(Cart::class );
    }
}
