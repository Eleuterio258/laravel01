@extends('adminlte::page')

@section('title', 'Home')

@section('content_header')
    <h1> <a href="novo">Cadastrar Novo Contacto</a></h1>
@stop

@section('content')

<div class="col-12">
    <div class="card">
        <div class="card-body table-responsive p-0">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nomer</th>
                        <th>Email</th>
                        <th>Numero</th>
                        <th>Opções</th>
                    </tr>
                    @foreach($listacontactos as $con)
                </thead>
                <tbody>
                    <tr>
                        <td>{{$con->id}}</td>
                        <td>{{$con->con_nome}}</td>
                        <td>{{$con->con_numero}}</td>
                        <td>{{$con->con_email}}</span></td>
                        <td>
                            <a class="btn btn-primary" href="editar/{{$con->id}}">Editar</a>
                            <a class="btn btn-danger" href="excluir/{{$con->id}}">Apagar</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
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
