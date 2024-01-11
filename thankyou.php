<?php

session_start();

if (!isset($_SESSION['email'])) {
    $_SESSION['email'] = '';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grazie</title>
</head>

<body>
    <h1>Grazie per esserti registrat*</h1>
    <p>La tua email è <?php echo $_SESSION['email']; ?></p>
</body>

</html>