<h1>Lista de Mensagens</h1>
<hr>
@foreach($mensagens as $a)
	<h3>{{\Carbon\Carbon::parse($a->scheduledto)->format('d/m/Y h:m')}}</h3>
	<p><a href="/mensagens/{{$a->id}}">{{$a->titulo}}</a></p>
	<p>{{$a->texto}}</p>
	<p>{{$a->autor}}</p>
	<br>
@endforeach


<!-- \Carbon\Carbon::parse($a->scheduledto)->format('d/m/Y h:m')  -->