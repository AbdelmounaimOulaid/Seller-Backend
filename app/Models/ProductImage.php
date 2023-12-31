<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id' , 
        'image_path'
    ];

    protected $casts = [
        'product_id' => 'integer',
        'image_path' => 'string',
    ];

    public function products(){
        return $this->belongsTo(Product::class,'product_id');
    }
}
