<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'product_name', 'product_brand', 'product_price', 'product_qte', 'product_unit', 
        'product_image_url', 'product_category_id',
    ];
}
