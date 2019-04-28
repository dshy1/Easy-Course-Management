<div class="row">
    <div class="form-group col-sm-8 col-md-8">
        <label class="form-label">Nome do curso&nbsp;
            <span class="form-required">*</span>
        </label>
        <input name="nome" type="text" class="form-control" value="{{ isset($dados->nome) ? $dados->nome : '' }}" placeholder="Programação em PHP com o Laravel" required>
    </div>
    <div class="form-group col-sm-8 col-md-4">
        <label class="form-label">Duração
            <span class="form-required">*</span>
        </label>
        <input name="duracao" type="number" pattern="[0-9]+([\.,][0-9]+)?" step="0.10" class="form-control" value="{{ isset($dados->duracao) ? $dados->duracao : '' }}" placeholder="8 horas" required>
    </div>
</div>