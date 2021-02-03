@extends('Layout.master')
@section('content')
<h1 class="text-center"> EDITORIAL</h1>
    <br>
    <div class="container">
        <table class="table ">
            <thead class="table-warning">
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Dirección</th>
                <th scope="col">Ciudad</th>
                <th scope="col">Telefono  </th>
                </tr>
            </thead>
            <tbody class="table-Light ">
                @foreach($editoriales as $ed)
                <tr>
                <th scope="row">{{$ed->id}}</th>
                <td> {{$ed->nombre}}</td>
                <td> {{$ed->direccion}}</td>
                <td> {{$ed->ciudad}}</td>
                <td> {{$ed->telefono}}</td>        
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@stop