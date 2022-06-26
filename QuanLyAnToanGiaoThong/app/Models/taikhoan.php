<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class taikhoan extends Model
{
    use HasFactory;
    public $timestamps = false; //set time to false
    protected $fillable = [
        'hoten',
        'ngaysinh',
        'diachi',
        'sodienthoai',
        'idchucvu',
        'iddonvi',
        'matkhau',
        'madangnhap',
    ];
    protected $primaryKey = 'maTaiKhoan';
    protected $table = 'taikhoan';

    public function donvi(){
        return $this->belongsTo('App\Models\donvi','iddonvi','id');
    }
    public function chucvu(){
        return $this->belongsTo('App\Models\chucvu','idchucvu','id');
    }
}
