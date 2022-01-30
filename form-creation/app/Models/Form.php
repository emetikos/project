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
        'version',
        'form_version',
        'deleted_data'
    ];

    public function formHelper(){
        return $this->hasMany(Helper::class);
    }
}
