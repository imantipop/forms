<!DOCTYPE html>
<html lang="en">

<head>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>

    <style>
        input {
            width: 100%;
        }

        .form {
            width: 100%;
        }

        .flex {
            display: flex;
        }

        .center {
            margin: auto;
            padding: 15px;
            width: 350px;
        }

        body,
        html {
            height: 100%;
        }
    </style>
</head>

<body class="flex">
    <div class="center shadow">

        <form method="post" class="form">
            <label for="user">Username:</label><br>
            <input type="text" id="user" name="user" value="" required><br>
            <label for="password">Senha</label><br>
            <input type="password" id="password" name="password" value="" required><br>
            <label for="password2">Confirme a Senha</label><br>
            <input type="password" id="password2" name="password2" value="" required><br><br>
            <input type="submit" value="Enviar" name="submit1"><br>
        </form><br>

        <?php
        if (
            isset($_POST["submit1"]) && isset($_POST["user"])
            && isset($_POST["password"])
            && isset($_POST["password2"])
        ) {
            $error = false;

            if (empty($_POST["user"])) {

                $error = true;
            }

            if (empty($_POST["password"])) {
                $error = true;
            }

            if (empty($_POST["password2"])) {
                $error = true;
            }

            if ($error == false) {
                echo "<div class='alert alert-success' role='alert'> Registrado! </div>";
            } else {
                echo "<div class='alert alert-warning' role='alert'> Erro! </div>";
            }
        }

        ?>
    </div>
</body>

</html>