@extends ('layouts.app')
@section ('content')

<div class="container">

@if(Session::has('Mensaje'))
<div class="alert alert-success" role="alert">
    {{Session::get('Mensaje')}}
</div>

@endif

<a href="{{ url('clientes/create')}}" class="btn btn-success">Registrar Usuario</a>
<br/>
<br/>

<table class="table table-light table-hover">
    <thead class="thead-light">
        <tr>
            <th></th>
            <th>Foto</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Correo</th>
            <th></th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
    @foreach($datosClientes as $cliente)
        <tr>

            <td>{{$loop->iteration}}</td>
            <td>
            <img src="{{ asset('storage').'/'.$cliente->Foto}}" alt="" width="100" class="img-thumbnail img-fluid" >
            </td>
            <td>{{$cliente->Nombre}}</td>
            <td>{{$cliente->Apellido}}</td>
            <td>{{$cliente->Correo}}</td>
            <td>{{$cliente->Acciones}}</td>
            <td>
            
            
            <a  class="btn btn-warning" href="{{ url('/clientes/'.$cliente->id.'/edit')}}">Editar</a> |
            
            <form method="post" action="{{ url('/clientes/'.$cliente->id)}}" style="display:inline"> 
            {{csrf_field()}}
            {{ method_field('DELETE')}}
            <button class="btn btn-danger" type="submit" onclick="return confirm('¿Borrar?');" >Borrar</button>
            
            </form>
            
            

        </tr>
        @endforeach
    </tbody>
</table>

{{ $datosClientes->links() }}

 </div>
 @endsection