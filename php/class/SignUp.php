
<?php

    class SignUp{
       
        private $pdo;
        private $table;
        private $uname;
        private $email;
        private $hash;
              
                
        function __constructor(PDO $pdo, string $table, string $uname, string $email, string $hash){
            
            $this->pdo = $pdo;
            $this->table = $table;
            $this->uname = $uname;
            $this->email = $email;
            $this->hash = $hash;
        }

        public function findUser($pdo, $table, $email){
                $sql = "SELECT COUNT(emailx) AS num FROM `wisdom1` WHERE emailx = :eml";
                $stmt = $pdo->prepare($sql);
                $stmt-> bindValue(':eml', $email);
                $stmt-> execute();
                $row = $stmt->fetch(PDO::FETCH_ASSOC);

                if($row['num'] > 0){
                    $mssg ="<p class='text-center text-primary font-weight-bold'>That email already exists!</p>";
                    die($mssg);
                }       
        }
        
        public function insertData($pdo, $table, $uname, $email, $hash){
                $sql = "INSERT INTO `wisdom1` (`usern`, `emailx`, `passw`) VALUES(:unn, :mail, :pw)";
                $stmt = $pdo->prepare($sql);
                $stmt-> bindValue(':unn', $uname);
                $stmt-> bindValue(':mail', $email);
                $stmt-> bindValue(':pw', $hash);
                $stmt-> execute(); 
                
                //return $stmt;
        }
        
        
        /*
        public function lastId($pdo, $table){
            $stmt=$pdo->lastInsertId();
            return $stmt; 
        }
        */
        
    }

?>