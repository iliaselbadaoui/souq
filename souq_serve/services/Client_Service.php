<?php
include_once '../root.php';
include_once root.'/class/Client.php';
include_once root.'/controllers/Client_Controller.php';
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    extract($_POST);
    $CS = new Client_Controller();
    if($op == 'login')
    {
        $res = $CS->checkUser($email, $pass);
        $_SESSION['userAccessToken'] = md5($res->email);
        echo json_encode($res);
    }
}