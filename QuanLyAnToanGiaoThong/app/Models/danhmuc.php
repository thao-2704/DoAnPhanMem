<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class danhmuc extends Model
{
    use HasFactory;
    public $timestamps = false; //set time to false
    protected $fillable = [
        'ten_dm ',
        'noidung',
        'idnghidinh',
    ];
    protected $primaryKey = 'id';
    protected $table = 'danhmuc';

    public function nghidinh(){
        return $this->belongsTo('App\Models\nghidinh','idnghidinh','id');
    }
}
