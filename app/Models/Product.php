<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = [
        'name',
        'price',
        'img',
        'quantity',
        'description',
        'author',
        'publication_year',
        'category_id'
    ];
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');

    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    
}
