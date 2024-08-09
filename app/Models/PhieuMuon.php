<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhieuMuon extends Model
{
    use HasFactory;

    protected $table = 'phieu_muons';
    protected $fillable = [
        'userId',
        'userName',
        'phone',
        'maSach',
        'tenSach',
        'trangthai',
        'soluong',
        'ngayMuon',
        'hanTra',
    ];

    // Thiết lập quan hệ với model Product
    public function product()
    {
        return $this->belongsTo(Product::class, 'maSach');
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
