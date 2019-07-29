@extends('layouts.app')

@section('content')
<h1>Lista de Atividades e Mensagens</h1>
<br>

<hr>
@foreach($atividades as $a)

    <h1><b>Título:</b> {{$a->title}}</h1>
        <h3><b>ID:</b> {{$a->id}}</h3>
        <h3><b>Descrição:</b> {{$a->description}}</h3>
        <h3><b>Criada em:</b> {{\Carbon\Carbon::parse($a->created_at)->format('d/m/Y h:m')}}</h3>
        <h3><b>Atualizada em:</b> {{\Carbon\Carbon::parse($a->updated_at)->format('d/m/Y h:m')}}</h3>
    
    @if($a->mensagens->count() > 0)
    <br>
    <h2><b>Mensagens Relacionadas:</b></h2>
    <table id="tabela" name="tabela" class="table table-striped">
        <thead>
            <tr>
                <td>Data</td>
                <td>Título</td>
                <td>Texto</td>
            </tr>
        </thead>
        <tbody>
            @foreach($a->mensagens as $msg)
                <tr>
                    <td>{{$msg->created_at}}</td>
                    <td><a href="/mensagens/{{$msg->id}}">{{$msg->titulo}}</a></td>
                    <td>{{$msg->texto}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @endif
    <hr>
    <br><br>


@endforeach

@endsection