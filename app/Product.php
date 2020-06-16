<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
     protected $fillable = [
        'Title', 'Discription', 'Price','Compare_price','Image','SKU','Barcode','Quantity',
    ];
}
