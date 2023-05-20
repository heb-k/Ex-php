<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
    <title>ex4</title>
</head>
<body>
    <div class=container>
        <h1>Exercício 4</h1><br>
        <form method="POST" action="ex4.php">
            <input name="metros" class="form-control" type="text" placeholder="insira os metros">
            <br>
            <button type="submit" class="btn btn-danger">enviar</button>
        </form><br>
        <?php
            if (isset($_POST["metros"])) {
                $metros = $_POST["metros"];
                $cm = 100 * $metros;
                echo "Valor em cm: <b>$cm</b>";
            }
    ?>
    </div>
</body>
</html>
