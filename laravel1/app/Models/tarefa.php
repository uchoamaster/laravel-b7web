<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tarefa extends Model
{
    use HasFactory;

    // protected $table = 'tarefas';
    // protected $primaryKey = 'id';
    // public $incrementing = false;
    // protected $keyType = 'string';

    public $timestamps = false;

    //pra aceitar campos com modificação em massa, so no caso do update com 1 linha de código que precisa desse chamado
    protected $fillable = ['titulo'];
    // const CREATED_AT = 'date_created';
    // const UPDATED_AT = 'date_updated';

}
