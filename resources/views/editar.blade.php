@extends('adminlte::page')

@section('title', 'Home')

@section('content_header')
<h1>Novo Contacto</h1>
@stop

@section('content')
<div class="card card-primary">
    <form role="form" method="post">
        <div class="card-body">
            {{csrf_field()}}
            <div class="form-group">
                <label for="exampleInputNome">Id</label>
                <input type="text" class="form-control" name="id_form" value="{{$id}}" readonly>
            </div>
            <div class="form-group">
                <label for="exampleInputNome">Nome</label>
                <input type="text" class="form-control" name="nome_form" value="{{$con_nome}}" >
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Email</label>
                <input type="text" class="form-control" name="email_form" value="{{$con_numero}}" >
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Numero</label>
                <input type="text" class="form-control" name="numero_form" value="{{$con_email}}">
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </form>
</div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
console.log('Hi!');
</script>
@stop
