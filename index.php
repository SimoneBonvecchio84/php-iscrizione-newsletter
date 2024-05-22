<?php

// phpinfo(); die;
// require __DIR__ . "partials/function.php";
// $result = check_mail($user_mail, $correct_mail);
// $correct_mail = "simo@mail.ciao";
// una volta inizializzata la sessione salviamo le info nell array $_SESSION
// inizializziamo la sessione
// var_dump($result);
// isset controlla se la variabile è stata definita oppre no 
// restitusce true se è stata definita e ha un valore diverso da null
// altrimenti restituisce false 
// if (isset($_POST["mail"])) {
//     $user_mail = $_POST["mail"];
//     if ($user_mail === $correct_mail) {
//         echo "mail corretta";
//     } else {
//         echo "mail errata";
//     }
// }

require "partials/function.php";


$user_mail = $_POST["mail"];

$result = check_simbol($user_mail);

$void_result = value_void($user_mail);

if(check_simbol($user_mail)) {
    $_SESSION['email'] = $user_mail;
    header('Location: dashboard.php');
    exit();
} 

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- /Link Bootstrap -->
    <title>Document</title>
</head>

<body>
    <div class="container py-5">
        <div class="row py-3">
            <div class="col">
                <form action="index.php" method="POST">
                    <div class="mb-3">
                        <label for="mail" class="form-label">Email address</label>
                        <input type="text" class="form-control" id="mail" aria-describedby="emailHelp" name="mail">
                        <div id="emailHelp" class="form-text">Ciao a Tutti!</div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
        <div class="row py-3">
            <div class="col text-center">
                <div>
                    <div>
                        <?php echo $void_result ? '<h2 class=" border border-danger rounded py-2">Inserisci una mail</h2>' :  "" ?>
                    </div>
                    <div>
                        <?php echo $result ?
                            '<h2 class="text-success border border-success rounded py-2">La mail è corretta!</h2>' :
                            '<h2 class="text-danger border border-danger rounded py-2">La mail è sbagliata!</h2>' ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>