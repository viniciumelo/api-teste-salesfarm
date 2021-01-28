<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'nome', 'telefone_celular', 'cpf_rg', 'estado_civil', 'estado_naturalidade', 'cidade_naturalidade', 'data_nascimento', 'observacao', 'sexo', 'tipo', 'cep', 'estado', 'cidade', 'bairro', 'logradouro', 'numero', 'matricula', 'ativo', 'created_at', 'updated_at'
    ];
}
