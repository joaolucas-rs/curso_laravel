@extends('template')
@section('content')
<style>
    h5{display: block; color: #0000C2; font-weight: bold; margin: 0; padding: 0;}
</style>
<div class="row">
    <h52>Lista de Notas</h2>
</div>
<div class="row">
    <ul>
        @foreach($lista as $linha)
        <li>{{ $linha }}</li>
        @endforeach
    </ul>
    
</div>
@stop
