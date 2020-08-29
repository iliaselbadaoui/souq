<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token');
if(!isset($_SESSION['userToken']))
{
    session_start();
    $_SESSION['userAccessToken'] = "0x00";
}
echo $_SESSION['userAccessToken'];
