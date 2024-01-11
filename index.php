<?php

// require_once '/Users/taniot/Code/boolean/classe110/esercitazioni/php-lc-iscrizione-newsletter' . '/functions.php';

require_once __DIR__ . '/functions.php';

session_start();

$error = NULL;
$error_class = NULL;
$error_text = '';

$email = '';

//verifico se esiste il parametro email e se ha contenuto
if (!empty($_POST['email'])) {

    $email = $_POST['email'];

    //verifico se email ha un . e una @
    if (checkEmail($email)) {
        $_SESSION['email'] = $email;
        header('Location: thankyou.php');
        die;
    } else {
        $error = true;
        $error_class = 'danger';
        $error_text = 'la mail NON valida!';
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Iscrizione Newsletter</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- /bootstrap -->
</head>

<body>
    <div class="container p-5">
        <h1>Ciao sono una pagina php</h1>
        <form action="index.php" method="POST">
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>

                <input type="text" class="form-control" id="email" aria-describedby="emailHelp" name="email" value="<?php echo $email; ?>">


                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <!-- visualizzo errore -->
        <?php if ($error !== NULL) : ?>

            <div class="alert alert-<?php echo $error_class; ?> mt-3" role="alert">
                <?php echo $error_text; ?>
            </div>

        <?php endif; ?>




    </div>






</body>

</html>