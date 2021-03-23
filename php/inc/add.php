
<?php   
                        
                                        
                        // selecting from first table 
                        $sql = ("SELECT * FROM `homeland` WHERE uname = :lp");
                            $stmt = $pdo->prepare($sql);
                            $stmt->bindValue(':lp', $lp); 
                            $stmt->execute();
                        
                            while($data = $stmt->fetch(PDO::FETCH_ASSOC)){
                            $uss_id= $data['id'];
                            $name_x= $data['uname'];
                            $mail= $data['emailx'];
                            $pass_x= $data['password_x'];
                        }

                        //second table
                    $sql= ("SELECT * FROM  `home_pics` WHERE usn = :lp" );
                        $stmt=$pdo->prepare($sql);
                        $stmt->bindValue(':lp', $lp); 
                        $stmt->execute();

                        while($result= $stmt->fetch(PDO::FETCH_BOTH)){
                        $uid= $result['id'];
                        $ussn= $result['usn'];
                        //$sttt= $result['state_c'];
                        //$tyy= $result['city_c'];
                        //$addrr= $result['address_c'];
                        //$o_tpp= $result['offer_c'];
                        //$ltpp= $result['listing_c'];
                        //$mobilex= $result['mobile_c'];
                        $pics= $result['pics'];
                    }

             

?>

