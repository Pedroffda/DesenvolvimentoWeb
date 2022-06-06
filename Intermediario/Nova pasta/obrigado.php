<?php
require('db/conexao.php');
    echo "<br>";
    echo "FORMULARIO ENVIADO <br>";

    $sql = "SELECT * FROM cadastros";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table><tr><th>ID</th><th>Name</th><th>Cor</th><th>Sexo</th><th>Email</th>";
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr><td>".$row["id"]."</td><td>".$row["nome"]."</td><td>".$row["cor"]."</td><td>".$row["sexo"]."</td><td>".$row["email"]."</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
    $conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>obrigado</title>
    <link rel="icon" type="image/x-icon" href="./components/images/pato2.png">
    <style>
        table{
            border-collapse: collapse;
            width: 100%;
        }

        th,td{
            padding: 10px;
            text-align: center;
            border: 1px solid #ccc;
        }
    </style>
</head>
<body>
    
</body>
</html>