<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cosoyte extends Model
{
    protected $table='cosoyte';
    protected $primaryKey='id_csyt';
    protected $fillable = ['name','diachi','sdt','loaiCS','NgayTL'];

    public function benhnhans()
    {
        return $this->hasMany(benhnhan::class);
    }

    public function nhansus()
    {
        return $this->hasMany(nhansu::class);
    }
}
