<?php
  //error_reporting(E_ERROR);
  
    require_once '../php/inc/connection.php';
    include __DIR__ . '/../inc/autoloader1.php';
    //include __DIR__ . '/../inc/init.php';
  
  if(isset($_POST['send'])){
  $uname= check($_POST['unm']);
  $email= check($_POST['mailt']);
  $pw= check($_POST['passw']);
  $cpw= check($_POST['cpass']);
         
  if(empty($_POST['unm'])) { die('enter your username');}
  if(empty($_POST['mailt'])) { die('please enter your email');}
  if(empty($_POST['cpass'])) { die('please enter your email');}
  if($pw != $cpw){die ('password doesn\'t match');}
  
  $table= `wisdom1`;
  
  $hash= password_hash($pw, PASSWORD_DEFAULT);

try{
    
      
   //creating instance of class of SignUp
   $user = new SignUp($pdo, $table, $uname, $email, $hash);
   
   $give= $user->findUser($pdo, $table, $email);
          
   $think= $user->insertData($pdo, $table, $uname, $email, $hash); 
      
   $message= 'Signup Successful, proceed to login';

}
      catch(PDOException $e){
          $message='Registration fail '.
          $e->getMessage(). 'in' .
          $e->getFile(). 'in' .
          $e->getLine();
      }
  }
   
      include ('reg.php');
?>

