<?php
      session_start();
      error_reporting(E_ERROR);
      
      require_once '../php/inc/connection.php';
      include __DIR__ . '/../php/inc/autoloader1.php';
      include __DIR__ . '/../php/inc/fetch2.php';
            
      $info = $_SESSION['sess'];

    //setting conditions           
    if(!isset($_SESSION['sess'])){
      echo "Please Login again";
      echo "<a href='../php/controllers/logout.php'>Click Here to Login</a>";
    }else{
        
      include __DIR__ . '/../php/inc/fetch.php';
        
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
            
        <title>ONLINE QUIZ</title>
        <link rel="stylesheet" href="../bootstrap/bootstrap.min.css"> 
        <link rel="stylesheet" href="../font-awesome(4.7.0)/css/font-awesome.min.css">
        <link rel="stylesheet" href="../animate/animate.css">
        <link rel="stylesheet" href="../font-awesome(4.7.0)/css/style1.css">

    </head>

    <body class="boodi" id="boodi">           

        <div class="nav_a" id="nav_a">
           <div class="nav_1a" id="nav_1a">
                        <div class="" id="flexx1">                    
                            <div class="timming_1" id="flexx2">
                                    <script>
                                        //display clock
                                        let myVar = setInterval(myTimer, 1000);

                                        function myTimer() {
                                            let d = new Date();
                                            document.getElementById("tymmy2").innerHTML = d.toLocaleTimeString();
                                        }

                                    </script>
                                <p id="tymmy1"><span id="tymmy2"></span></p>
                            </div>

                            <div id="flexx3">
                                <div class="img_ic" id="navx" onclick="goAway()"><img src="../img1/bar.PNG" alt="whats"></div>
                                <div class="mainx" id="mainNav">
                                    <div><a href="" class="text font-weight-bold" name="">Books</a></div>
                                    <div><a href="" class="text font-weight-bold" name="">Transactions</a></div>
                                    <div class="logout_x"><h5 class="font-weight-bold"><a href="../php/controllers/logout.php">Logout</a></div>
                               </div>
                            </div>
                    </div>
                </div>                        
                
                <div class="picx">
                    <div class="picx1">
                    </div>
                    <center>
                      <div class="picx2" id="picx2">
                        <h3 class="pt-4"><span class="text-primary font-weight-bold">Hello! </span><?php echo $uname?></h3>
                      </div>
                    </center>
                </div>
            <div>
        </div>
      
        <div class="" id="exam_1">
                <div class=""  id="starter4">
                    <div class="starter4x">
                        <h3 class="text-primary text-center font-weight-bold mt-2">Note:-</h3>
                        <p class="nwk1 font-weight-bold">- Attempt all questions with steady network</p>
                        <p class="nwk2 font-weight-bold">- 1mk for each ques within 7s</p>
                        <p class="nwk2 font-weight-bold">- Be guided, 3 different time apparatus are monitoring.</p>
                        <p class="nwk2 font-weight-bold">- When your allocated time exhaust, you will be logged out automatically.</p>
                    </div>
                </div>

            <div class="starter2"  id="starter2">
                <div>
                    <h3 class="text-center text-danger font-weight-bold" id="reader">Readers are Leaders</h3>
                </div>
            </div>

            <div class=""  id="starter3">
            <div>
     <center>
     <button class="btn btn-primary" href="#" data-toggle="modal" data-target="#signup" id="sqz">Start Quiz</button>
     <!--signup box-->
    <div class="modal fade my-modal" id="signup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">Click Next To Start</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="close">
                        <span aria-hidden="true">&times;</span></button>
                    </div>
            
                    <div class="modal-body">
                      
                     <form class="regg-form" method="post" id="regg-form" action="">
                        <div class="text-center font-weight-bold" id="wrnn">Hello! <span><?php echo $uname ?></span> have you read and observe all instructions carefully?.</div><br>
            
                            <input type="hidden" value="<?php echo $emx ?>" name="mail_ex" name="user_email" id="user_email">
                        
                            <button type="submit" class="btn btn-block btn-primary" name="savex" id="submitty" value="Insert">
                            <span class="glyphicon glyphicon-log-in"></span> &nbsp; Next
                        </form>
                    </div>
                    
                    <div class="modal-footer" id="modall">
                        <p class="text-center text-danger" id="modallx"></p>
                    </div> 
            </div>
        </div>
      </div>            
     </center>
     </div>
    </div>
            
    <div class=""  id="starter1">
                  <div id="starter1">
                        <h4 class="text-center text-danger font-weight-bold mt-4" id="q_result">My Quiz Result</h4>
                        <h2 class="text-center text-primary font-weight-bold">
                            <?php error_reporting(E_ERROR);
                                if(!$ptss || empty($ptss)){echo '....loading';}else{ echo $ptss . 'points';}
                            ?>
                        </h2>
                     </div>
                </div>            
        </div>
        
        <footer>
            <div class="footer1">
                <div>
                    <h6>Copyright ©2021 doubleprinceade</h6>
                </div>
                <div>
                    <h6>Powered by doubleprinceade</h6>
                </div>
            </div>
        </footer>
    
        <script src="../js1/jquery-3.3.1.min.js"></script>
        <script src="../js1/wow.min.js"></script> 
        <script src="../js1/popper.min.js"></script>
        <script src="../js1/bootstrap.min.js"></script>
        <script src="../js1/script.js"></script> 
                

        <script>
                function goAway(){
                    let ty;
                    ty= document.getElementById('mainNav');

                    if(ty.style.display === 'block'){
                            ty.style.display = 'none';
                        }else{
                            ty.style.display = 'block';
                        }
                }

        </script>
    </body>
</html>

<?php
      
    }

