<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductModel extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'itemname',
        'detail',
        'price',
        'discounted_price',
        'product_id',
        'description',
        'picture',
        'picture1',
        'picture2',
        'picture3',
        'color',
    ];
    protected $primaryKey = "item_id";
    public function category()
{
    return $this->belongsTo(ProductCategory::class, 'product_id');
}

}
