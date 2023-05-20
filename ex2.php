<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
    <title>ex2</title>
</head>
<body>
    <div class=container>
        <h1>Exercício 2</h1><br>
        <form method="POST" action="ex2.php">
            <input name="num" class="form-control" type="number" placeholder="insira o número">
            <br>
            <button type="submit" class="btn btn-danger">enviar</button>
        </form><br>
        <?php
            if (isset($_POST["num"])) {
                $num = $_POST["num"];
                echo "O número informado foi: <b>$num</b>";
            }
        ?>
    </div>
</body>
</html>