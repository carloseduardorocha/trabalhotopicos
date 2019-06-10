<h1>Lista de Atividades</h1>
<br>
<a href="/atividades/create">Criar nova atividade</a>
<br>
<hr>
@foreach($atividades as $a)
	<h3>{{\Carbon\Carbon::parse($a->scheduledto)->format('d/m/Y h:m')}}</h3>
	<p><a href="/atividades/{{$a->id}}">{{$a->title}}</a></p>
	<p>{{$a->description}}</p>
	<br>
	<a href="/atividades/{{$a->id}}/edit">Editar</a>
    <br>
    <br>
    <a href="/atividades/{{$a->id}}/delete">Excluir</a>
	<br>
    <br>
@endforeach


<!-- \Carbon\Carbon::parse($a->scheduledto)->format('d/m/Y h:m')  -->