@extends('includes.header')
<style>


    .w3-container.a {
    background-color: #d20054!important;
    color: #fff;
    }


    form{
        margin-left: 35%;
        margin-top: 8%;
    }
}
</style>
<!-- Sidebar -->
<div class="w3-sidebar w3-light-grey w3-bar-block" style="width:18%;">

<div class="w3-container a">
  <a href="{{ url('/') }}"><h3 class="w3-bar-item">Menu</h3></a>
</div>

  <a href="{{ url('/alunosview') }}" class="w3-bar-item w3-button">Alunos</a>
  <a href="{{ url('/professoresview') }}" class="w3-bar-item w3-button">Professores</a>
  <a href="{{ url('/disciplinasview') }}" class="w3-bar-item w3-button">Disciplinas</a>
</div>


<div style="margin-left:18%">

<div class="w3-container w3-pink">
  <h1>2School</h1>
</div>


<div class="w3-container">
<form action="{{ url('insertdatadisc') }}" method="post">
          @csrf
        <div class="form-group">
          <div class="col-md-4 mb-3">
            <label for="nameInputLabel">Nome da disciplina:</label>
            <input type="text" class="form-control" id="nameInputLabel" name="nome" required>
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-4 mb-3">
            <label for="emailInputLabel">Carga Horária:</label>
            <input type="number" class="form-control" id="emailInputLabel" name = "cargah" max="16" min="4" required>
          </div>
        </div>

<label for="professores">Selecione o professor: </label>
<br>
<select name="professor" id="professor">

   @foreach($professores as $professor){
     <option value="{{ $professor['codigo'] }}">{{ $professor['nome'] }}</option>'
    }
    @endforeach
</select>
<br>
<br>
        <button type="submit" class="btn btn-dark" name="submit">Submit</button>
</form>
</div>

</div>
</body>
</html>
