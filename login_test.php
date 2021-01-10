<?php
/*
if(isset($_POST['username']) & isset($_POST['password'])){
    require_once 'grand_functions.php';

    $newT = new GrandPa();

    $username = $_POST['username'];
    $password = $_POST['password'];

    echo $newT->handleLogin($username, $password);
}*/


require_once 'grand_functions.php';

$newT = new GrandPa();

//echo $newT->getToken();

$ret = $newT->getTableValue();

$h2 = array();

while($row = $ret->fetch_assoc()){
    $h['id'] = $row['id'];
    $h['address'] = $row['trx_address'];
    $h['amount'] = $row['trx_amount'];
    $h['login_token'] = $row['login_token'];
    array_push($h2, $h);
}
echo json_encode($h2);
//exec('exit');
//exit;


//echo json_encode($h);

//print_r($newT->getTableValue());