
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <style>
    @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');
        .button-as-link a{
            
            text-decoration: none;
            color: rgb(255, 255, 255);
            font-family: 'Bebas Neue', cursive;
        }
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: url();
        }
        div{
            background-color: rgba(0, 0, 0, 0.6);
            position:absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 50px;
            border-radius: 10px;
            color: white;
        }
        input{
            padding: 15px;
            border: none;
            border-radius: 10px;
            font-size: 18px;
        }
        button{
            font-family: 'Bebas Neue', cursive;
            background-color: rgba(20, 240, 0, 0.575);
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 18px;
            cursor: pointer;
        }
        button:hover{
            background-color: rgb(5, 161, 0);
        }
        .nome{
            font-size: 40px;
        }
    </style>
</head>

<body>
       
    <div>
    <h1>Login</h1>
    <form action="./scripts/autenticar.php" method="POST">
        <input type="text" name="email" placeholder="Email" required>
        <br><br>
        <input type="password" name="senha" placeholder="Senha" required>
        <br><br>
        <button type="submit" name="submit_login" >Entrar</button>
        <br><br>
        <button class="button-as-link">
            <a href="./cadastro.php" target="_self">Cadastre-se</a>
    </form>
    </div>
</body>
</html>