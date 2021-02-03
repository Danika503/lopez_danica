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
                <th scope="col"> editorial </th>
                <th scope="col">precio</th>
               
                

                </tr>
            </thead>
            <tbody class="table-Light ">
                @foreach($libros as $li)
                <tr>
                <th scope="row">{{$li->id}}</th>
                <td> {{$li->ISBN}}</td>
                <td> {{$li->titulo}}</td>
                <td> {{$li->stock}}</td>
                <td> {{$li->editorial_fk}}</td> 
                <td> {{$li->precio}}</td>
                 
              

                </tr>
                @endforeach
                
            </tbody>
        </table>
    </div>
@stop