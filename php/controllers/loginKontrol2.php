<?php

    session_start();
      error_reporting(E_ERROR);

    require_once '../inc/connection.php';
    require_once '../inc/autoloader2.php';
     
    if($_POST){
            $mlx= check($_POST['maily']);
            $pws= check($_POST['pwst']);
                 
        try{

            $table= 'wisdom1';

            $checkin = new LogUser2($pdo, $table, $mlx, $pws);
             
            $checkin->userLogin($pdo, $table, $mlx, $pws);

        }catch(PDOException $e){
                $message='login issue details '.
                $e->getMessage(). 'in' .
                $e->getFile(). 'in' .
                $e->getLine();
        }
    }

?>

