<?php

namespace sistemaLaravel;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categoria';
    protected $primarykey = 'idcategoria';

    public $timestamps = false;
    protected $fillable = [
      'name',
      'descricao',
      'condicao'
    ];

}
