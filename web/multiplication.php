<?php

require_once 'form.php';

if (!$error) {
    $number1 = mt_rand(1, 9);
    $number2 = mt_rand(1, 9);
    $display = $number1 . " x " . $number2;
    $calcul = $number1 * $number2;
} else {
    $display = $_POST['display'];
    $calcul = $_POST['calcul'];
}

include 'index.php';

?>