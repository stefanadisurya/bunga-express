<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    protected $table = 'products';

    protected $fillable = [
        'name', 'price', 'user_id', 'description', 'image'
    ];

    public function carts() {
        return $this->hasMany(Cart::class);
    }

    public function detailTransactions() {
        return $this->hasMany(DetailTransaction::class);
    }
}
