<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TestDetail extends Model
{
    protected $table ="ten_bai_kiem_tra";
    public $timestamps = false;
    protected $fillable = ['cau_hoi','dap_an_1','dap_an_2','dap_an_3','dap_an_4','key','bai_kiem_tra_id'];
}
