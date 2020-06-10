<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class giuongbenh extends Model
{
    protected $table='giuongbenh';
    protected $primaryKey='id';
    protected $fillable = ['name'];

    public function benhnhan()
    {
        return $this->belongsTo("App\benhnhan", 'id_giuong', 'id');
    }
}
