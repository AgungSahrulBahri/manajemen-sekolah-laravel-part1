<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    protected $fillable = ['nama', 'nis', 'ttl','no_tlp','asal','jurusan','status'];
}
