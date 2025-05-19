<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    
    //hasmany:kategori (Category) nesnesinin birden fazla ürünü (Product) olabilir
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
