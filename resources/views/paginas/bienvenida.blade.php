@extends('layouts.app')

@section('content')
  <h1> Bienvenida </h1>
  <p>
    Hola {{$nombre}} {{$apellido}}
    <br>
    Hola {{$nombre_completo}}
  </p>
@endsection
