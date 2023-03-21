<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'productName',
        'product_categories_id',
        'description',
        'product_photo_path_id'
    ];

    // Relations
    public function category(){
        return $this->hasOne(ProductCategory::class, 'id', 'product_categories_id');
    }

    public function photos(){
        return $this->hasMany(ProductPhoto::class, 'id', 'product_photo_path_id');
    }

    public function productModel(){
        return $this->hasMany(ProductModel::class, 'products_id', 'id');
    }
}
