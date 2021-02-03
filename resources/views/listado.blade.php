@extends('Layout.master')
@section('content')
<h1 class="text-center"> LIBROS</h1>
    <br>
    <div class="container">
        <table class="table ">
            <thead class="table-warning">
                <tr>
                <th scope="col">ID</th>
                <th scope="col">ISBN</th>
                <th scope="col">titulo</th>
                <th scope="col">stock  </th>
                <th scope="col"> editorial_fk </th>
                <th scope="col">precio</th>
               
                

                </tr>
            </thead>
            <tbody class="table-Light ">
                @foreach($libros as $ed)
                <tr>
                <th scope="row">{{$ed->id}}</th>
                <td> {{$ed->ISBN}}</td>
                <td> {{$ed->titulo}}</td>
                <td> {{$ed->stock}}</td>
                <td> {{$ed->editorial_fk}}</td> 
                <td> {{$ed->precio}}</td>
                 
              

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@stop