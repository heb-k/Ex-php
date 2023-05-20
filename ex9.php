<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
    <title>ex9</title>
</head>
<body>
    <div class=container>
        <h1>Exercício 9</h1><br>
        <form method="POST" action="ex9.php">
            <input name="altura" class="form-control" type="text" placeholder="insira a altura da pessoa"><br>
            <div class="form-check-inline">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="homi">Homem
                </label>
            </div>
            <div class="form-check-inline">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="muie">Mulher
                </label>
            </div>
            <br><br>
            <button type="submit" class="btn btn-danger">enviar</button>
        </form><br>
        <?php
            if (isset($_POST["altura"])) {
                if (isset($_POST["homi"])){
                $altura = $_POST["altura"];
                $pi = 72.7 * $altura - 58;
                echo "O peso ideal é: <b>$pi</b>";
                }
                else{
                    if (isset($_POST["muie"])){
                    $altura = $_POST["altura"];
                    $pi = 62.1 * $altura - 44.7;
                    echo "O peso ideal é: <b>$pi</b>";
                    }else{
                        echo "<hmtl><script>alert('Não esqueça de inserir se é Homem ou Mulher')</script></html>";
                    }
                }
            }
    ?>
    </div>
</body>
</html>
