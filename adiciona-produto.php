<?php include("include/cabecalho.php") ?>

  <?php
    $nome = $_GET["nome"];  
    $preco = $_GET["preco"];

    $conexao = mysqli_connect('http://db4free.net:3306/', 'mikrail', '357357357', 'mikrail');

    function insereProduto($conexao, $nome, $preco) {
      $query = "insert into produtos (nome, preco) values ('{$nome}', {$preco})";
      $resultadoDaInsercao = mysqli_query($conexao, $query);
      return $resultadoDaInsercao;
    }

    if(insereProduto($conexao, $nome, $preco)) {
  ?>

  <p class="alert-sucess">Produto <?=$nome;?>, <?=$preco;?> foi adicionado com sucesso!</p>

  <?php 
    } else {
  ?>

  <p class="alert-danger"> O produto <?=$nome;?>, não foi adicionado</p>

  <?php
    }  
  ?>

<?php include("include/rodape.php") ?>