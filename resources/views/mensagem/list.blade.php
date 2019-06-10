<h1>Lista de Mensagens</h1>
<hr>
<a href="/mensagens/create">Criar nova mensagem</a>
@foreach($mensagens as $a)
	<h3>{{\Carbon\Carbon::parse($a->scheduledto)->format('d/m/Y h:m')}}</h3>
	<p><a href="/mensagens/{{$a->id}}">{{$a->titulo}}</a></p>
	<p>{{$a->texto}}</p>
	<p>{{$a->autor}}</p>
	<br>
	<a href="/mensagens/{{$a->id}}/edit">Editar</a>
    <br>
    <br>
    <a href="/mensagens/{{$a->id}}/delete">Excluir</a>
	<br>
    <br>
@endforeach


<!-- \Carbon\Carbon::parse($a->scheduledto)->format('d/m/Y h:m')  -->