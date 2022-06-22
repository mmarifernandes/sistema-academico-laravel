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
  <h3 class="w3-bar-item">Menu</h3>
</div>

  <a href="{{ url('/alunosview') }}" class="w3-bar-item w3-button">Alunos</a>
  <a href="{{ url('/professoresview') }}" class="w3-bar-item w3-button">Professores</a>
  <a href="{{ url('/disciplinasview') }}" class="w3-bar-item w3-button">Disciplinas</a>
</div>


<div style="margin-left:18%">

<div class="w3-container w3-pink">
  <h1>My system.exe</h1>
</div>


<div class="w3-container">

<br>

  <a href="{{ url('/registrationdisc') }}" class="w3-bar-item w3-button">Cadastrar Disciplinas</a>

<br>
    <table class="table table-striped">
  <thead>
    <tr>

      <th scope="col">Nome</th>
      <th scope="col">Professor</th>
      <th scope="col">Carga Horária</th>

    </tr>
  </thead>
  <tbody>
    @foreach ($disciplinas as $disciplina)
        <tr> <td> {{ $disciplina['nomed'] }}</td>
        <td> {{ $disciplina['nomep'] }} </td>
        <td> {{ $disciplina['cargahoraria'] }}h </td>
</tr>
    @endforeach
  </tbody>
</table>




</div>

</div>
</body>
</html>
