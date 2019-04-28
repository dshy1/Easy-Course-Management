@extends('base.header')

@section('title', 'Editar Curso')

@section('content')

<div class="container">
    <div class="row">
        <form class="card" action="{{Route('curso.edit.save',$dados->id)}}" method="POST">
            <div class="card-header">
                <h3 class="card-title">Editar Curso</h3>
            </div>
            <div class="card-body" >
            @csrf

                @include('portal.admin.cursos.form')
                
            </div>
            <div class="card-footer text-right">
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </div>
        </form>
    </div>
</div>

@stop
