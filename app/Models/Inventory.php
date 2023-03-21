<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Inventory extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'product_models_id',
        'minAlert',
        'quantity',
        'maxAlert',
        'purchasePrice',
        'salePrice',
        'type'
    ];

    // Relations
    public function productModel(){
        return $this->belongsTo(ProductModel::class, 'product_models_id', 'id');
    }
}
