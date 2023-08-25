<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;


    protected $fillable = [
        'user_id',
        'name',
        'ref',
        'link_video',
        'link_store',
        'transport_mode',
        'expedition_date',
        'country_of_purchase',
        'selling_price',
        'buying_price',
        'description',
        'status',
        'note'
    ];


    protected $casts = [
        'user_id' => 'integer',
        'name' => 'string',
        'ref' => 'string',
        'link_video' => 'string',
        'link_store' => 'string',
        'transport_mode' => 'string',
        'expedition_date' => 'datetime',
        'country_of_purchase' => 'string',
        'selling_price' => 'float',
        'buying_price' => 'float',
        'description' => 'string',
    ];

    protected $appends = [
        'image'
    ];

    protected $with = [ 'deliveries', 'offers' ];

    public function variations(){
        return $this->hasMany('App\Models\ProductVariation');
    }

    public function users()
    {
        return $this->hasManyThrough(User::class, ProductAgente::class, 'product_id', 'id', 'id', 'agente_id');
    }

    public function deliveries(){
        return $this->hasMany(ProductDelivery::class,'product_id');
    }

    public function product_image(){
        return $this->hasOne(ProductImage::class, 'product_id', 'id');
    }

    public function getImageAttribute() {
        return !!$this->product_image ? $this->product_image->image_path : null;
    }

    public function offers() {
        return $this->hasMany(ProductOffer::class);
    }

    public function formatForOrder() {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'ref' => $this->ref,
            'variations' => $this->variations->map->formatForOrder(),
            'image' => $this->image,
            'available_with' => $this->deliveries->map(fn($d) => $d->delivery_id),
            'offeres' => $this->offers
        ];
    }
}
