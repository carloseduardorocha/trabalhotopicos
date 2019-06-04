<h1>Mensagens {{$mensagem->id}}</h1>
<hr>
<h3><b>ID:</b> {{$mensagem->id}}</h3>
<h3><b>Título:</b> {{$mensagem->titulo}}</h3>
<h3><b>Texto:</b> {{$mensagem->texto}}</h3>
<h3><b>Autor:</b> {{$mensagem->autor}}</h3>
<h3><b>Criada em:</b> {{\Carbon\Carbon::parse($mensagem->scheduledto)->format('d/m/Y h:m')}}</h3>
<h3><b>Atualizada em:</b> {{\Carbon\Carbon::parse($mensagem->scheduledto)->format('d/m/Y h:m')}}</h3>
