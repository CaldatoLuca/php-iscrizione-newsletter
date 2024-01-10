<?php

session_start();



if (!isset($_SESSION['type_email'])) {
    $_SESSION['type_email'] = $_GET['email'];
}
