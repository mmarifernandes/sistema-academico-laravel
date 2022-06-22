@extends('includes.header')

<!-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif -->

<form action="{{ url('insertdatadisc') }}" method="post">
          @csrf
        <div class="form-group">
          <div class="col-md-4 mb-3">
            <label for="nameInputLabel">Name:</label>
            <input type="text" class="form-control" id="nameInputLabel" name="nome">
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-4 mb-3">
            <label for="emailInputLabel">Carga Horária:</label>
            <input type="text" class="form-control" id="emailInputLabel" name = "cargah">
          </div>
        </div>

<label for="professores">Selecione o professor: </label>
<select name="professor" id="professor">

   @foreach($professores as $professor){
     <option value="{{ $professor['codigo'] }}">{{ $professor['nome'] }}</option>'
    }
    @endforeach
</select>

        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
