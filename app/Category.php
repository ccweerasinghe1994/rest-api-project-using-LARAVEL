<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $fillable = [
        'name',
        'description'
    ];
// this is a many to many relationship to achieve this we need a pivot table we will create it later
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
