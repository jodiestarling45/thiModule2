<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    require 'model/DbConnect.php';
    require 'model/DBProduct.php';
    require 'model/product.php';
    include 'controller/ControllerProduct.php';
    $Controller =  new \controller\ControllerProduct();
    $page = isset($_REQUEST['page'])?$_REQUEST['page']:null;
    switch ($page){
        case 'add':$Controller->addView();break;
        case 'update':$Controller->update();break;
        case 'delete':$Controller->delete();break;
        default:$Controller->listView();break;
    }
?>
</body>
</html>