<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Form extends Model
{
    use HasFactory;
    use SoftDeletes;


    protected $fillable = [
        'form_id',
        'user_id',
        'form_data',
        'deleted_data'
    ];

    public static function getAllData()
    {
        return Form::all();
    }
}
