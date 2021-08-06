@extends('layouts.templateCarrega')

@section('content')
<p class="center">@if(isset($site)) Editar @else Adicionar @endif </p>
<br><br>
@if(isset($errors) && count($errors)>0)

<div class="center mb-2 mt-4 p-2 alert white-text red">
@foreach($errors->all() as $erro)
{{$erro}}<br>
@endforeach
</div>
@endif
<div class="row">
      @if(isset($site))
    <form class="col s12" name="frmEdita" id="frmEdita" method="POST" action="{{url('start/$site->id')}}">
    @method('PUT')
    @else
    <form class="col s12" name="frmCad" id="frmCad" method="POST" action="{{url('start')}}">
    
    @endif
    @csrf
        <div class="input-field col s6">
          <i class="material-icons prefix">mode_edit</i>
          <textarea id="import" name="importacao" value="{{$site->importacao ?? ''}}" class="materialize-textarea"></textarea>
          <label for="icon_prefix1">Importacao</label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">mode_edit</i>
          <textarea id="cont" name="contabilidade" value="{{$site->contabilidade ?? ''}}" class="materialize-textarea"></textarea>
          <label for="cont">Contabilidade</label>
        </div>
      </div>

        <div class="input-field col s6">
          <i class="material-icons prefix">mode_edit</i>
          <textarea id="tics" name="tics" value="{{$site->tics ?? ''}}" class="materialize-textarea"></textarea>
          <label for="tics">Tics</label>
        </div>

        <div class="input-field col s6">
          <i class="material-icons prefix">mode_edit</i>
          <textarea id="tn" name="TecnologiaNuclear" value="{{$site->tn ?? ''}}" class="materialize-textarea"></textarea>
          <label for="tn">Tecnologia Nuclear</label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">mode_edit</i>
          <textarea id="user" name="id_user" value="{{$site->tn ?? ''}}" class="materialize-textarea"></textarea>
          <label for="user">User</label>
        </div>
<br>
<div class="center">
<button class="btn waves-effect waves-light" type="submit" name="action">
    @if(isset($site))Editar <i class="material-icons right">update</i>@else
    Salvar
    <i class="material-icons right">send</i>
    @endif
  </button>
  </div>
 
  <div class="fixed-action-btn horizontal click-to-toggle">
    <a class="btn-floating btn-large red">
      <i class="material-icons">menu</i>
    </a>
    <ul>
      <li><a class="btn-floating red"><i class="material-icons">insert_chart</i></a></li>
      <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>
      <li><a class="btn-floating green"><i class="material-icons">publish</i></a></li>
      <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a></li>
    </ul>
  </div>
  
    </form>
  </div>
  
@endsection