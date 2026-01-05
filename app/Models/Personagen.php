<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personagen extends Model
{
    use HasFactory;

    protected $fillable = ['nome','sobrenome','ramo', 'idade', 'times', 'descricao','imagem'];
    public $timestamps = false;
}
