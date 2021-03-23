<?php
 
        // fetching table
        $sql= "SELECT * FROM  `ques` WHERE id = 1";
        $stmt=$pdo->prepare($sql);
        $stmt->execute();

        while($datac= $stmt->fetch(PDO::FETCH_ASSOC)){
            $id1= $datac['id'];
            $q1= $datac['q1'];
            $opa1= $datac['opa'];
            $opb1= $datac['opb'];
            $opc1= $datac['opc'];
            $opd1= $datac['opd'];
            $ans1= $datac['ans'];
        }

         $sql= "SELECT * FROM  `ques` WHERE id = 2";
         $stmt=$pdo->prepare($sql);
         $stmt->execute();
 
         while($datal= $stmt->fetch(PDO::FETCH_ASSOC)){
             $id2= $datal['id'];
             $q2= $datal['q1'];
             $opa2= $datal['opa'];
             $opb2= $datal['opb'];
             $opc2= $datal['opc'];
             $opd2= $datal['opd'];
             $ans2= $datal['ans'];
         }

         $sql= "SELECT * FROM  `ques` WHERE id = 3";
         $stmt=$pdo->prepare($sql);
         $stmt->execute();
 
         while($datay= $stmt->fetch(PDO::FETCH_ASSOC)){
             $id3= $datay['id'];
             $q3= $datay['q1'];
             $opa3= $datay['opa'];
             $opb3= $datay['opb'];
             $opc3= $datay['opc'];
             $opd3= $datay['opd'];
             $ans3= $datay['ans'];
         }

         $sql= "SELECT * FROM  `ques` WHERE id = 4";
         $stmt=$pdo->prepare($sql);
         $stmt->execute();
 
         while($dataz= $stmt->fetch(PDO::FETCH_ASSOC)){
             $id4= $dataz['id'];
             $q4= $dataz['q1'];
             $opa4= $dataz['opa'];
             $opb4= $dataz['opb'];
             $opc4= $dataz['opc'];
             $opd4= $dataz['opd'];
             $ans4= $dataz['ans'];
         }

         $sql= "SELECT * FROM  `ques` WHERE id = 5";
         $stmt=$pdo->prepare($sql);
         $stmt->execute();
 
         while($datat= $stmt->fetch(PDO::FETCH_ASSOC)){
             $id5= $datat['id'];
             $q5= $datat['q1'];
             $opa5= $datat['opa'];
             $opb5= $datat['opb'];
             $opc5= $datat['opc'];
             $opd5= $datat['opd'];
             $ans5= $datat['ans'];
         }

         $sql= "SELECT * FROM  `ques` WHERE id = 6";
         $stmt=$pdo->prepare($sql);
         $stmt->execute();
 
         while($datap= $stmt->fetch(PDO::FETCH_ASSOC)){
             $id6= $datap['id'];
             $q6= $datap['q1'];
             $opa6= $datap['opa'];
             $opb6= $datap['opb'];
             $opc6= $datap['opc'];
             $opd6= $datap['opd'];
             $ans6= $datap['ans'];
         }

         $sql= "SELECT * FROM  `ques` WHERE id = 7";
         $stmt=$pdo->prepare($sql);
         $stmt->execute();
 
         while($datav= $stmt->fetch(PDO::FETCH_ASSOC)){
             $id7= $datav['id'];
             $q7= $datav['q1'];
             $opa7= $datav['opa'];
             $opb7= $datav['opb'];
             $opc7= $datav['opc'];
             $opd7= $datav['opd'];
             $ans7= $datav['ans'];
         }

         $sql= "SELECT * FROM  `ques` WHERE id = 8";
         $stmt=$pdo->prepare($sql);
         $stmt->execute();
 
         while($datak= $stmt->fetch(PDO::FETCH_ASSOC)){
             $id8= $datak['id'];
             $q8= $datak['q1'];
             $opa8= $datak['opa'];
             $opb8= $datak['opb'];
             $opc8= $datak['opc'];
             $opd8= $datak['opd'];
             $ans8= $datak['ans'];
         }

         $sql= "SELECT * FROM  `ques` WHERE id = 9";
         $stmt=$pdo->prepare($sql);
         $stmt->execute();
 
         while($datan= $stmt->fetch(PDO::FETCH_ASSOC)){
             $id9= $datan['id'];
             $q9= $datan['q1'];
             $opa9= $datan['opa'];
             $opb9= $datan['opb'];
             $opc9= $datan['opc'];
             $opd9= $datan['opd'];
             $ans9= $datan['ans'];
         }

         $sql= "SELECT * FROM  `ques` WHERE id = 10";
         $stmt=$pdo->prepare($sql);
         $stmt->execute();
 
         while($datam= $stmt->fetch(PDO::FETCH_ASSOC)){
             $id10= $datam['id'];
             $q10= $datam['q1'];
             $opa10= $datam['opa'];
             $opb10= $datam['opb'];
             $opc10= $datam['opc'];
             $opd10= $datam['opd'];
             $anst10= $datam['ans'];
         }
        

?>

