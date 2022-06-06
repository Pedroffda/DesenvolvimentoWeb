<?php
    require('db/conexao.php');

    $erroEmail = "";
    $erroNome = "";

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        //VERIFICAR SE ESTÁ VAZIO O POST NOME
        if(empty($_POST['nome'])){
            $erroNome = "Por favor, preencha um nome";
        }else{  
            //PEGAR O VALOR VINDO DO POST E LIMPAR
            $nome = limpaPost($_POST['nome']);
            if(!preg_match("/^[a-zA-Z-' ]*$/", $nome)){
                //VERIFICAR SE TEM SOMENTE LETRAS
                $erroNome = "Apenas aceitamos letras e espaços em branco";
            }
        }

        //VERIFICAR SE ESTÁ VAZIO O POST EMAIL
        if(empty($_POST['email'])){
            $erroEmail = "Por favor, preencha um email";
        }else{  
            $email = limpaPost($_POST['email']);
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $erroEmail = "Email inválido";
            }
        }

        //SE NÃO TIVER NENHUM ERRO ENVIAR PARA BANDO DE DADOS E PARA O OBRIGADO
       if(($erroNome=="") && ($erroEmail=="")){

        $nome = limparPost($_POST['nome']);
        $cor = $_POST['cor'];
        $sexo = $_POST['sexo'];        

        $sql = "INSERT INTO cadastros (id, nome, cor, sexo , email)
        VALUES (null,'$nome','$cor', '$sexo' ,'$email')";
    
        if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }
    
        $conn->close();

        header('Location: obrigado.php');
    } 
    }
    function limpaPost($valor){
        $valor = trim($valor);
        $valor = stripslashes($valor);
        $valor = htmlspecialchars($valor);
        return $valor;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="icon" type="image/x-icon" href="./components/images/pato2.png">
    <link rel="stylesheet" href="./styles/form.css">
</head>
<body>
    <div id="form">
        <div class="title"><h1>Cadastro</h1></div>

        <form method="POST">
            <div class="input">
                <label>Nome</label>
                <input type="text" <?php if(!empty($erroNome)){echo "class='invalido'";}?> <?php if (isset($_POST['nome'])){ echo "value='".$_POST['nome']."'";} ?> name="nome" placeholder="Digite seu nome">
                <br><span class="erro"><?php echo $erroNome;?></span>
            </div>

            <div class="input">
                <label>Email</label>
                <input type="email" <?php if(!empty($erroEmail)){echo "class='invalido'";}?> <?php if (isset($_POST['email'])){ echo "value='".$_POST['email']."'";} ?> name="email" placeholder="email@provedor.com">
                <br><span class="erro"><?php echo $erroEmail;?></span>

            </div>

            <div class="input">
                <label>Cor</label>
                <select name="cor" id="color">
                    <option selected disabled value="">Escolha...</option>
                    <option value="vermelho">Vermelho</option>
                    <option value="amarelo">Amarelo</option>
                    <option value="verde">Verde</option>
                    <option value="azul">Azul</option>
                </select>
            </div>

            <div class="input">
                <label>Sexo:</label>
                <label>
                    <input type="radio" name="sexo" value="Masculino" checked>Masculino
                </label>
                <label>
                    <input type="radio" name="sexo" value="Feminino">Feminino
                </label>
            </div>

            <div class="btndiv">
                <button id="btn" type="submit">Cadastrar</button>
            </div>
        </form>
    </div>
</body>
</html>