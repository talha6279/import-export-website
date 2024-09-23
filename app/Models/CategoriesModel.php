<?php

namespace App\Models;

use App\Models\BlogModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CategoriesModel extends Model
{
    use HasFactory;
    protected $fillable = [

        'name',
        'description',   
    ];
    protected $primaryKey = "category_id";

    

}
