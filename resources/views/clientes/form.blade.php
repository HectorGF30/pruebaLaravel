
<div class="form-group">

<label for="Nombre" class="control-label"> {{'Nombre: '}} </abel>
 <input type="text" class="form-control {{$errors->has('Nombre')?'is-invalid':''}}" name="Nombre" id="Nombre"
 
 value="{{ isset($cliente->Nombre) ? $cliente->Nombre:old('Nombre')}}">
{!! $errors->first('Nombre','<div class="invalid-feedback">:message</div>') !!}


<div/>

<div class="form-group">
 <label for="Apellido" class="control-label"> {{'Apellido: '}} </label>
 <input type="text"  class="form-control {{$errors->has('Apellido')?'is-invalid':''}}" name="Apellido" id="Apellido"

value="{{ isset($cliente->Apellido) ? $cliente->Apellido:old('Apellido')}}">
{!! $errors->first('Apellido','<div class="invalid-feedback">:message</div>') !!}


<div/>
 
<div class="form-group">

 <label for="Correo" class="control-label"> {{'Correo: '}} </label>
 <input type="email"  class="form-control {{$errors->has('Correo')?'is-invalid':old('Correo')}}" name="Correo" id="Correo"

 value="{{ isset($cliente->Correo) ? $cliente->Correo:''}}">
 {!! $errors->first('Correo','<div class="invalid-feedback">:message</div>') !!}

 <div/>
 
<div class="form-group">

 <label for="Foto" class="control-label"> {{'Foto: '}} </label>
 @if(isset($cliente ->Foto))
 <br/>
 <img src="{{ asset('storage').'/'.$cliente->Foto}}" alt="" width="200">
 <br/>
 <br/>
 @endif
 <input class="form-control  {{$errors->has('Foto')?'is-invalid':''}}" type="file"  class="form-control is-invalid" name="Foto" id="Foto" value="">
{!! $errors->first('Foto','<div class="invalid-feedback">:message</div>')}

 <br/>

 <div/>

 <input type="submit" class="btn btn-success"  value="{{ $Orden=='crear' ? 'Agregar' : 'Modificar'}}">
 <a  class="btn btn-primary" href="{{ url('clientes')}}">Regresar</a>
 