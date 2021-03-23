
<?php
    class LogUser2{
      private $pdo;
      private $table;
      private $mlx;
      private $pws;
      
      public function __construct(PDO $pdo, string $table, string $mlx, string $pws){
          $this->pdo = $pdo;
          $this->table = $table;
          $this->mlx = $mlx;
          $this->pw = $pws;
       }

       public function userLogin($pdo, $table, $mlx, $pws){
        $sql = "SELECT * FROM wisdom1 WHERE emailx = :emlx";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':emlx', $mlx); 
        $stmt->execute();
        $useruser = $stmt->fetch(PDO::FETCH_ASSOC);
        
        $stored_password1= $useruser['passw'];
            
        $stored_emailx= $useruser['emailx'];
                                             
        if($useruser === false){
          $message = 1;
          echo $message;
                    
          }else{                          
            $validPassword= password_verify($pws, $stored_password1);
                         
              if($validPassword){
                $_SESSION['sess'] = $mlx;
                
                $message= 2;
                echo $message;
    
               } else{
                
                $message= 3;
                echo $message;
              }
             }                 
            }

            public function logout($pdo, $table, $mlx, $pws){
                $_SESSION['sess'] = FALSE;
                session_unset();
                session_destroy();
                
                return true;
            }         
    }
  
?>



  


