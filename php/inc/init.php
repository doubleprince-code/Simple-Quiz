<?php

    function check($details){
        $details= trim($details);
        $details= stripslashes($details);
        $details= htmlspecialchars($details);
        $details= htmlentities($details);
        $details= strtolower($details);

        return $details;
    }


?>