<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ChiTietLuotChoi extends Model
{
    protected $table="chi_tiet_luot_choi";
    public function cauHoi()
    {
        return $this->belongsTo('App\CauHoiModel');
    }
}
