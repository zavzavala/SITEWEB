@extends('layouts.templateCarrega')

@section('content')
<br>
<div class="mt-10 mb-0 p-5">
    <div class="container">
        <div class="responsive">
            
            @csrf
<table>
<tr>
    <thead center>
        <th>Importacao</th>
        <th>Contabilidade</th>
        <th>TICS</th>
        <th>Tecnologia Nuclear</th>
        <th class="center">Accoes</th>
    </thead>
</tr>
<tbody>
        @foreach($site as $dados)

    <td>{{$dados->importacao}}</td>
    <td>{{$dados->contabilidade}}</td>
    <td>{{$dados->tics}}</td>
    <td>{{$dados->tn}}</td>
    <td><button class="btn pulse teal">Visualizar</button></td>
    <td><button class="btn pulse purple">Editar</button></td>
    <td><button class="btn pulse red">Apagar</button></td>
    @endforeach
</tbody>
</table>
</div>
</div>
</div>
@endsection