<?php 
    session_start();
    error_reporting(E_ERROR);

    require_once '../inc/connection.php';
    include __DIR__ . '/../inc/autoloader.php';
 
    $mlx= check($_POST['maily']);
    $pws= check($_POST['pwst']);

    $table= 'wisdom1';

    $user1 = new LogUser2($pdo, $table, $mlx, $pws);
    
    $user1->logout($pdo, $table, $mlx, $pws); 
        
    echo "<script>window.location='../../index'</script>";

?>