<?php
// requere a conexao com o BD
require('db/conexao.php');
    echo "<br>";
    echo "<p>FORMULARIO ENVIADO</p> <br>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>obrigado</title>
    <link rel="icon" type="image/x-icon" href="./components/images/pato2.png">
    <link rel="stylesheet" href="./styles/obg.css">
</head>
<body>
    <form method="POST">
        <button type="submit" id="delete" name='delete' >Deletar Todos os Dados</button>
    </form>
    
    <?php

        /* 
        A função isset() verifica se uma variável está definida, o que significa que ela deve ser declarada e não é NULL.
        Esta função retorna true se a variável existir e não for NULL, caso contrário, retornará false.
        */

        if(isset($_POST['delete'])){
            $deleteSql = "delete from cadastros where id >= 0;";
            if ($conn->query($deleteSql) === TRUE) {
                echo "Record deleted successfully<br>";
                } else {
                echo "Error deleting record: ".$conn->error;
            }
        }

        if(isset($_POST['idDel'])){
            $deleteSql = "delete from cadastros where id ='".$_POST['idDel']."';";
            if ($conn->query($deleteSql) === TRUE) {
                echo "Record deleted successfully<br>";
                } else {
                echo "Error deleting record: ".$conn->error;
            }
        }

        $sql = "SELECT * FROM cadastros;";
        $result = $conn->query($sql);
    
        if ($result->num_rows > 0) {
            /*cabeçalho da tabela*/
            echo "<table>
            <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Cor</th>
            <th>Sexo</th>
            <th>Email</th>
            <th>Opções</th>
            
            </tr>";

            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                $id = $row["id"];
                /*dados da tabela*/
                echo "<tr>
                <td>".$row["id"]."</td>
                <td>".$row["nome"]."</td>
                <td>".$row["cor"]."</td>
                <td>".$row["sexo"]."</td>
                <td>".$row["email"]."</td>
                <td >
                <form id='y' method='POST'>
                    <button id='intDelete' name = 'idDel' value = ".$id.">apagar</button>
                </form>
                </td>
                </tr>";
            }
            echo "</table>";
        } else {
            echo "0 results";
        }

        $conn->close();
    ?>
    <script src="./js/cad.js"></script>
</body>
</html>