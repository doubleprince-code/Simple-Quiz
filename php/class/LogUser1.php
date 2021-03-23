
<?php
    
    class LogUser1{
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
  
      public function login($pdo, $table, $mlx, $pws){
              $sql = "SELECT * FROM `wisdom1` WHERE emailx = :emlx";
              $stmt = $pdo->prepare($sql);
              $stmt->bindValue(':emlx', $mlx); 
              $stmt->execute();
              $useruser = $stmt->fetch(PDO::FETCH_ASSOC);
              
              $stored_password1= $useruser['passw'];
              //var_dump($stored_password1);
  
              $stored_emailx= $useruser['emailx'];
              //var_dump($stored_emailx);
              
                                 
              if($useruser === false){
                  //$message = "<p class='inc'>" 'Incorrect username / password combination!' "</p>";
                  $message = "<p class='inc'>Incorrect username / password combination!</p>";
                  die($message);
                 } else{                          
                  $validPassword= password_verify($pws, $stored_password1);
                               
                    if($validPassword){
                    
                        $_SESSION['make'] = $mlx;
                      
                     } else{
                      //$message = "<p class='inv'>" 'invalid login!' "</p>";
                      $message = "<p class='inv'>Invalid Login!</p>";
                    die($message);
                  }      
              }
            }
  
            public function logout($pdo, $table, $mlx, $pws){
                $_SESSION['make'] = FALSE;
                session_unset();
                session_destroy();
                header('location: ../../html/login.php');
                //return;
            }
      
    }

     /*public function checkLogger($pdo, $table, $mlx, $pws){
            $sql = "SELECT * FROM `wisdom1` WHERE emailx = :emlx";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(':emlx', $mlx); 
            $stmt->execute();
            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            $stored_password1z= $row['passw'];
            
            $stored_emailx= $row['emailx'];

            if($row === false){
            
                $message = 1;
                echo $message;

            }else if($message == 1) {
               
                $validPassword= password_verify($pws, $stored_password1z);
                $_SESSION['idm'] = $mlx;

                $message= 2;
                echo $message;
            }else{
                
                $message= 3;
                echo $message;
            }
          
        }
  
        public function logUser($pdo, $table, $mlx, $pws){
            $sql = "SELECT * FROM `wisdom1` WHERE emailx = :emlx";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(':emlx', $mlx); 
              
            if($stmt->execute()){
              $useruser = $stmt->fetch(PDO::FETCH_ASSOC);
                
             
                if($useruser === false){
                    /*$status= json_encode([
                        'success' =>'success',
                        'message' => '<p class="alert alert-success">Authentication successful!</p>',
                        'url' => 'appoint.html.php',
                    ]);   
                    
                    die ($status);
                  

                    $message = 2;
                    echo $message;

                    }else{
                        $message = 3;
                        echo $message;
                    } 
           }else{ 
                  
                $message = 4;
                echo $message;
               } 
            } */
  
?>



<style>

    .inc{
        color: blue;
        font-weight: bold;
        width: 80%;
        margin: auto;
        text-align: center;
    }

    .inv{
        color: blue;
        font-weight: bold;
        width: 80%;
        margin: auto;
        text-align: center;
    }

</style>


  