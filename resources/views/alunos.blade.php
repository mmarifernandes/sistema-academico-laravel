<!DOCTYPE html>
<html lang="en">
@extends('includes.header')
<style>
    table{
        margin: auto !important;
        width: 65% !important;

    }

    .table>:not(caption)>*>* {
    padding: 1rem 1rem !important;

}
</style>
<body>
<div class="w3-sidebar w3-light-grey w3-bar-block" style="width:18%;">

<div class="w3-container w3-deep-purple">
  <h3 class="w3-bar-item">Menu</h3>
</div>

  <a href="{{ url('/alunosview') }}" class="w3-bar-item w3-button">Alunos</a>
  <a href="{{ url('/registrationprof') }}" class="w3-bar-item w3-button">Professores</a>
  <a href="{{ url('/registrationdisc') }}" class="w3-bar-item w3-button">Disciplinas</a>
</div>


<div style="margin-left:18%">

<div class="w3-container w3-pink">
  <h1>My system.exe</h1>
</div>


<div class="w3-container">

<br>
  <a href="{{ url('/registrationaluno') }}" class="w3-bar-item w3-button">Cadastrar Aluno</a>

<br>
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Matrícula</th>
      <th scope="col">Nome</th>
      <th scope="col">Email</th>

    </tr>
  </thead>
  <tbody>
    @foreach ($alunos as $aluno)
        <tr> <td> {{ $aluno['matricula'] }}</td>
        <td> {{ $aluno['nome'] }} </td>
        <td> {{ $aluno['email'] }} </td>
</tr>
    @endforeach
  </tbody>
</table>




</div>

</div>
</body>
</html>
