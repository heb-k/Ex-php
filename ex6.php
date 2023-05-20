<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
    <title>ex6</title>
</head>
<body>
    <div class=container>
        <h1>Exercício 6</h1><br>
        <form method="POST" action="ex6.php">
            <input name="far" class="form-control" type="text" placeholder="insira a temperatura em graus Fahrenheit">
            <br>
            <button type="submit" class="btn btn-danger">enviar</button>
        </form><br>
        <?php
            if (isset($_POST["far"])) {
                $far = $_POST["far"];
                $celso = ($far - 32) / 1.8;
                echo "A temperatura em graus Celso russomano é: <b>$celso °C</b>";
            }
    ?>
    </div>
</body>
</html>
