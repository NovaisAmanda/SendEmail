<?php
 include '../includes/conexao.php';

if ( isset($_POST['email']) || isset($_POST['senha']) )
{
    if(strlen($_POST['email']== 0 ))
    {

        echo "Preencha seu E-mail";
    }
    else if(strlen($_POST['senha']== 0 ))
    {
        echo "Preencha sua senha";
    }
    else{
        $email= $mysqli->real_escape_string($_POST['email']);
        $senha= $mysqli->real_escape_string($_POST['senha']);


        $sql_code= "SELECT * FROM funcionario WHERE  email_funcionario= '$email' AND senha_funcionario= '$senha' ";
        $sql_query= $mysqli->query($sql_code) or die ("falha na execução do código SQL: ". $mysqli->error);

        $quant= $sql_query->num_rows;

        if($quant==1){
            $usuario= $sql_query->fetch_assoc();

            if(!isset($_SESSION)){
                session_start();
            }
            $_SESSION['nome']= $usuario['nome_funcionario'];
            $_SESSION['email']= $usuario['email_funcionario'];
            header('location: ../index.php');

        }else{
            echo "Falha ao logar!";
        }
    } 
}
?>