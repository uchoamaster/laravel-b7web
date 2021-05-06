@extends('layouts.admin')


@section('title', 'Listagem de Tarefas')

@section('content')
<h1>Listagem</h1>
<button type="button" id="botao-cadastro" class="btn btn-primary"><a href="">Adicionar nova tarefa</a></button>

@if(count($list) > 0 )
    <ul class="list-group">
    @foreach($list as $item)

    <li class="list-group-item">
        <a href="">@if($item->resolvido===1) desmarcar @else  marcar @endif</a>
        {{-- <button type="button" id="botao-cadastro" class="btn btn-secondary btn-sm"><a href="">@if($item->resolvido===1) desmarcar @else  marcar @endif</a></button> --}}
        {{-- <input class="form-check-input me-1" type="checkbox" value="" aria-label="..."><a href="">@if($item->resolvido===1) desmarcar @else  marcar @endif</a> --}}
        {{$item->titulo}}
        <a href="">[Editar]</a>
        <a href="">[Excluir]</a>
    </li>
    @endforeach
    </ul>
@else
     Não há itens a serem listados.
@endif


@endsection


