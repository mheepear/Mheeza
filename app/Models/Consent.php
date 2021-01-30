<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;


class Consent extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'consents';

    protected $fillable = [
        'name',
        'detail',
        'nameeng',
        'detaileng', 
        'status',
        'version',
        'start',
        'end',
    ];
}
