
<?php

    $host = "localhost";
    $dbname= "exams";
    $usern= "root";
    $password= "";

    try{
    $pdo= new PDO('mysql:host=localhost;dbname=exams; charset=utf8', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
        function check($details){
            $details= trim($details);
            $details= stripslashes($details);
            $details= htmlspecialchars($details);
            $details= htmlentities($details);
            $details= strtolower($details);

            return $details;
        }

    }

    catch(PDOException $e){
        $e->getMessage(). 'in' .
        $e->getFile(). 'in' .
        $e->getLine();
    }

?>

