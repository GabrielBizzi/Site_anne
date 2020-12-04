<?php

$dbname="u134520211_teste";
$host="localhost";
$usuario="u134520211_bizzi";
$senha="O8E=Wqh+f";

    Class Usuario{
            
        private $pdo;
        public $msg = "";

        public function conectar($dbname,$host,$usuario,$senha){
            global $pdo;
            try {                
                $pdo = new PDO('mysql:host='.$host.';dbname='.$dbname, $usuario, $senha);
                
            } catch (PDOException $erro) {
                global $msg;
                $msg = $erro->getMessage();
            }
            
        }
        
        public function cadastrar($login,$senha,$email,$date,$cpf){
            global $pdo;
            $senhacrypt=crypt($senha);
            $sql = $pdo -> prepare("SELECT ID FROM usuarios WHERE login = $login");
            $sql->execute();
            if($sql->rowCount() > 0){
                return false;
            }else{
                $sql = $pdo->prepare("INSERT INTO usuarios (login,senha,email,date,cpf) VALUES ('$login','$senhacrypt','$email','$date','$cpf')");
                $sql->execute();
                return true;
            }
            
        }

        public function logar($login,$senha){
            global $pdo;
            $senhacrypt=crypt($senha);
            $sql = $pdo->prepare("SELECT login FROM usuarios WHERE login = '$login' AND senha = '$senhacrypt'");
            $sql->execute();
            if($sql->rowCount() > 0){
                $dado = $sql -> fetch();
                session_start();
                $_SESSION['ID'] = $dado['login'];
                return true;
            }else{
                return false;
            }
        }
    }

?>