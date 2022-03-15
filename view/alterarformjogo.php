<?php
include_once("../view/header.php");
include_once("../model/conexao.php");
include_once("../model/jogoModel.php");

extract($_REQUEST,EXTR_OVERWRITE);

$informa = visuJogoCodigo($conn, $codigojogo);

?>

<div class="container">

    <form class="row g-3" action="../controler/alterarJogo.php" method="post">
        <input type="hidden" name="idjogo" value="<?= $informa["idjogo"] ?>">
        <div class="col-md-6">
      <label for="inputJogo" class="form-label">Nome do Jogo</label>
      <input type="text" name="nomejogo" value="<?=$informa["nomejogo"]?>" class="form-control" id="inputJogo">
    </div>
    <div class="col-md-6">
      <label for="inputValor" class="form-label">Valor</label>
      <input type="number" name="valorjogo" value="<?=$informa["valorjogo"]?>"class="form-control" id="inputValor">
    </div>
    <div class="col-4">
      <label for="inputGenero" class="form-label">Gênero Jogo</label>
      <input type="text" name="generojogo" value="<?=$informa["generojogo"]?>" class="form-control" id="inputGenero">
    </div>
    <div class="col-4">
      <label for="inputQtd" class="form-label">Quantidade do Jogo</label>
      <input type="number" name="qtdjogo" value="<?=$informa["qtdjogo"]?>" class="form-control" id="inputQtd" placeholder="000">
    </div>
    <div class="col-4">
      <label for="inputData" class="form-label">Data de Lançamento do Jogo</label>
      <input type="date" name="datalancamentojogo" value="<?=$informa["datalancamentojogo"]?>" class="form-control" id="inputData" placeholder="00/00/0000">
    </div>
    <div class="col-4">
      <label for="inputStudio" class="form-label">Studio do Jogo</label>
      <input type="text" name="studiojogo" value="<?=$informa["studiojogo"]?>" class="form-control" id="inputStudio">
    </div>
    <div class="col-12">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck">
        <label class="form-check-label" for="gridCheck">
          Aceitar os termo de uso do sistemas de jogos!
        </label>
      </div>
    </div>

    <div class="col-12">
      <button type="submit" class="btn btn-primary">Alterar</button>
    </div>
  </form>

</div>

</div>
