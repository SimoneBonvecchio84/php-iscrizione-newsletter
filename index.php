<?php
$correct_mail = "simo@mail.ciao";

if (!isset($_SESSION)) {
    session_start();
}

if (isset($_POST["mail"])) {
    $user_mail = $_POST["mail"];
    if ($user_mail === $correct_mail) {
        echo "mail corretta";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container py-5">
        <div class="row">
            <div class="col-6">
                <form action="index.php" method="POST">
                    <div class="mb-3">
                        <label for="mail" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="mail" aria-describedby="emailHelp" name="mail">
                        <div id="emailHelp" class="form-text"></div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="col-6">
                <h2>
                    <?php $user_mail ?>
                </h2>
            </div>
        </div>
    </div>
</body>

</html>