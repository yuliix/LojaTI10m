<?php

function inserirUsuario($conn,$nomeusu,$emailusu,$foneusu,$cpfusu,$tipousu,$cepusu,$numusu,$compusu) {



  $query = "INSERT INTO `tbusuario` (`idusu`, `nomeusu`, `emailusu`, `foneusu`, `tipousu`, `cpfusu`, `cepusu`, `numusu`, `compleusu`) VALUES (NULL,'{$nomeusu}','{$emailusu}','{$foneusu}','{$tipousu}','{$cpfusu}','{$cepusu}','{$numusu}','{$compusu}')";


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
?>
