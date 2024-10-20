<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Define the fillable attributes
    protected $fillable = ['barcode', 'description', 'price', 'quantity', 'category'];
}