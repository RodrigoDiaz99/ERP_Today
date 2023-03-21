<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'products_id',
        'name',
        'description',
        'instructions',
        'discount',
        'type',
        'items',
        'ending'
    ];

    // Relations
    public function product(){
        return $this->belongsTo(Product::class, 'products_id', 'id');
    }
}
