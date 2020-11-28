<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $table = "products";

    public function productType(){
        return $this->belongsTo(ProductType::class);
    }
    public function productBrand(){
        return $this->belongsTo(Brand::class);
    }
    public function productVendor(){
        return $this->belongsTo(Vendor::class);
    }
    public function sale(){
        return $this->hasMany(Sale::class);
    }
}
