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
      
      if(!$emx || !$uname){
        echo "<p class='lga'>Please Login again</p>";
        echo "<p class='lgo'><a href='../php/controllers/logout.php'>Click Here to Login</a></p>";
      }else{

     //logging time now determined when dashboard page start           
        $now = $_SERVER['REQUEST_TIME'];
      
      //if ($now >= $_SESSION['expire']){
        if ($now >= $timmmy){
              
        //session_destroy();
        //session_unset();
        //echo "<p class='timmy'>Your session has expire! <a href='../php/controllers/logout'>Login here</a></p>";
        echo 'dashboard.php'; 
    }else{
  
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

    <body id="boodi">
      <?php
          include_once ('headfoot/header.php');
      ?>

    <div class="timmee">
            <div class="digits" id="cd-min1"><span id="cd-min">00</span><span id="cd-min3">m</span></div>
            <div class="digits" id="cd-sec1"><span id="cd-sec">00</span><span id="cd-sec3">s</span></div>
    </div>
    <br/><br/>

    <div style="width: 80%; margin: auto;">
        <p><span class="text-primary font-weight-bold">Hello! </span><?php echo $uname?></p>
        <p class="logout_x"><a href="../php/controllers/logout.php">Logout</a></p>
    </div>

    <div class="appoint-flex">
            <?php include ('../php/controllers/quizController.php'); ?>
    </div>

   <!--footer included-->
   <?php
      include_once ('headfoot/footer.php');
    ?>
        <script src="../js1/jquery-3.3.1.min.js"></script>
        <script src="../js1/wow.min.js"></script> 
        <script src="../js1/popper.min.js"></script>
        <script src="../js1/bootstrap.min.js"></script>
        <script src="../js1/main.js"></script> 
    </body>
</html>

<?php
      }
     }
   }
?>


<style>

.gent{
  width: 50%;
  margin: auto;
  padding-bottom: 30px;
  padding-top: 70px;
  position: relative;
}

.logout_x{
  float: right;
  right: 0;
  position: relative;
  bottom: 30px;
  font-weight: bold;
}

/*timmer starts from here*/
.timmee{
    width: 150px;
    height: 150px;
    border-radius: 100%;
    overflow: hidden;
    font-size: 20px;
    margin: auto;
    position: relative;
    bottom: 80px;
}

.timmy{
  width: 80%;
  margin: auto;
  text-align: center;
  font-size: 20px;
  position: relative;
  bottom: 80px;
}

#cd-min1{
    width: 100%;
    height: 50%;
    background: blue;
    color: white;
    font-weight: bold;
    text-align: center;
}

#cd-sec1{
    width: 100%;
    height: 50%;
    background: orange;
    color: white;
    font-weight: bold;
    text-align: center;
}

#cd-min, #cd-min3{
    position: relative;
    top: 15px;
}

#cd-sec, #cd-sec3{
    position: relative;
    top: 15px;
}

.flexxy{
  box-shadow: 1px 1px 5px 1px silver;
  display: flex;
  justify-content: space-around;
  background: #eee;
  padding-top: 10px;
  padding-bottom: 10px;
}

.imgx{
  height: 200px;
  width: 250px;
  margin: auto;
  background: url(../img1/c2.jpg);
  background-size: cover;
  border-radius: 10px;
}

  .mySlidyy{
    width: 50%;
    margin: auto;
  }
  
  .lga, .lgo{
      width: 50%;
      margin: auto;
      font-size: 20px;
      position: relative;
      top: 200px;
  }

  .appoint-flex{
    width: 40%;
    margin: auto;
  }

@media screen and (max-width: 1200px){
  .mySlidyy{
          width: 80%;
    }

  .appoint-flex{
    width: 50%;
    margin: auto;
  }

@media screen and (max-width: 768px){
  .appoint-flex{
    width: 80%;
    margin: auto;
  }

@media screen and (max-width: 600px){
    .gent{
    width: 80%;
    margin: auto;
    padding-bottom: 30px;
    padding-top: 70px;
  }

  .imgx{
  height: 100px;
  width: 150px;
  margin: auto;
  background: url(../img1/c2.jpg);
  background-size: cover;
  border-radius: 10px;
}

.timmee{
    border: 2px solid red;
    width: 100px;
    height: 100px;
    border-radius: 100%;
    overflow: hidden;
    font-size: 20px;
    margin: auto;
    position: relative;
  }

  .mySlidyy{
    width: 80%;
  }

.appoint-flex{
    width: 95%;
    margin: auto;
  }

 }
 }
}
</style>
