<?php

namespace eduardobcolombo\CodeTag\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = "eduardobcolombo_tag";


    protected $fillable = [
        'id',
        'name',
        'timestamp'
    ];
}