<?php

namespace sistemaLaravel;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
  protected $table = 'pessoa';
  protected $primaryKey = 'idpessoa';

  public $timestamps = false;
  protected $fillable = [
    'nome',
    'tipo_pessoa',
    'tipo_documento',
    'num_doc',
    'endereco',
    'telefone',
    'email'
  ];
}
