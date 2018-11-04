<?php

session_start();

if (isset($_POST['result'])) {

    if (false === filter_var($_POST['result'], FILTER_VALIDATE_INT) || empty($_POST['result'])) {
        $error = "Attention tu dois écrire un chiffre";
    } elseif ($_POST['result'] === $_POST['calcul']) {
        $message = "BRAVO, " . $_POST['result'] . " est le bon résultat !!";
        $win = true;
        $_SESSION['list'][] = [$_POST['display'] => $win];
    } else {
        $message = "Dommage, " . $_POST['result'] . " n'est pas le bon résultat";
        $win = false;
        $_SESSION['fail'][] = [$_POST['display'] => $win];
    }
}

if (isset($_POST['session'])) {
    unset($_SESSION['list'], $_SESSION['fail']);
}

?>
