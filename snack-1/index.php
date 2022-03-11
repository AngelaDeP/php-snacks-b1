<?php

$name = $_GET['name'];
$age = $_GET['age'];
$email = $_GET['email'];

if (empty($_GET['name']) || empty($_GET['age']) || empty($_GET['email'])) {

    echo 'Accesso non riuscito! Inserisci i tuoi parametri!';

} elseif (strlen($_GET['name']) <= 3) {

    echo 'Accesso non riuscito, il nome deve essere più lungo di tre caratteri!';

} elseif (!is_numeric($_GET['age'])) {

    echo 'Accesso non consentito, inserisci numericamente la tua età!';

} elseif (strpos($_GET['email'], '@') === false || strpos($_GET['email'], '.') === false) {

    echo 'Formulazione non corretta, inserisci una email valida!';

} else {

    echo 'Accesso consentito!';

}

?>