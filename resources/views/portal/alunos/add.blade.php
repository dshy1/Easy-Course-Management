@extends('base.header')

@section('title', 'Cadastrar Aluno')
<script src="{{asset('assets/plugins/cidades-estados.js')}}"></script>
@section('content')

<div class="container">
    <div class="card">
        <div class="card-body">
            <h3 class="card-title">Cadastrar novo aluno</h3>
            <div class="row">
                <div class="col-md-5">
                    <div class="form-group">
                        <label class="form-label">Nome do aluno</label>
                        <input type="text" class="form-control" placeholder="Nome do aluno" value="" checked="checked" name="nome">
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="form-group">
                        <label class="form-label">CPF</label>
                        <input type="text" class="form-control" placeholder="00.000.000/0001-00" value="" minlength="14" maxlength="14" name="cpf">
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="form-group">
                        <label class="form-label">Data de nascimento</label>
                        <input type="date" class="form-control" name="data_nasc">
                    </div>
                </div>
                <div class="w-100"></div>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-5">
                    <div class="form-group">
                        <label class="form-label">Endereco</label>
                        <input type="text" class="form-control" placeholder="Avenida Getulio vargas" value="" name="logradouro">
                    </div>
                </div>
                <div class="col-md-12 col-lg-3">
                    <div class="form-group">
                        <label class="form-label">Numero</label>
                        <input type="text" class="form-control" placeholder="1234" value="" name="numero">
                    </div>
                </div>
                <div class="form-group col-lg-3">
                    <label class="form-label">Codigo postal</label>
                    <input type="text" name="cep" class="form-control" data-mask="00000-000" data-mask-clearifnotmatch="true" placeholder="00000-000" maxlength="9" name="cep">
                </div>
                <div class="col-md-5 col-lg-4">
                    <div class="form-group">
                        <label class="form-label">Pais</label>
                        <select class="form-control custom-select" name="pais">
                            <option value="Brasil" selected="true">Brasil</option>
                            <option value="Outro">Outro</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-5 col-lg-4">
                    <div class="form-group">
                        <label class="form-label">UF</label>
                        <select class="form-control custom-select" id="uf" name="uf" value="SC"></select>
                    </div>
                </div>
                <div class="col-md-5 col-lg-4">
                    <div class="form-group">
                        <label class="form-label">Cidade</label>
                        <select class="form-control custom-select" id="municipio" name="municipio" value=""></select>
                    </select>
                </div>
            </div>
        </div>
        <script language="JavaScript" type="text/javascript" charset="utf-8">
                        new dgCidadesEstados({
                            cidade: document.getElementById('municipio'),
                            estado: document.getElementById('uf')
                        })
                    </script>
        <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="form-group">
                    <label class="form-label">Telefone</label>
                    <input type="text" class="form-control" placeholder="(00) 00000-0000" value="" name="telefone1">
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3">
                <div class="form-group">
                    <label class="form-label">Telefone</label>
                    <input type="text" class="form-control" placeholder="(00) 00000-0000" value="" name="telefone2">
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-5">
                <div class="form-group">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" placeholder="emal@site.com" value="" name="email">
                </div>
            </div>
        </div>
        <div class="card-footer text-right col-lg-12">
            <div class="d-flex">
                <a href="javascript:void(0)" class="btn btn-link">Cancelar</a>
                <button type="submit" value="submit" class="btn btn-primary ml-auto">Registrar</button>
            </div>
        </div>
    </div>       
                    </div>
@stop