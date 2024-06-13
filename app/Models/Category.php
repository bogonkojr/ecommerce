<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'product_type_id', 'status'];

    public function productType()
    {

    return $this->belongsTo(ProductType::class);

    }

    public function products()
    {

    return $this->hasMany(Product::class);

    }
}
