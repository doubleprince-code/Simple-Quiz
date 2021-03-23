<?php


class Logout{

    private $pdo;
    private $table;
    private $username;
    private $eml;
    private $hash;
    private $userx;
    private $slp;
     
function __constructor(PDO $pdo, string $table, string $username, string $eml, string $hash, string $userx, string $slp){
    $this->pdo = $pdo;
    $this->table = $table;
    $this->username = $username;
    $this->eml = $eml;
    $this->hash = $hash;
    $this->userx = $userx;
    $this->slp = $slp;      
 }


 public function logout(){
    session_destroy();
    unset($_SESSION['sess']);
    ('location: ../loginKontrol2');
    return true;
}

}
  
?>