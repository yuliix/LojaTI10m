<?php

function inserirUsuario($conn,$nomeusu,$emailusu,$foneusu,$cpfusu,$tipousu,$cepusu,$numusu,$compusu,$senhausu,$pinusu) {

  $salto = ['cost'=>8];

  $senhaCrip = password_hash($senhausu,PASSWORD_BCRYPT,$salto );

  $query = "INSERT INTO `tbusuario` (`idusu`, `nomeusu`, `emailusu`, `foneusu`, `tipousu`, `cpfusu`, `cepusu`, `numusu`, `compleusu`,`senhausu`,`pinusu`)
  VALUES (NULL,'{nomeusu}','{emailusu}','{foneusu}','{tipousu}','{cpfusu}','{cepusu}','{numusu}','{compleusu}','{senhaCrip}','{pinusu}');";


  $dados = mysqli_query($conn,$query);
  return $dados;

};

function visuUsuarioNome($conn,$nomeusu){
  $query = "select * from tbusuario where nomeusu like '%{$nomeusu}%'";
  $resultado = mysqli_query($conn, $query);
  return $resultado;

};

function visuUsuarioEmail($conn,$emailusu){
  $query = "select * from tbusuario where emailusu like '%{$emailusu}%'";
  $resultado = mysqli_query($conn, $query);
  return $resultado;

};
function visuUsuarioCodigo($conn,$idusu){
  $query = "select * from tbusuario where idusu = {$idusu}";
  $resultado = mysqli_query($conn, $query);
  $resultado = mysqli_fetch_array($resultado);
  return $resultado;

};

function alterarUsuario($conn,$idusu,$nomeusu,$emailusu,$foneusu,$cpfusu,$tipousu,$cepusu,$numusu,$compleusu){
  $query = "update tbusuario set
  nomeusu='{$nomeusu}',
  emailusu='{$emailusu}',
  foneusu = '{$foneusu}',
  tipousu = '{$tipousu}',
  cpfusu='{$cpfusu}',
  cepusu='{$cepusu}',
  numusu='{$numusu}',
  compleusu='{$compleusu}' where idusu = '{$idusu}'";
  $resultado = mysqli_query($conn, $query);
  return $resultado;
};
function deletarUsuario($conn, $idusu){
  $query = "delete from tbusuario where idusu='{$idusu}'";
  $resultado = mysqli_query($conn,$query);
  return $resultado;
};

function loginUsuario($conn,$emailusu,$senhausu){
    $query = "Select * from tbusuario where emailusu='{$emailusu}'";
    $resultado = mysqli_query($conn,$query);
    if(mysqli_num_rows($resultado) > 0){
        $row = mysqli_fetch_assoc($resultado);
        if(password_verify($senhausu,$row["senhausu"])){
            $_SESSION["emailusu"] = $row["emailusu"];
            return $row["emailusu"];
        }else{
            return "Acesso negado1";
        }
    }else{
        return "Acesso negado2";
    }
    return "Acesso negado3";

};

function usarAcesso(){
    $email = isset($_SESSION["email"]);
    if(!$email){
        $_SESSION["msg"] = "<div class=''alert alert-danger' role='alert' Faça login para ter acesso ao sistema.</div>";
        header("Location:../view/acessofun.php");
    }
};

function logout(){

};
?>
