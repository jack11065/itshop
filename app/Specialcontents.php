<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class specialcontents extends Model
{
    protected $table = 'specialcontents';
    //protected $primaryKey = 'id_specialcontents';
    protected $fillable = [
        'text',
        'image',
        'id_users'
    ];
}
