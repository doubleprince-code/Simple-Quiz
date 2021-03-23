<?php
    require_once '../inc/connection.php';
    require_once '../inc/autoloader2.php';
    
    if($_POST)
    {
      $mailk= check($_POST['mail_ex']);
      $timmer= time() + 80;
  
   if(empty($_POST['mail_ex'])){die('email field is empty');}
   
  try
  { 
         
    $table= 'quiz_start';

    $proc= new CheckIn($pdo, $table, $mailk, $timmer);

    $proc->proofUser($pdo, $table, $mailk);

    $proc->startQuizz($pdo, $table, $mailk, $timmer);
    
  }        
    catch(PDOException $e){
       echo $e->getMessage();
   }
  }
 
?>
