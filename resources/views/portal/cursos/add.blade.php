@extends('base.header')

@section('title', 'Adicionar Curso')

@section('content')

<div class="container">
    <div class="row">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Adicionar Curso</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="form-group col-sm-8 col-md-8">
                        <label class="form-label">Nome do curso&nbsp;
                            <span class="form-required">*</span>
                        </label>
                        <input name="url" type="text" class="form-control" value="" placeholder="Programação em PHP com o Laravel">
                    </div>
                    <div class="form-group col-sm-8 col-md-4">
                        <label class="form-label">Duração
                            <span class="form-required">*</span>
                        </label>
                        <input name="url" type="text" class="form-control" value="" placeholder="8 horas">
                    </div>
                </div>
            </div>
            <div class="card-footer text-right">
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </div>
        </div>
    </div>
</div>

@stop
