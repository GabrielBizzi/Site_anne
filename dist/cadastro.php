<?php 

    require_once 'classe.php';
    $u = new usuario();

    if(isset($_POST['login'])){
        $login = addslashes($_POST['login']);
        $senha = addslashes($_POST['senha']);
        $email = addslashes($_POST['email']);
        $date = addslashes($_POST['date']);
        $cpf = addslashes($_POST['cpf']);

        if(!empty($login) && !empty($senha) && !empty($email) && !empty($date) && !empty($cpf)){
            $u->conectar('u134520211_teste','localhost','u134520211_bizzi','O8E=Wqh+f'); 
            echo "$msg";
            if($u->msg == ""){
                if($u->cadastrar($login,$senha,$email,$date,$cpf)){
                    echo "<script language='javascript' type='text/javascript'>alert('O usuario foi cadastrado com sucesso!')</script>";
                    echo "<script language='javascript' type='text/javascript'>window.location.href='../login/index.html'</script>";
                }else{
                    echo "<script language='javascript' type='text/javascript'>alert('O usuario já está cadastrado no sistema. Tente outro!')</script>";
                    echo "<script language='javascript' type='text/javascript'>window.location.href='../register/index.html';</script>";
                }
            }else{
                echo "Erro: ".$u->msg;
            }
        }else {
            echo "<script language='javascript' type='text/javascript'>alert('Preenha todos os campos!')</script>";
            echo "<script language='javascript' type='text/javascript'>window.location.href='../register/index.html';</script>";
        }
    }

?>