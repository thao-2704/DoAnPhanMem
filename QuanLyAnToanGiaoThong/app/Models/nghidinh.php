<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nghidinh extends Model
{
    use HasFactory;
    use HasFactory;
    public $timestamps = false; //set time to false
    protected $fillable = [
        'so ',
        'ten_nghidinh',
        'ngay_banhanh',
        'coquanbanhanh',
    ];
    protected $primaryKey = 'id';
    protected $table = 'nghidinh';
}
