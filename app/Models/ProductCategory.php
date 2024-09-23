<?php

namespace App\Models;

use App\Models\ProductModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductCategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'picture',
    ];
    protected $primaryKey = "product_id";
    public function products()
{
    return $this->hasMany(ProductModel::class, 'product_id');  // Adjust 'category_id' if necessary
}


}
