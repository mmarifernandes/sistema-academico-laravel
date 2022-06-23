<!DOCTYPE html>
<html lang="en">
@extends('includes.header')
<style>
    table{
        margin: auto !important;
        width: 65% !important;

    }
    .w3-container.a {
    background-color: #d20054!important;
    color: #fff;
}

    .table>:not(caption)>*>* {
    padding: 1rem 1rem !important;

}
</style>
<body>
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
    <br>


<!-- Button trigger modal -->
<button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
Matricular em disciplinas
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Matricular {{$aluno['nome']}}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div style="text-align: center" class="modal-body">
        <form action="{{ url('insertdataalunodisc') }}" method="post">
        @csrf
<label for="disciplina">Selecione a disciplina: </label>
<select name="disciplina" id="disciplina">

    @foreach($disciplinas2 as $disciplina){
    <option value="{{ $disciplina['codigo'] }}">{{ $disciplina['nome'] }} / Carga horária: {{ $disciplina['cargahoraria'] }}h</option>'
    }
    @endforeach
</select>
<input type="hidden" name="aluno" value="{{ $aluno['matricula'] }}">
<br>
<br>
        <button type="submit" class="btn btn-primary" name="submit">Confirmar</button>

        </form>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

    </div>
    </div>
</div>
</div>


    <h1 style="text-align: center">
        {{$aluno['nome']}}
    </h1>

<br>

    <table class="table table-striped">
  <thead>
    <tr>

      <th scope="col">Nome</th>
      <th scope="col">Carga Horária</th>
      <th scope="col">Nota</th>
      <th scope="col">Frequência</th>

    </tr>
  </thead>
  <tbody>
    @foreach ($disciplinas as $disciplina)
        <tr> <td> {{ $disciplina['nome'] }}</td>
        <td> {{ $disciplina['cargahoraria'] }}h </td>
        <td></td>
        <td></td>
        <td><button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#nota">Nota</button></td>
        <td><button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#frequencia">Frequência</button></td>

</tr>
    @endforeach
  </tbody>
</table>

</div>

</div>
</body>



<!-- Modal Nota -->
<div class="modal fade" id="nota" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Adicionar/Editar Nota</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
    <form action="{{ url('insertnotaaluno') }}" method="post">
        @csrf
        <label for="nota">Insira a nota:</label>
        <input type="text" name="nota" placeholder="0 a 10">
        <button type="submit" class="btn btn-primary" name="submit">Confirmar</button>
    </form>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>



<!-- Modal Frequência -->
<div class="modal fade" id="frequencia" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Adicionar/Editar Frequência</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</html>
