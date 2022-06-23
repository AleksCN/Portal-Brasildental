<?php

if(isset($_POST['submit']))
{
    print_r('Nome: ' . $_POST['nome']);
    print_r('<br>');
    print_r('Senha: ' . $_POST['senha']);

    include_once('config.php');

    $nome = $_POST['nome'];
    $senha = $_POST['senha'];

    $result = mysqli_query($conexao, "INSERT INTO users (nome,senha) VALUES ('$nome','$senha')");

    header('Location: login.php');
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario | Brasildental</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background: #201b2c;
        }
        .box{
            color: white;
            font-weight: 700;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 25px;
            border-radius: 15px;
            width: 20%;
        }
        fieldset{
            border: 3px solid #77ffc0;;
        }
        legend{
            border: 1px solid #77ffc0;
            padding: 10px;
            text-align: center;
            background-color: #77ffc0;
            border-radius: 8px;
        }
        .inputBox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 3px solid white;
            outline: none;
            color: black;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput{
            top: -20px;
            font-size: 12px;
            color: black;
        }
        #submit{
            background-color: #77ffc0;
            width: 100%;
            border: none;
            padding: 15px;
            color: black;
            font-weight: 700;
            font-size: 20px;
            cursor: pointer;
            border-radius: 10px;
        }
        #submit:hover{
            background-image: linear-gradient(to right,rgb(0, 80, 172), rgb(80, 19, 195));
        }
    </style>
</head>
<body>
    <div class="box">
        <form action="formulário.php" method="POST">
            <fieldset>
                <legend><b>Formulario</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>