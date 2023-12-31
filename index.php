<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iscrizione Newsletter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container py-4 w-25">
        <h1 class="fw-bolder">Iscriviti alle nostre newsletter</h1>
        <form class="py-4">
            <label for="user-email" class="form-label">Indirizzo email:</label>
            <input type="text" class="form-control" id="user-email" name="user-email" value="<?php echo $_GET['user-email'] ?>">
            <button type="submit" class="btn btn-primary mt-4">Iscriviti</button>
        </form>
        <?php include __DIR__ . "/functions.php"; ?>
    </div>
</body>

</html>