<?php
session_start();
?>

<?php
include "conexao.php";
$email = $_POST['email'];
$senha = md5($_POST['senha']);

$sql = "SELECT * FROM usuarios WHERE email = '$email' and  senha = '$senha'";
$query = $mysqli->query($sql);
$total = $query->num_rows;

//print_r(var_dump($total));

if($total==0){
    echo('Login não encontrado');
    header('Location: ../login.php');
           
} elseif ($total==1) {
    ($info = $query->fetch_array());

    $_SESSION['id'] = $info['id'];
    $_SESSION['nome'] = $info['nome'];
    $_SESSION['email'] = $email;
     
    //echo($total);
    //echo($_SESSION['id']);
    //echo($_SESSION['nome']);
    //echo($_SESSION['email']);
    //echo($_SESSION['senha']);
    header('Location: ../home.php');
    }
?>