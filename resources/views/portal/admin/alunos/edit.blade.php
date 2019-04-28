@extends('base.header')

@section('title', 'Editar Aluno')
<script src="{{asset('assets/plugins/cidades-estados.js')}}"></script>
@section('content')

<div class="container">
<form class="card" action="{{Route('aluno.edit.save',$user->id)}}" method="POST">
        @csrf
        <div class="card-body">
            <h3 class="card-title">Editar aluno</h3>
        @include('portal.admin.alunos.form')
</form>     
@stop