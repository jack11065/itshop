<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Backgronud extends Model
{
    protected $table = 'backgronud';
    //protected $primaryKey = 'id_backgronud';
    protected $fillable = [
        'name',
        'id_users'
    ];
}
