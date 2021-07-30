<?php
    session_start();
    include_once '../config/Database.php';

    class User{
        
        private $dbconn;

        public function __construct(){
            $database = Database();
            $this->dbconn = $database->connection();
        }

        public function runQuery($query){
            $stmt = $this->dbconn->prepare($query);
            return $stmt;
        }

        public function regiserUser($firstname, $lastname, $username, $password){
            //Encrypt password
            $encrypt_password = password_hash($password, PASSWORD_DEFAULT);
            
            if($this->verifyUsername($username)){
                $query = 'INSERT INTO user (firstname, lastname, username, password) VALUES (?,?,?,?)';
                $stmt = $this->dbconn->prepare($query);
                if($stmt->execute(array($firstname, $lastname, $username, $encrypt_password))){
                    return true;
                }
            }

            return false;
        }


        public function verifyUser($username){
            $query = 'SELECT * FROM user WHERE username = ?';
            $stmt = $this->dbconn->prepare($query);
            $stmt->execute(array($username));
            if($stmt->rowCount() > 0){
                return false;
            }
            return true;
        }


        public function login($username, $password){
            $query = 'SELECT * user WHERE username = ?';
            $stmt = $this->dbconn->prepare($query);
            $smt->execute(array($username));
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            if($stmt->rowCount() > 0){
                if(password_verify($password, $result['password'])){
                    $_SESSION['userid'] = $result['id'];
                    return true; 
                }
            }
            return false;
        }
    };








?>