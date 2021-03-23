<?php

 require_once '../php/inc/connection.php';

 if($_POST)
 {
   $mailk= $_POST['mail_ex'];
   $timmer= time() + 70;
  
   if(empty($_POST['mail_ex'])){die('email field is empty');}
   
  try
  { 
         
    $sql = "SELECT COUNT(mailyxx) AS num FROM `quiz_start` WHERE mailyxx = :eml";
        $stmt = $pdo->prepare($sql);
        $stmt-> bindValue(':eml', $mailk);
        $stmt-> execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if($row['num'] > 0){
          //return 'only one attempt is allowed';
          $status1 = 'only one attempt is allowed';
          
          if($status1){
            echo json_encode([
              'error' => 'error', 
              'message' => '<p class="alert alert-danger">1 attempt needed!</p>',
            ]);
          }
        }else{
         
        $sql = "INSERT INTO `quiz_start` (`mailyxx`, `timmer`) VALUES(:mail, :tim)";
          
          $stmt = $pdo->prepare($sql);
          $stmt-> bindValue(':mail', $mailk);
          $stmt-> bindValue(':tim', $timmer);
          
          if($stmt->execute()){
            $status2 = 'success';

            if($status2){
              echo json_encode([
                   'success' =>'success',
                   'message' => '<p class="alert alert-success">Submission successful!</p>',
                   'url' => 'appoint.html.php',
              ]);
            
        }else{
          $status = 'error';
        }
      }
    }
  }
        
  catch(PDOException $e){
       echo $e->getMessage();
  }
}

?>
