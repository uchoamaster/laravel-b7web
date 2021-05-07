@extends('layouts.admin')


@section('title', 'Listagem de Tarefas')

@section('content')
<h1>Listagem</h1>
<button type="button" id="botao-cadastro" class="btn btn-secondary"><a href="{{ route('tarefas.add')}}">Adicionar nova tarefa</a></button>

@if(count($list) > 0 )
    <ul class="list-group">
    @foreach($list as $item)

    <li class="list-group-item">
        <a href="{{ route('tarefas.done',['id'=>$item->id])}}">@if($item->resolvido===1) desmarcar @else  marcar @endif</a>
        {{-- <button type="button" id="botao-cadastro" class="btn btn-secondary btn-sm"><a href="">@if($item->resolvido===1) desmarcar @else  marcar @endif</a></button> --}}
        {{-- <input class="form-check-input me-1" type="checkbox" value="" aria-label="..."><a href="">@if($item->resolvido===1) desmarcar @else  marcar @endif</a> --}}
        {{$item->titulo}}
        <a href="{{ route('tarefas.edit',['id'=>$item->id])}}">[Editar]</a>
        <a href="{{ route('tarefas.del',['id'=>$item->id])}}" onclick="return confirm('Tem certeza que deseja Excluir?')">[Excluir]</a>
    </li>
    @endforeach
    </ul>
@else
     Não há itens a serem listados.
@endif


@endsection


