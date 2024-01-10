<?php

//variabili per mostrare l' alert corretto
$check = '';
$display = 'd-none';
$result_text = "";

//controllo se esiste la variabile email in GET
if (isset($_GET['email'])) {
    $type_email = $_GET['email'];
    echo $type_email;
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Newsletter</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="p-5">
    <!-- title -->
    <h1 class="text-center">Newsletter</h1>

    <!-- form -->
    <form action="index.php" method="GET">
        <!-- email -->
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
        <div id="emailHelp" class="form-text mb-3">We'll never share your email with anyone else.</div>

        <!-- bottone -->
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <!-- alert -->
    <div role="alert" <?php echo "class='alert alert-$check $display'"; ?>>
        <?php echo $result_text ?>
    </div>

</body>

</html>