?>

<style>

/*dashboard strats here*/

body{
    background: #F5F5F5;
}

#nav_a{
    height: 200px;
    width: 100%;
    position: absolute;
    top: 0;
    background: url(../img1/exm1.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
}

.nav_1a{
    height: 100%;
    background: linear-gradient(to left, rgba(50, 50, 100, 0.5), rgba(50, 50, 100, 0.9));
}

.picx{
   width: 50%;
   height: auto;
   margin: auto;
   position: relative;
   bottom: 70px;
}

.picx1{
   width: 150px;
   height: 140px;
   border-radius: 100%;
   margin: auto;
   bottom: 30px;
   left: 250px;
   background: url(../img1/noimg2.jpg);
   background-size: cover;
   background-position-y: center;
}

picx2{
   border: 2px solid red;
   width: 80%;
   margin: auto;
   padding-top: 150px;
}

#exam_1{
  position: relative;
  top: 50px;
  display: flex;
  width: 80%;
  margin: auto;
  height: auto;
}

#exam_1>div{
   flex: 1;
}

#starter1, #starter2, #starter3, #starter4{
    width: 40vw;
    height: 30vw;
    overflow: hidden;
}

#starter4>div, 
#starter3>div,
#starter2>div, 
#starter1>div
{
      width: 80%;
      height: 80%;
      margin: auto;
      position: relative;
      top: 25px;
      box-shadow: 2px 2px 2px 2px silver; 
      padding: 7px;
      border-radius: 10px;  
      background: #E6E6FA;   
}

#starter4 p{
    font-size: 1vw;
}

#starter4>div{
    padding-top: 2vw;
}

#starter1 h4{
    padding-top: 6vw; 
}

#reader{
    position: relative;
    top: 6vw; 
}

.img_ic{
    position: absolute;
    right: 95px;
    border-radius: 5px;
    height: 40px;
    padding: 5px 5px 5px 5px;
    background: white;
    cursor: pointer;
}

.mainx{
    display: flex;
}

.mainx a{
  color: yellow;
  text-shadow: 2px 2px 3px blue;
}

.mainx>div{
   margin: 15px;
}

#navx{
  display: none;
}

