<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
    <title>ex3</title>
</head>
<body>
    <div class=container>
        <h1>Exercício 3</h1><br>
        <form method="POST" action="ex3.php">
            <input name="nota1" class="form-control" type="number" placeholder="insira a primeira nota"><br>
            <input name="nota2" class="form-control" type="number" placeholder="insira a segunda nota"><br>
            <input name="nota3" class="form-control" type="number" placeholder="insira a terceira nota">
            <br>
            <button type="submit" class="btn btn-danger">enviar</button>
        </form><br>
        <?php
            if (isset($_POST["nota1"])) {
                $nota1 = $_POST["nota1"];
                $nota2 = $_POST["nota2"];
                $nota3 = $_POST["nota3"];
                $media = ($nota1 + $nota2 + $nota3) / 3;
                echo "A média do aluno foi: <b>$media</b>";
            }
    ?>
    </div>
</body>
</html>
