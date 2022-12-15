
//Adicionar botão "Voltar no topo da página."

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Cadastro</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');
        .button-as-link a{
            text-decoration: none;
            color: white;
            font-family: 'Bebas Neue', cursive;
        }
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: url(../Tela\ de\ Login\ e\ Cadastro/bg-02.jpg);
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
    </style>
</head>

<body>
    <form method="post" action="scripts/cadastrar.php"">
        <div>
            <h1>
                Cadastro
            </h1>
            <input type="text" placeholder="Nome" name="nome" >
            <br><br>
            <input type="email" placeholder="E-mail" name="email" >
            <br><br>
            <input type="password" placeholder="Senha" name="senha" >
            <br><br>
            <input type="password" placeholder="Confirme a Senha" name="confirmar_senha">
            <br><br>
            <button type="submit" name="submit_cadastro" class="button-as-link">
                <a target="_self">
                    Cadastrar
                </a>
        </div>
    </form>
</body>
</html>