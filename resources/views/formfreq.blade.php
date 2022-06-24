
<!-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif -->

@extends('includes.header')
   <form action="{{ url('insertfreqaluno') }}" method="post">
          @csrf
        <div class="form-group">
          <div class="col-md-4 mb-3">
        <label for="nota">Insira a frequência do aluno em porcentagem:</label>
            <input type="number" class="form-control" id="nota" name="frequencia" max="100" min="0">
            <input type="hidden" value="{{$all[0]['aluno']}}" name="aluno">
            <input type="hidden" value="{{$all[0]['disciplina']}}" name="disciplina">

          </div>
        </div>

        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
