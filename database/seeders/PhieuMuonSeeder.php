<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PhieuMuon;

class PhieuMuonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PhieuMuon::create([
            'userName' => 'user1',
            'userId' => 85,
            'email' => 'user@gmail.com',
            'tenSach' => 'sách 1',
            'maSach' => 13,
            'phone' => '0966585720',
            'ngayMuon' => '2024-07-11',
            'hanTra' => '2024-07-15',
        ]);
    }
}
