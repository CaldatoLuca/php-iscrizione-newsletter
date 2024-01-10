<?php
include __DIR__ . '/session.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Utente Registrato</title>
</head>

<body>
    <p><?php echo $_SESSION['type_email'] ?></p>
</body>

</html>