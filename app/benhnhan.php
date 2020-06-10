<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class benhnhan extends Model
{
    protected $table='benhnhan';
    protected $primaryKey='id';
    protected $fillable = ['hoten','diachi','SDT','tenbenh','id_giuong', 'id_csyt'];
    protected $dates = ['BirthDay','StartDay'];

    public function cosoyte()
    {
        return $this->belongsTo("App\cosoyte", 'id_csyt', 'id_csyt');
    }
    
    public function giuongbenh()
    {
        return $this->belongsTo("App\giuongbenh", 'id_giuong', 'id');
    }
}
