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


    <h1 style="text-align: center">
    {{ $disciplina['nome']}}
    </h1>

    <h1 style="text-align: center">
    Alunos
    </h1>

  <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Matrícula</th>

      <th scope="col">Nome</th>
      <th scope="col">Carga Horária</th>
      <th scope="col">Nota</th>
      <th scope="col">Frequência</th>



    </tr>
  </thead>
  <tbody>
    @foreach ($alunos as $aluno)
        <tr> <td> {{ $aluno['matricula'] }}</td>
        <td> {{ $aluno['nome'] }}</td>
        <td> {{ $aluno['cargahoraria'] }}h </td>
        <td> {{ $aluno['nota'] }} </td>
        <td> {{ $aluno['frequencia'] }}% </td>
         <td>
            @if($aluno['frequencia'] < '75' || $aluno['nota'] < 7 )
                Reprovado
            @else
            Aprovado
            @endif
    </td>
           <td><a href="{{ url('editnota/'.$aluno['aluno'].'/'.$aluno['disciplina']) }}" class="btn btn-dark"><i class="fa-solid fa-pen-to-square"></i> Nota</a></td>
        <td><a href="{{ url('editfreq/'.$aluno['aluno'].'/'.$aluno['disciplina']) }}" class="btn btn-dark"><i class="fa-solid fa-pen-to-square"></i> Frequência</a></td>
       </tr>

    @endforeach
  </tbody>
</table>
</div>

</div>
</body>
</html>
