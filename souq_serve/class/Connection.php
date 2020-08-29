<?php
    class Connection
    {
        private $connection;
    
        public function __construct($host, $dbname, $user, $pass)
        {
            $this->connection = new PDO("mysql:host=".$host.";dbname=".$dbname,$user,$pass);
        }

        public function getConnection()
        {
            return $this->connection;
        }
    }