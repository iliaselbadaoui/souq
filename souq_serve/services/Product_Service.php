<?php

include_once "../root.php";
include_once  root."/controllers/Product_controller.php";
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token');
if($_SERVER["REQUEST_METHOD"]=="POST"){
    extract($_POST);
    $PC = new Product_controller();
    $headers = getallheaders();
    if($op=="GetAll") {
        echo json_encode($PC->get_all());
        return 0;
    }
    echo $headers;
}
echo "NOT SUPPOSED TO BE HERE";