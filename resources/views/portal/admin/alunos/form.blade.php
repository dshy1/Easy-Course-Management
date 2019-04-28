
            <div class="row">
                <div class="col-md-5">
                    <div class="form-group">
                        <label class="form-label">Nome do aluno</label>
                        <input type="text" class="form-control" placeholder="Nome do aluno" value="{{ isset($user->name) ? $user->name : '' }}" checked="checked" name="name">
                    </div>
                </div>
                
                <div class="col-sm-6 col-md-3">
                    <div class="form-group">
                        <label class="form-label">CPF</label>
                        <input type="text" class="form-control" placeholder="00.000.000/0001-00" value="{{ isset($user->cpf) ? $user->cpf : '' }}" minlength="14" maxlength="14" name="cpf">
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="form-group">
                        <label class="form-label">Data de nascimento</label>
                        <input type="date" class="form-control" name="data_nasc" value="{{ isset($user->data_nasc) ? $user->data_nasc : '' }}">
                    </div>
                </div>
                <div class="w-100"></div>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-5">
                    <div class="form-group">
                        <label class="form-label">Endereco</label>
                        <input type="text" class="form-control" placeholder="Avenida Getulio vargas" value="{{ isset($user->logradouro) ? $user->logradouro : '' }}" name="logradouro">
                    </div>
                </div>
                <div class="col-md-12 col-lg-3">
                    <div class="form-group">
                        <label class="form-label">Numero</label>
                        <input type="text" class="form-control" placeholder="1234" value="{{ isset($user->bairro) ? $user->bairro : '' }}" name="numero">
                    </div>
                </div>
                <div class="form-group col-lg-3">
                    <label class="form-label">Bairro</label>
                    <input type="text" name="bairro" class="form-control" placeholder="Pinheiros" value="{{ isset($user->bairro) ? $user->bairro : '' }}">
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
                        <select class="form-control custom-select" id="uf" name="uf" value="{{ isset($user->uf) ? $user->uf : '' }}"></select>
                    </div>
                </div>
                <div class="col-md-5 col-lg-4">
                    <div class="form-group">
                        <label class="form-label">Cidade</label>
                        <select class="form-control custom-select" id="municipio" name="municipio" value="{{ isset($user->municipio) ? $user->municipio : '' }}"></select>
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
                    <input type="text" class="form-control" placeholder="{{ isset($user->telefone1) ? $user->telefone1 : '' }}" value="" name="telefone1">
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3">
                <div class="form-group">
                    <label class="form-label">Telefone</label>
                    <input type="text" class="form-control" placeholder="{{ isset($user->telefone2) ? $user->telefone2 : '' }}" value="" name="telefone2">
                </div>
            </div>


            @if(isset($edit))
            <div class="col-sm-6 col-md-6 col-lg-5">
                <div class="form-group">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" placeholder="emal@site.com" value="{{ isset($user->email) ? $user->email : '' }}" readonly>
                </div>
            </div>
            
            @else          

            <div class="col-sm-6 col-md-6 col-lg-5">
                <div class="form-group">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" placeholder="emal@site.com" value="{{ isset($user->email) ? $user->email : '' }}" name="email">
                </div>
            </div>
            

            <div class="col-sm-6 col-md-6 col-lg-5">
                <div class="form-group">
                    <label class="form-label">Senha</label>
                    <input type="password" class="form-control" placeholder="senha" id="senha" value="" name="senha">
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-5">
                <div class="form-group">
                    <label class="form-label">Repita sua Senha</label>
                    <input type="password" class="form-control" placeholder="senha" id="senha2" value="" name="senha2">
                </div>
            </div>
            @endif

        </div>
        <div class="card-footer text-right col-lg-12">
            <div class="d-flex">
                <a href="javascript:void(0)" class="btn btn-link">Cancelar</a>
                <button type="submit" value="submit" class="btn btn-primary ml-auto">Registrar</button>
            </div>
        </div>