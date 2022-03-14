<?php
include_once("../model/conexao.php");
include_once("../model/jogoModel.php");

if(alterarUsuario($conn,$codigousu,$nomeusu,$emailusu,$foneusu,$cpfusu,$tipousu,$cepusu,$numusu,$compleusu)){
    header("Location:../view/visuJogoNome.php");
}else{
    header("Location:../view/visuJogoNome.php");


}

?>