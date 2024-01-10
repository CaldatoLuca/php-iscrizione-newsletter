<?php

include __DIR__ . '/variables.php';
include __DIR__ . '/session.php';

//funzione che controlla se la mail è corretta e restiruisce i valori per le classi alert (come array)
function checkEmail($email)
{
    $result = array(
        'check' => '',
        'display' => 'd-none',
        'result_text' => ''
    );

    if (strpos($email, '.') !== false && strpos($email, '@') !== false) {
        $result['check'] = 'success';
        $result['display'] = 'd-block';
        $result['result_text'] = "La mail contiene un punto e una chiocciola";
    } else {
        $result['check'] = 'danger';
        $result['display'] = 'd-block';
        $result['result_text'] = "La mail non contiene un punto e una chiocciola";
    }

    return $result;
}



//controllo se esiste la variabile email in GET
if (isset($_GET['email'])) {
    $_SESSION['type_email'] = $_GET['email'];
    $result = checkEmail($_SESSION['type_email']);

    $check = $result['check'];
    $display = $result['display'];
    $result_text = $result['result_text'];

    if ($check === 'success') {
        header('Location: ./thankyou.php');
    };
}
