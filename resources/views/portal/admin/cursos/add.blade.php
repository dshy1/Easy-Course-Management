@extends('base.header')

@section('title', 'Adicionar Curso')

@section('content')

<div class="container">
    <div class="row">
        <form class="card" action="{{Route('curso.salvar')}}" method="POST">
            <div class="card-header">
                <h3 class="card-title">Adicionar Curso</h3>
            </div>
            <div class="card-body" >
            @csrf
                <div class="row">
                    <div class="form-group col-sm-8 col-md-8">
                        <label class="form-label">Nome do curso&nbsp;
                            <span class="form-required">*</span>
                        </label>
                        <input name="nome" type="text" class="form-control" value="" placeholder="Programação em PHP com o Laravel" required>
                    </div>
                    <div class="form-group col-sm-8 col-md-4">
                        <label class="form-label">Duração
                            <span class="form-required">*</span>
                        </label>
                        <input name="duracao" type="number" pattern="[0-9]+([\.,][0-9]+)?" step="0.10" class="form-control" value="" placeholder="8 horas" required>
                    </div>
                </div>
            </div>
            <div class="card-footer text-right">
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </div>
        </form>
    </div>
</div>

@stop
