<!DOCTYPE html>
<html lang="en">
@extends('includes.header')
<style>
    .w3-container, .w3-panel {
    padding: 0.01em 40px !important;
}

.w3-container.a {
    background-color: #d20054!important;
    color: #fff;
}
h2{
    margin: 30px 0 !important;
}
</style>
<body>


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
  <h1>My system.exe</h1>
</div>


<div class="w3-container">
<h2>Bem-vindo ao sistema de controle de servidores e alunos</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem nisi reiciendis sint doloremque, fugit officiis nesciunt unde quis magnam corporis minima. Quod, quisquam cupiditate. Placeat dolores eius dolorem neque provident.</p>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta saepe aliquid vitae et. Recusandae distinctio corporis deserunt rerum quas maiores repellendus alias sunt, quod, delectus ratione, ipsa cupiditate. Sit, minus!</p>
</div>

</div>

</body>
</html>
