<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PhieuMuon extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'cards';
    protected $fillable = [
        'userId',
        'userName',
        'phone',
        'bookId',
        'bookName',
        'status',
        'quantity_in_card',
        'borrowed_at',
        'returned_at',
    ];

    // Thiết lập quan hệ với model Product
    public function product()
    {
        return $this->belongsTo(Product::class, 'bookId');
    }

    // Thiết lập quan hệ với model User
    public function user()
    {
        return $this->belongsTo(User::class, 'userId');
    }
    public function phieuMuonDetails()
    {
        return $this->hasMany(PhieuMuon::class, 'id');
    }
}
