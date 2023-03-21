<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'products_id',
        'colors_id',
        'sizes_id',
        'sex'
    ];

    public function inventory(){
        return $this->hasOne(Inventory::class, 'product_models_id', 'id');
    }

    public function product() {
        return $this->belongsTo(Product::class, 'products_id', 'id');
    }
}
