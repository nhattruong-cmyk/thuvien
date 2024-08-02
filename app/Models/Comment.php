<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'product_id',
        'comment',
        'rating',
        'parent_id',
    ];
    public $timestamps = true;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    public function replies()
    {
        return $this->hasMany(Comment::class, 'parent_id');
    }
    // Phương thức để lấy thời gian theo múi giờ địa phương
    public function getCreatedAtInLocalTimezoneAttribute()
    {
        return $this->created_at->setTimezone('Asia/Ho_Chi_Minh')->format('d/m/Y H:i:s');
    }

    public function getUpdatedAtInLocalTimezoneAttribute()
    {
        return $this->updated_at->setTimezone('Asia/Ho_Chi_Minh')->format('d/m/Y H:i:s');
    }

}

