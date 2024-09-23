<?php

namespace App\Models;

use App\Models\User;
use App\Models\CategoriesModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BlogModel extends Model
{
    use HasFactory;
    protected $fillable = [

        'category_id',
        'author_id',
        'title',
        'content',
        'featured_image',
    ];
    protected $primaryKey = "blog_id";

    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    // Define relationship to Category
    public function category()
    {
        return $this->belongsTo(CategoriesModel::class, 'category_id');
    }

}
