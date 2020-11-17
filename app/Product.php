<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    const AVAILABLE = 'available';
    const UNAVAILABLE = 'unavailable';

//    values that are massively assign to the table
    protected $fillable = [
        'name',
        'description',
        'quantity',
        'status',
        'image',
        'seller_id'
    ];
// this method will return status return true if the status equal to available

    /**
     * @return bool
     */
    public function isAvailable(): bool
    {
        return $this->status == Product::AVAILABLE;
    }

    public function seller()
    {
        return $this->belongsTo(Seller::class);
    }

    public function transaction()
    {
        return $this->hasMany(Transaction::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
