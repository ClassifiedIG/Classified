<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AccessCode extends Model
{
    protected $table = 'access_codes';
    protected $primaryKey = 'id';

    protected $fillable = [
        'access_codes',
    ];
}