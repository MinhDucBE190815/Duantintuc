<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TinTucModel extends Model
{
    use HasFactory;
    protected $table = 'tin';
    protected $fillable = ['Tieude', 'Noidung', 'Tomtat', 'Ngaydang', 'Loaiid', 'Luotxem']; 
    public $timestamps = false; // Tắt tự động cập nhật `updated_at`
}
