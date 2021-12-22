<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class products extends Model
{
    protected $table = 'products';
    
    protected $fillable = [
     
        'image',
        'name',
        'price',
        'detail',
        'id_type',
        'id_user',
    ];
    public $timestamps = false;

    protected static function boot()

    {

        parent::boot();

        static::creating(function ($model) {

            $model->id_user = Auth::id();

        });

        static::updating(function ($model) {

            $model->id_user = Auth::id();

        });

    }
}
