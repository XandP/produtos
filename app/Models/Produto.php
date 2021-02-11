<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable= [
	'NomeTitulo',
	'EAN',
	'Foto',
	'Descr',
	'DescrLonga',
	'Estado'
	];
}
