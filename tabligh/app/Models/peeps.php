<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class peeps extends Model
{
    use HasFactory;

    protected $fillable = [
        'yourName',
        'nickname',
        'idCard',
    ];
}
