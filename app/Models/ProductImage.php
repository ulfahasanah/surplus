<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'image_id'
    ];

    public function image()
    {
        return $this->belongsTo('App\Models\Image');
    }

    public function product()
    {
        return $this->belongsTo('App\Models\Product');
    }
}
