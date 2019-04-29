<div class="row">
    <div class="form-group col-sm-5 col-md-5">
        <label class="form-label">Curso</label>
        <select class="form-control custom-select" id="curso_id" name="curso_id" value="">
            <option value="{{ isset($curso_nome->id) ? $curso_nome->id : '' }}">{{ isset($curso_nome->nome) ? $curso_nome->nome : 'Selecione um curso' }}
            @foreach($cursos as $curso)
            <option value="{{$curso->id}}">{{$curso->nome}}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group col-sm-5 col-md-5">
        <label class="form-label">Curso</label>
        <select class="form-control custom-select" id="professor_id" name="professor_id" value="">
            <option value="{{ isset($professor_nome->id) ? $professor_nome->id : '' }}">{{ isset($professor_nome->name) ? $professor_nome->name : 'Selecione um professor' }}</option>
            @foreach($professores as $professor)
            <option value="{{$professor->id}}">{{$professor->name}}</option>
            @endforeach
        </select>
    </div>
</div>

