<?php
    include "conexao.php";
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = md5($_POST['senha']);
    

    $sql = "SELECT id FROM usuarios WHERE email ='$email'";
    $query_id = $mysqli->query($sql);

    if (mysqli_num_rows($query_id) >=1 ){
        echo "Usuário já cadastrado";
    } 
    else{
        $sql = "INSERT INTO usuarios values (NULL, '$nome', '$email','$senha')";
        $query = $mysqli->query($sql);
        
        if($query){
            echo ("Cadastro realizado com sucesso!");
            header('Location: ../login.php');
        }else{
            echo "Problema na query!";
        }
    }
?>