/*normal time*/
#tymmy1{
  background: orange;
  color: yellow;
  text-shadow: 2px 2px 3px blue;
  font-weight: bold;
  width: 100px;
  height: 50px;
  border-radius: 5px;
}

#tymmy2{
    position: relative;
    top: 10px;
    left: 5px;
}

.logout_x{
  position: relative;
  font-weight: bold;
  background: orange;
  color: white;
  padding: 3px;
  padding-right: 7px;
  border-radius: 7px;
}

#sendy{
    position: relative;
    top: 50px;
}

#flexx1{
    width: 80%;
    margin: auto;
    display: flex;
    justify-content: space-between;
    position: relative;
    top: 20px;
}

#reader{
  position: relative;
  padding-top: 40px;
}

#starter3 form{
   padding-top: 6vw;
}

#q_result{
   padding-top: 40px;
}

#sqz{
    position: relative;
    top: 10vw;
    font-weight: bold;
}

#modall{
    width: 100%;
    margin: auto;
}

#modallx{
    width: 80%;
    margin: auto;
}

#wrnn{
    font-size: 20px;
    color: purple;
    position: relative;
    bottom: 20px;
}

footer{
    background: #696969;
    height: auto;
    width: 100%;
    color: yellow;
    text-shadow: 2px 2px 3px blue;
    position: relative;
    top: 150px;
    padding: 30px 0 30px 0;
}

footer>div{
    background: #696969;
    height: auto;
    width: 80%;
    margin: auto;
    display: flex;
    justify-content: space-between;
}

@media screen and (max-width: 1200px){
    
    #starter3 form{
        padding-top: 6vw;
    }

    #starter4 p{
        font-size: 1.2vw;
    }

    #starter4>div{
        padding-top: 0.5vw;
    }

    #starter1 h4{
        padding-top: 6vw; 
    }

    #reader{
        position: relative;
        top: 6vw; 
    }

    #starter1, #starter2, #starter3, #starter4{
        height: 42.5vw;
   }

   #starter2 h3{
       font-size: 3vw;
   }

#sqz{
    position: relative;
    top: 13vw;
    font-weight: bold;
}

@media screen and (max-width: 900px){

    #starter1>h2{
        font-size: 3vw;
    }

        #starter4>div{
        padding-top: 0.1vw;
    }

@media screen and (max-width: 800px){
    #exam_1{
       display: block;
    }

    #starter1, #starter2, #starter3{
        width: 95%;
        height: 300px;
        margin: auto;
    }

#starter4{
    width: 95%;
    height: auto;
    margin: auto;
}

#starter4>div
{
    width: 98%;
    height: auto;
    margin-bottom: 50px;
}

#starter4 p{
    margin-right: 10px;
    margin-left: 10px;
}

#starter1>div, 
#starter2>div, 
#starter3>div
{
  width: 98%;
  height: 250px;
  margin: auto;
}

#starter2 h3{
       font-size: 30px;
   }

#starter3 form{
   padding-top: 50px; 
}

    #starter4 p{
        font-size: 15px;
    }

    #starter4>div{
        padding-top: 0.5vw;
    }

    #starter1>h4{
        font-size: 30px; 
    }

    #reader{
        position: relative;
        top: 50px; 
    }

    .picx{
        width: 100%;
    }

   .picx2{
      width: 100%;
    }

    #starter1>h2{
        font-size: 30px;
    }


    #flexx3{
        display: block;
    }

    #navx{
        border: 1px solid silver;
        display: block;
        position: relative;
        left: 10px;
    }

    #mainNav{
        position: absolute;
        display: none;
        top: 150px;
        right: 20px;
        z-index: 1;
    }
    
    #mainNav>div{
        width: 120px;
         text-align: center;
         position: relative;
         left: 70px;
    }
    
      #mainNav a{
        width: 100%;
    }


    @media screen and (max-width: 600px){
      #mainNav{
        border-radius: 10px;
        top: 100px;
        right: 5px;
      }
      
      footer>div{
        width: 95%;
      }
      

   }
  }
 }
}

</style>