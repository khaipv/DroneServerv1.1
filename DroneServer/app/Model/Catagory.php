<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Catagory extends Model
{
    protected $table ="danh_muc";
    public $timestamps = false;
    protected $fillable = ['ten_danh_muc'];
}
