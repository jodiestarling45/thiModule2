<?php
namespace controller ;
use model\DbConnect;
use model\DBProduct;
use model\product;

class ControllerProduct
{
    public $DBProduct;
    public function __construct()
    {
        $connection = new DbConnect("mysql:host=localhost;dbname=casestudy",'admin','123456');
        $this->DBProduct=new DBProduct($connection->connection());
    }
    public function listView(){
        $productNumber = $this->DBProduct->getList();
        include 'view/list.php';
    }
    public function addView(){
        if ($_SERVER["REQUEST_METHOD"]=="POST"){
            $product = new product($_POST['name'],$_POST['type'],$_POST['price'],$_POST['number'],$_POST['date'],$_POST['content']);
            $this->DBProduct->add($product);
            header('location: index.php?page=');
        }
        include 'view/add.php';
    }
    public function update(){
        if ($_SERVER["REQUEST_METHOD"]=="POST"){
            $id=$_REQUEST['id'];
            $productValue = $this->DBProduct->get($id);
            $product = new product($_POST['name'],$_POST['type'],$_POST['price'],$_POST['number'],$_POST['date'],$_POST['content']);
            $this->DBProduct->update($id,$product);
            header('location: index.php?page=');
        }
        include "view/update.php";
    }
    public function delete(){
        $id=$_REQUEST['id'];
        $this->DBProduct->delete($id);
        header('location: index.php?page=');
    }
}