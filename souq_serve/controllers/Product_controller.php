<?php

include_once "../root.php";
include_once root."/class/Product.php";
include_once root."/interface/methodes.php";
include_once root."/class/Connection.php";
class Product_controller implements methodes
{

    private $connection;

    /**
     * Product_controller constructor.
     * @param $connection
     */
    public function __construct()
    {
        $this->connection = new Connection(hostName.";port=".hostPort, "souq", "root", "root");
    }


    function update($obj)
    {
        $query = "UPDATE product SET name=?,price=?,ref=?,description=?,photo=?,quantity=? where id=?";
        $req = $this->connection->getConnection()->prepare($query);
        $req->execute(array($obj->getName(), $obj->getPrice(), $obj->getReference(), $obj->getDescription(), $obj->getPhoto(), $obj->getQuantity(), $obj->getId())) or die("Error");
    }

    function remove($id)
    {
        $query = "DELETE FROM product WHERE id=?";
        $req = $this->connection->getConnection()->prepare($query);
        $req->execute(array($id)) or die("Error");
    }

    function add($obj)
    {
        $query = "Insert into product values(NULL,?,?,?,?,?,?)";
        $req = $this->connection->getConnection()->prepare($query);
        $req->execute(array($obj->getName(), $obj->getPrice(), $obj->getReference(), $obj->getDescription(), $obj->getPhoto(), $obj->getQuantity())) or die("Error");
    }

    function get_all()
    {
        $query = "SELECT * FROM product";
        $req = $this->connection->getConnection()->query($query);
        $res = $req->fetchAll(PDO::FETCH_ASSOC);
        return ($res);
    }

    function get_by_id($id)
    {
        $query = "SELECT * FROM product where id=".$id;
        $req = $this->connection->getConnection()->query($query);
        $res = $req->fetch(PDO::FETCH_ASSOC);
        return ($res);
    }
}