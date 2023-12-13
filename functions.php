<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>functions</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <?php
    $userEmail = $_GET['user-email'];
    if ($userEmail === "") { ?>
        <p class="alert alert-danger" role="alert">Inserire il vostro indirizzo email</p>
    <?php
    } else if (str_contains($userEmail, '@') && str_contains($userEmail, '.')) {
    ?>
        <p class="alert alert-success" role="alert">Email valida! Iscrizione effettuata</p>
    <?php
    } else {
    ?>
        <p class="alert alert-danger" role="alert">Email non valida!</p>
    <?php
    }
    ?>
</body>

</html>