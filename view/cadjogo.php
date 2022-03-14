<?php
include_once("header.php");
?>

<div class="container">

  <form class="row g-3" action="../controler/inserirCadastroJogo.php" method="Get">
    <div class="col-md-6">
      <label for="inputJogo" class="form-label">Nome do Jogo</label>
      <input type="text" name="nomejogo" class="form-control" id="inputJogo" placeholder="INSIRA O NOME DO JOGO" required>
    </div>
    <div class="col-md-6">
      <label for="inputValor" class="form-label">Valor do jogo</label>
      <input type="text" name="valorjogo" class="form-control" id="inputValor" placeholder="$" required>
    </div>
    <div class="col-6">
      <label for="inputgenero" class="form-label">Genero Jogo</label>
      <input type="text" name="generojogo" class="form-control" id="inputgenero" placeholder="INSIRA O GENERO DO JOGO" required>
    </div>
    <div class="col-6">
      <label for="inputQuantidade" class="form-label">Quantidade de Jogos</label>
      <input type="number" name="qtdjogo" class="form-control" id="inpuQuantidade" placeholder="QUANTIDADE" required>
    </div>
    <div class="col-6">
      <label for="inputstudio" class="form-label">Studio</label>
      <input type="text" name="studiojogo" class="form-control" id="inputstudio" placeholder="INSIRA O NOME DO STUDIO REFERENTE DO JOGO" required>
    </div>
    <div class="col-md-2">
      <label for="inputdata" class="form-label">Data De Lançamento</label>
      <input type="date" name="datalancamentojogo" class="form-control" id="inputdata" placeholder="INSIRA A DATA DE LANÇAMENTO DO JOGO" required>
    </div>

    <div class="col-12">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck">
        <label class="form-check-label" for="gridCheck">
          Aceita-se os termo de uso do sistema de jogos
        </label>
      </div>
    </div>
    <div class="col-12">
      <button type="submit" class="btn btn-primary">Criar</button>
    </div>
  </form>

</div>

<?php
include_once("footer.php");
?>
