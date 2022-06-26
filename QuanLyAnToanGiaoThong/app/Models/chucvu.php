<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chucvu extends Model
{
    use HasFactory;
    public $timestamps = false; //set time to false
    protected $fillable = [
        'ten ',
        'mota',
    ];
    protected $primaryKey = 'id';
    protected $table = 'chucvu';

}
