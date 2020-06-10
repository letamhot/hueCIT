<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nhansu extends Model
{
    protected $table='nhansu';
    protected $primaryKey='id';
    protected $fillable = ['Name','id_LoaiNS'];
    protected $dates = ['BirthDay','StartDay'];
    
    public function cosoyte()
    {
        return $this->belongsTo("App\cosoyte", 'id_csyt', 'id_csyt');
    }

    public function loaiNS()
    {
        return $this->belongsTo("App\loaiNS", 'id_LoaiNS', 'id');
    }

}