@extends('layouts.base2')

@section('title', 'Home')

@section('maisinfo', 'Mais informações')

@section('content')
    <div class="jumbotron">
        Olá
    </div>
@endsection

@section('sidebar')
    <!-- @parent -->
    <p>Mais uma info</p>
@endsection

@component('alert')
    <strong>OPA</strong> Deu ruim!
@endcomponent
