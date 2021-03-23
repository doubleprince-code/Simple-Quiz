<?php

    $host = "mysql2000.my-virtual-panel.com";
    $usern= "respite_project";
    $password= "project12345";
    $dbname= "respite_healthcare";

    $conn1= mysqli_connect("mysql2000.my-virtual-panel.com", "respite_project", "project12345", "respite_healthcare");
    
    function check($details){
        $details= trim($details);
        $details= stripslashes($details);
        $details= htmlspecialchars($details);
        $details= htmlentities($details);
        $details= strtolower($details);

        return $details;
    }
    

?>


