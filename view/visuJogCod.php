<?php

include_once("../view/header.php");
include_once("../model/conexao.php");
include_once("../model/jogoModel.php");

?>


<div class="centroform">

  <form action="#" method="Post" class="row row-cols-lg-auto g-3 align-items-center">
    <div class="col-12">
      <label class="visually-hidden" for="inlineFormInputGroupUsername">Código do jogo</label>
      <div class="input-group">
        <div class="input-group-text">Código</div>
        <input type="text" name="codigoJogo" class="form-control" id="inlineFormInputGroupUsername" placeholder="Código do jogo">
      </div>
    </div>

    <div class="col-12">
      <button type="submit" class="btn btn-primary">Pesquisar</button>
    </div>
  </form>



  <table class="table">
    <thead>
      <tr>
        <th scope="col">Codigo</th>
        <th scope="col">Nome</th>
        <th scope="col">Valor</th>
        <th scope="col">Quantidade</th>
        <th scope="col">Genero</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $codigojogo = isset ($_POST["codigoJogo"])? $_POST["codigoJogo"]:"" ;

      if($codigojogo){

        $dado = visuJogoCodigo($conn,$codigojogo);

        if($dado){

          ?>
          <tr>
            <th scope="row"><?=$dado["idjogo"] ?></th>
            <td><?=$dado["nomejogo"] ?></td>
            <td><?=$dado["valorjogo"] ?></td>
            <td><?=$dado["qtdjogo"] ?></td>
            <td><?=$dado["generojogo"] ?></td>
          </tr>
          <?php
        }
      }
      ?>
    </tbody>
  </table>

</div>

<?php

include_once("../view/footer.php")

?>