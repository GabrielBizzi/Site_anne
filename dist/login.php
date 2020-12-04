<?php 

    require_once 'classe.php';
    $u = new usuario();

    if(isset($_POST['login'])){
        $login = addslashes($_POST['login']);
        $senha = addslashes($_POST['senha']);
        if(!empty($login) && !empty($senha)){
            $u->conectar('u134520211_teste','localhost','u134520211_bizzi','O8E=Wqh+f');
            if($u->msg == ""){
                if($u->logar($login,$senha)){
                  $_COOKIE['login']= $_POST['login'];
                  echo "variavel global: ".$_COOKIE['login'];
                  header("location: ../pricing.php");
                }else{
                    echo "<script language='javascript' type='text/javascript'>alert('Não foi possivel logar no sistema!')</script>";
                    echo "<script language='javascript' type='text/javascript'>window.location.href='../login/index.html';</script>";
                }
            }else{
                echo "Erro: ".$u->msg;
            }
        }else {
            echo "<script language='javascript' type='text/javascript'>alert('Preenha todos os campos!')</script>";
            echo "<script language='javascript' type='text/javascript'>window.location.href='../login/index.html';</script>";
        }
    }

?>