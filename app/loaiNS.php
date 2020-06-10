<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class loaiNS extends Model
{
    protected $table='loainhansu';
    protected $primaryKey='id';
    protected $fillable = ['Name'];

    public function nhansus()
    {
        return $this->hasMany(nhansu::class);
    }
}
