<?php


namespace model;


class DBProduct
{
    public $connection ;
    public function __construct($connection)
    {
        $this->connection=$connection;
    }
    public function getList(){
        $sql = "SELECT * FROM `product`";
        $stmt = $this->connection->query($sql);
        $result = $stmt->fetchAll();
        return $result;
    }
    public function add($product){
        $sql ="INSERT INTO `product`(`name`, `type`, `price`, `number`, `date`, `content`) VALUES ('$product->name','$product->type','$product->price','$product->number',current_timestamp(),'$product->content')";
        $this->connection->exec($sql);
    }
    public function update($id,$product){
        $sql ="UPDATE `product` SET `name`='$product->name',`type`='$product->type',`price`='$product->price',`number`='$product->number',`date`=current_timestamp(),`content`='$product->content' WHERE id = $id";
        $this->connection->exec($sql);
    }
    public function delete($id){
        $sql="DELETE FROM `product` WHERE id=$id";
        $this->connection->exec($sql);
    }
    public function get($id){
        $sql = "SELECT * FROM `product` WHERE id =$id";
        $stmt = $this->connection->query($sql);
        return $stmt->fetch();

    }
}