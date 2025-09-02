<?php

class Connect {

    private $hostname = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "myskibidi";

    public function connect(){
        return new mysqli($this->hostname, $this->username, $this->password, $this->database);
    }
}

?>