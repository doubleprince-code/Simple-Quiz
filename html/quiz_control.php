<?php
    error_reporting(E_ERROR);
    require_once 'includes/db.connection.php';

     if($_POST)
     {
            $mailk= $_POST['mail_ex'];
            
            try
            { 
                
                $sql = "SELECT COUNT(mailyxx) AS num FROM `quiz_start` WHERE mailyxx = :eml";
                    $stmt = $pdo->prepare($sql);
                    $stmt-> bindValue(':eml', $mailk);
                    $stmt-> execute();
                    $row = $stmt->fetch(PDO::FETCH_ASSOC);

                    if($row['num'] > 0){
                        $message= '<p class="text-primary text-center">Only one attempt is allowed!</p>';
                        die($message);
                    }       

                    $sql = "INSERT INTO `quiz_start` (`mailyxx`) VALUES(:mail)";
                        $resulty= 0;
                    $stmt = $pdo->prepare($sql);
                    $stmt-> bindValue(':mail', $mailk);
                    $stmt-> execute(); 
                                
                        if($stmt){
                        $result = 1;
                                
                        //logged in time
                        $_SESSION['start'] = time();

                        //checking time when home page start           
                        $now = $_SERVER['REQUEST_TIME'];

                        //setting session in seconds, if in minute, multiply d minutes with 60s
                        $_SESSION['expire'] = $_SESSION['start'] + (70);
                                    
                        echo "<script>window.location='appoint.html.php'</script>";
                        }else{
                            echo "<p>submission error</p>";
                        }
                    
            }
             catch(PDOException $e){
              echo $e->getMessage();
            }
         }
         
         //else{
           //echo "2";
    //}
  

?>



               

