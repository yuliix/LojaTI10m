<?php

include_once("../view/header.php");
include_once("../model/conexao.php");
include_once("../model/jogoModel.php");
?>

<div class="container mt-5">
  <form action="#" method="Post" class="row row-cols-lg-auto   justify-content-lg-center g-3 align-items-center">
    <div class="col-8">
      <label class="visually-hidden" for="inlineFormInputGroupUsername">Nome do jogo</label>
      <div class="input-group">
        <div class="input-group-text">Nome</div>
        <input type="text" name="nomeJogo" class="form-control" id="inlineFormInputGroupUsername" placeholder="Nome do jogo">
      </div>
    </div>
    <div class="col-2">
      <button type="submit" class="btn btn-primary">Pesquisar</button>
    </div>
  </form>

  <table class="table mt-5">
    <thead>
      <tr>
        <th scope="col">Codigo</th>
        <th scope="col">Nome</th>
        <th scope="col">Valor</th>
        <th scope="col">Quantidade</th>
        <th scope="col">Genero</th>
        <th scope="col">Alterar</th>
        <th scope="col">Excluir</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $nomejogo = isset ($_POST["nomeJogo"])? $_POST["nomeJogo"] : "" ;

      $dado = visuJogoNome($conn,$nomejogo);

      foreach($dado as $nomeJogo):
        ?>
        <tr>
          <th scope="row"><?=$nomeJogo["idjogo"];?></th>
          <td><?=$nomeJogo["nomejogo"]?></td>
          <td><?=$nomeJogo["valorjogo"]?></td>
          <td><?=$nomeJogo["qtdjogo"]?></td>
          <td><?=$nomeJogo["generojogo"]?></td>
          <td>
            <form action="../view/alterarformjogo.php" method="POST">
              <input type="hidden" value="<?=$nomeJogo["idjogo"]?>" name="codigojogo">
              <button type="submit" class="btn btn-primary">Alterar</button>
            </form>

          </td>
          <td> <!-- Button trigger modal -->
            <button type="button" class="btn btn-danger" codigo="<?=$nomeJogo["idjogo"]?>" nome="<?=$nomeJogo["nomejogo"]?>" data-bs-toggle="modal" data-bs-target="#deleteModal">
              Apagar
            </button>
          </td>
        </tr>
        <?php
      endforeach;
      ?>

    </tbody>
  </table>

</div>
<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteModal">Exclusão de Usuário</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <form action="../controler/deletarJogo.php" method="Get">
          <input type="hidden" class="codigo form-control" name="codigojogo">
          <button type="submit" class="btn btn-danger">Sim</button>
        </form>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Não</button>

      </div>
    </div>
  </div>
</div>

<script>
var deletarUsuarioModal = document.getElementById('deleteModal');
deletarUsuarioModal.addEventListener('show.bs.modal',function(event){
  var button = event.relatedTarget;
  var codigo = button.getAttribute('codigo');
  var email = button.getAttribute('email');
  var modalBody = deletarUsuarioModal.querySelector('.modal-body');
  modalBody.textContent = 'Gostaria de excluir o Usuario ' + email + '?'

  var Codigo = deletarUsuarioModal.querySelector('.modal-footer .codigo');
  Codigo.value = codigo;
})

</script>

<?php
include_once("../view/footer.php");
?>
