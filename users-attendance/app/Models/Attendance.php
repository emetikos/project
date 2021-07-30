<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Attendance extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'hap_hash',
        'user_hash',
        'attended' ,
        'hapData' ,
        'hapName' ,
        'userName' ,
        'userSurname' ,
        'hapStarted',
        'deleted_at'
    ];
}
