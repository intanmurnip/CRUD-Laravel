<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Mendefinisikan tabel products di database
    protected $table = 'products';

    // Mempersilahkan user untuk menginputkan langsung ke database
    protected $fillable = ['product_name', 'product_price', 'product_type', 'expired_at'];
}
