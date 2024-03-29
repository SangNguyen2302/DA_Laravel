<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NguoiChoi extends Model
{
    protected $table = 'nguoi_choi';
    use SoftDeletes;
    public function dsGoiCredit()
    {
    	return $this->belongsToMany('App\GoiCreditModel','lich_su_mua_credit','nguoi_choi_id','goi_credit_id','id','id')->withPivot('id','credit','so_tien');
    }
