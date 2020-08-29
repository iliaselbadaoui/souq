<?php

include_once "../root.php";
include_once root."/class/Client.php";
include_once root."/interface/methodes.php";
include_once root."/class/Connection.php";

class Client_Controller implements methodes
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
        // TODO: Implement update() method.
    }

    function remove($id)
    {
        // TODO: Implement remove() method.
    }

    function add($obj)
    {
        $query = "Insert into client values(NULL,?,?,?,?,?,?)";
        $req = $this->connection->getConnection()->prepare($query);
        $req->execute(array($obj->getName(), $obj->getLast(), $obj->getEmail(), $obj->getPass(), $obj->getAdress(), $obj->getCity(), $obj->getBirth())) or die("Error");
    }

    function get_all()
    {
        $str = $this->connection->getConnection()->prepare("SELECT * FROM CLIENT");
        $res = $this->connection->getConnection()->exec($str);
        return ($res);
    }

    function get_by_id($id)
    {
        $query = "SELECT * FROM client where id='".$id."'";
        $req = $this->connection->getConnection()->query($query);
        $res = $req->fetch(PDO::FETCH_ASSOC);
        return ($res);
    }
    function checkUser($email, $pass)
    {
        $query = "SELECT * FROM client where email='".$email."' and pass='".$pass."'";
        $req = $this->connection->getConnection()->query($query);
        $res = $req->fetch(PDO::FETCH_ASSOC);
        return ($res);
    }
}