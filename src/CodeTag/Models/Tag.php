<?php

namespace eduardobcolombo\CodeTag\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = "eduardobcolombo_tags";


    protected $fillable = [
        'id',
        'name',
        'timestamp'

    ];
}