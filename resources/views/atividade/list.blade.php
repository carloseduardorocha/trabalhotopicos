@extends('layouts.app')
@section('content')
<h1>Lista de Atividades</h1>
<br>
@auth 
<a href="/atividades/create">Criar nova atividade</a>
@endauth
<br>
<hr>
@foreach($atividades as $a)
	<h3>{{\Carbon\Carbon::parse($a->scheduledto)->format('d/m/Y h:m')}}</h3>
	<p><a href="/atividades/{{$a->id}}">{{$a->title}}</a></p>
	<p>{{$a->description}}</p>
	<br>
	@auth
	<a href="/atividades/{{$a->id}}/edit">Editar</a>
    <br>
    <br>
    <a href="/atividades/{{$a->id}}/delete">Excluir</a>
	<br>
    <br>
	@endauth
@endforeach
{{ $atividades->links() }}
@endsection

<!-- \Carbon\Carbon::parse($a->scheduledto)->format('d/m/Y h:m')  -->