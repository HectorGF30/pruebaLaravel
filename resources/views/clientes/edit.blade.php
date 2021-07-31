@extends('layouts.app')
@section('content')

<div class="container">

<form action="{{ url('/clientes/'.$cliente->id)}}" method="post"  method="get" action="" enctype="multipart/form-data">
{{ csrf_field()}}
{{ method_field('PATCH')}}
@include('clientes.form',['Orden'=>'editar'])

</form>
</div>

@endsection