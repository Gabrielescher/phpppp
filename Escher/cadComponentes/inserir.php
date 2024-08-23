<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recebe os dados e salva ma tabela</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <h4 class="text-primary text-center">CADASTRO DE COMPONENTES - INSERÇÂO DE DADOS </h4>
    <?php 
    $curso = $_POST["curso"];
    $componente = $_POST["componente"];

    echo "Curso:" . $curso;
    echo "<br>Componente:" . $componente;

    ?>
    
</body>
</html>