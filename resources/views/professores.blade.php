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
.table{
    border: 1px solid black;
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

  <a href="{{ url('/registrationprof') }}" class="w3-bar-item w3-button">Cadastrar Professor</a>

<br>
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nome</th>
      <th scope="col">Email</th>

    </tr>
  </thead>
  <tbody>
    @foreach ($professores as $professor)
        <tr> <td> {{ $professor['codigo'] }}</td>
        <td><a href="{{ url('professorperfil/'.$professor['codigo'])}}"> {{ $professor['nome'] }}</a> </td>
        <td> {{ $professor['email'] }} </td>
</tr>
    @endforeach
  </tbody>
</table>




</div>

</div>
</body>
</html>
