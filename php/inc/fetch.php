

<?php
                // fetching reg table
                $sql= ("SELECT * FROM  `wisdom1` WHERE `emailx` = :info");    
                $stmt=$pdo->prepare($sql);
                $stmt->bindValue(':info', $info);
                $stmt->execute();

                while($data= $stmt->fetch(PDO::FETCH_ASSOC)){
                    $emx= $data['emailx'];
                    $uname= $data['usern'];
                }

                // fetching quiz table
                $sql= ("SELECT * FROM  `regs` WHERE `emailr` = :inff");    
                $stmt=$pdo->prepare($sql);
                $stmt->bindValue(':inff', $info);
                $stmt->execute();

                while($points= $stmt->fetch(PDO::FETCH_ASSOC)){
                    $ptss= $points['points'];
                    //$uname= $data['usern'];
                }

                // fetching quiz table
                $sql= ("SELECT * FROM  `quiz_start` WHERE `mailyxx` = :inffy");    
                $stmt=$pdo->prepare($sql);
                $stmt->bindValue(':inffy', $info);
                $stmt->execute();

                while($train= $stmt->fetch(PDO::FETCH_ASSOC)){
                    $timmmy= $train['timmer'];
                    //$uname= $data['usern'];
                }

                
?>