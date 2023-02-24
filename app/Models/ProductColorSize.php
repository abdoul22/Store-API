<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductColorSize extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'product_color_id', 'product_size_id', 'quantity', 'price_two', 'discount', 'status', 'created_at', 'updated_at'];
    protected $table = 'product_color_size';

    public function productColor(){
        return $this->belongsTo(ProductColor::class);
    }

    public function productsize(){
        return $this->belongsTo(ProductSize::class);
    }
}
