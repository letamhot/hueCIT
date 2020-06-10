<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table='users';
    protected $primaryKey='id';
    protected $fillable = ['name','email','password'];
    protected $dates = ['created_at','updated_at'];

    

}