<?php
    class Database{
        private $dbhost = 'localhost';
        private $dbname = 'crudajax';
        private $dbusername = 'root';
        private $dbpassword = '';
        private $dbconn;


        public function connection(){
            $this->dbconn = null;
            try{
                $this->dbconn = new PDO('mysql:host=' . $this->dbhost, ';dbname=' . $this->dbname
                , $this->dbusername, $this->dbpassword);
                $this->dbconn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }catch(PDOException $e){
                echo 'Connection error: ' . $e->getMessage();
            }

            return $this->dbconn;
        }

    }
?>