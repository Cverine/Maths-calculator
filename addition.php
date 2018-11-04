<?php

include 'form.php';

if (!$error && !empty($_GET)) {
    $number1 = mt_rand(1, 99);
    $number2 = mt_rand(1, 99);
    $display = $number1 . " + " . $number2;
    $calcul = $number1 + $number2;

} elseif (!$error) {
    $number1 = mt_rand(1, 9);
    $number2 = mt_rand(1, 9);
    $display = $number1 . " + " . $number2;
    $calcul = $number1 + $number2;
} else {
    $display = $_POST['display'];
    $calcul = $_POST['calcul'];
}

include 'index.php';

?>