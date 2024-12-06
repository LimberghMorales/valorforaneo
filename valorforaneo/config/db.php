<?php
    class connect{
        private $host="localhost";
        private $dbName="llaves";
        private $user="root";
        private $password="";
        public function PDO(){
            try{
                $PDO = new PDO("mysql:host=".$this->host.";dbname=".$this->dbName,$this->user,$this->password);
                return $PDO;
            }catch(PDOException $error){
                return $error->getMessage();
            }
        }
    }
?>