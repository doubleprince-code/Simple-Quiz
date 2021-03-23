<?php
    error_reporting(E_ERROR);
    session_start();
        
    require_once '../php/inc/connection.php';
    include __DIR__ . '/../inc/autoloader1.php';
     
       if(isset($_POST['send'])){
        $mlx= check($_POST['maily']);
        $pws= check($_POST['pwst']);
        	   
		//check if empty form submitted
        if(empty($_POST['maily'])) { die('enter your email');}
        if(empty($_POST['pwst'])) { die('please enter your password');}

try{

    $table= 'wisdom1';

    //instance of class
    $user1 = new LogUser1($pdo, $table, $mlx, $pws);
                 
    $send= $user1->login($pdo, $table, $mlx, $pws); 
       
    header('location: dashboard.html.php');
    
}
      catch(PDOException $e){
          $message='login issue details '.
          $e->getMessage(). 'in' .
          $e->getFile(). 'in' .
          $e->getLine();
      }
    }
//}
        include ('log.html.php');

?>

