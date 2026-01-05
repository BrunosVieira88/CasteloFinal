<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Novocrud23 extends Model
{
    protected $guarded = [
        'id'
    ];

    protected $fillable = [
        'title', 'description'
    ];
}