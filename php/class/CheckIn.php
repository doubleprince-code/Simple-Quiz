
<?php

class CheckIn{
   
    private $pdo;
    private $table;
    private $mailk;
    private $timmer;
                          
    function __constructor(PDO $pdo, string $table, string $mailk, string $timmer){
        
        $this->pdo = $pdo;
        $this->table = $table;
        $this->mailk = $mailk;
        $this->$timmer = $timmer;
    }

    public function proofUser($pdo, $table, $mailk){
        $sql = "SELECT COUNT(mailyxx) AS num FROM `quiz_start` WHERE mailyxx = :eml";
        $stmt = $pdo->prepare($sql);
        $stmt-> bindValue(':eml', $mailk);
        $stmt-> execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if($row['num'] > 0){
          
          $status= json_encode([
            'error' => 'error', 
            'message' => '<p class="alert alert-danger">Only One Attempt is Allowed!</p>'
          ]);
          
          die ($status);
          
          return $status;
        }  
    }
    
    public function startQuizz($pdo, $table, $mailk, $timmer){
        $sql = "INSERT INTO `quiz_start` (`mailyxx`, `timmer`) VALUES(:mail, :tim)";
          
        $stmt = $pdo->prepare($sql);
        $stmt-> bindValue(':mail', $mailk);
        $stmt-> bindValue(':tim', $timmer);
        
        if($stmt->execute()){
          
          $status= json_encode([
            'success' =>'success',
            'message' => '<p class="alert alert-success">Authentication successful!</p>',
            'url' => 'appoint'
          ]);   
         
          die ($status);

          return $status;
         
        }else{ 
            
                $status= json_encode([
                'error' => 'error', 
                'message' => '<p class="alert alert-danger">One Attempt Needed!</p>'
                ]);
                
                die ($status);

            return $status;
        } 
    }           
}

?>