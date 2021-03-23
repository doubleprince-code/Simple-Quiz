<?php
//error_reporting(E_ERROR);
        
    require_once '../php/inc/connection.php';
    include __DIR__ . '/../inc/autoloader1.php';
    
     
    if(check(isset($_POST['see']))){
        $an1= check($_POST['opt1']);
        $an2= check($_POST['opt2']);
        $an3= check($_POST['opt3']);
        $an4= check($_POST['opt4']);
        $an5= check($_POST['opt5']);
        $an6= check($_POST['opt6']);
        $an7= check($_POST['opt7']);
        $an8= check($_POST['opt8']);
        $an9= check($_POST['opt9']);
        $an10= check($_POST['opt10']);
        $eemlly= check($_POST['eemlly']);

        if($an1 == $ans1 ){ $rc1 = '1';}else{$rc1 = '0';}
        if($an2 == $ans2 ){ $rc2 = '1';}else{$rc2 = '0';} 
        if($an3 == $ans3 ){ $rc3 = '1';}else{$rc3 = '0';} 
        if($an4 == $ans4 ){ $rc4 = '1';}else{$rc4 = '0';} 
        if($an5 == $ans5 ){ $rc5 = '1';}else{$rc5 = '0';}
        if($an6 == $ans6 ){ $rc6 = '1';}else{$rc6 = '0';}
        if($an7 == $ans7 ){ $rc7 = '1';}else{$rc7 = '0';} 
        if($an8 == $ans8 ){ $rc8 = '1';}else{$rc8 = '0';} 
        if($an9 == $ans9 ){ $rc9 = '1';}else{$rc9 = '0';} 
        if($an10 == $anst10 ){ $rc10 = '1';}else{$rc10 = '0';}

        $sum_all= $rc1 + $rc2 + $rc3 + $rc4 + $rc5 + $rc6 + $rc7 + $rc8 + $rc9 + $rc10;

        $result_xyz= '<p class="text-center text-primary"> hi you got ' .$uname. 'your quiz are submitted and ' . $sum_all . ' points </p>';
        
        header('location: dashboard');

        //$now == $_SESSION['expire'];

       // "<br>";

        $guru= 'quiz';

        $id_x= uniqid($guru, false) ?? "";

        if($an1 && $an2 && $an3 && $an4 && $an5 && $an6 && $an7 && $an8 && $an9 && $an10){

try{

    $table= 'regs';

    //instance of class
    $quizy = new SendQuiz($pdo, $table, $eemlly, $id_x, $sum_all, $an1, $an2, $an3, $an4, $an5, $an6, $an7, $an8, $an9, $an10);
                 
    $quizy->insertQuiz($pdo, $table, $eemlly, $id_x, $sum_all, $an1, $an2, $an3, $an4, $an5, $an6, $an7, $an8, $an9, $an10);
     
}
      catch(PDOException $e){
          $message='submission issue details '.
          $e->getMessage(). 'in' .
          $e->getFile(). 'in' .
          $e->getLine();
      }
    }
}
        include ('book.php');

?>

