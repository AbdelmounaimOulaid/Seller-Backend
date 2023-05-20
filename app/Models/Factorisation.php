<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factorisation extends Model
{
    use HasFactory;

    protected $fillable = [
        'facturation_number',
        'delivery_id',
        'close',
        'paid',
        'commands_number',
        'price',
        'close_at',
        'paid_at',
        'comment'
    ];


    protected $casts = [
        'facturation_number' => 'string',
        'delivery_id' => 'integer',
        'close' => 'boolean',
        'paid' => 'boolean',
        'commands_number' => 'integer',
        'price' => 'integer',
        'close_at' => 'datetime',
        'paid_at' => 'datetime',
        'comment' => 'string'
    ];

    
    public function deliveries(){
        $this->belongsTo(User::class,'delivery_id');
    }
}
