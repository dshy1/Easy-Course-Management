@extends('base.header')

@section('title', 'Editar Turma')

@section('content')

<div class="container">
    <div class="row">
        <form class="card" action="{{Route('turma.save')}}" method="POST">
            <div class="card-header">
                <h3 class="card-title">Adicionar Curso</h3>
            </div>
            <div class="card-body" >
            @csrf

                @include('portal.admin.turmas.form')

            </div>
            <div class="card-footer text-right">
                <button type="submit" class="btn btn-primary">Editar</button>
            </div>
        </form>
    </div>
</div>

@stop
