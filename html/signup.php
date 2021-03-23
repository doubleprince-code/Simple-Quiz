
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
        <!--link rel="stylesheet" href="font-awesome(4.7.0)/css/style1.css"-->
    </head>

    <body id="sign_x">
        
        <section class="head1"> 
                <?php include_once('headfoot/header.php'); ?>
        </section>

      <section class="form_1">    
        <div class="container" id="container_1">
           <div>
                <div class="medic"></div>
                  
                 <div class="" id="signup_1">
                             <?php            
                                    include('../php/controllers/signupKentrol.php');
                              ?> 
                 </div>
              </div>
           </div>
      </section>
      
       <!--footer start here-->
       <section class="futal">
                <?php include_once('headfoot/footer.php'); ?>
        </section>
        <!--end of footer-->

            <script src="../js1/jquery-3.3.1.min.js" defer></script>
            <script src="../js1/wow.min.js"></script> 
            <script src="../js1/popper.min.js" defer></script>
            <script src="../js1/bootstrap.min.js" defer></script>
            <script src="../js1/main.js" defer></script> 
                                  
            <script>
            new WOW().init();
          </script>
            
         <script>
                  let acc = document.getElementsByClassName("accordion");
                  let i;

                  for (i = 0; i < acc.length; i++) {
                        acc[i].addEventListener("click", function() {
                              this.classList.toggle("active");
                              var panel = this.nextElementSibling;
                              if (panel.style.display === "block") {
                              panel.style.display = "none";
                              } else {
                              panel.style.display = "block";
                              }
                        });
                  }
            </script>

      </body>
</html>

<style>

*{
      margin: 0;
      padding: 0;
}

@font-face{
  src: url(fonts/Gabriola.ttf);
  font-family: Gab;
}

h2{
  font-family: gabriola;
  font-size: 37px !important;
}

.back_xy{
   margin-bottom: 5px;
}

.back_xy a{
   font-weight: bold;
   padding-right: 20px !important;
   padding-left: 20px !important;
}

#sign_x{
   background: linear-gradient(to right, rgba(255, 255, 255, 0.8), rgba(200,200,200, 0.2));
}

#signup_1{
    position: relative;
    bottom: 30px;
}

.form_1{
    margin-top: 5px;
    margin-bottom: 60px;
}

#form_3{
    border-radius: 10px;
    padding: 20px;
    box-shadow: 1px 0px 10px 5px silver;
    width: 60%;
    margin: auto;
}

#container_1{
    margin-top: 0px;
}

#signup_xx{
    background: none !important;
    border: none !important;
    font-size: 18px;
}

.foota{
    height: auto;
    width: 100%;
    margin-top: 150px;
    padding-top: 100px;
}

.foota1{
   background: #696969;
   height: 100%;
   width: 100%;
   padding-top: 50px;
}

.medic{
     width: 200px;
     height: 100px;
     margin: auto;
     background: url(../img/trf-logo.jpg);
     background-size: ;
     background-position: center;
     background-repeat: no-repeat;
     border-radius: 13px;
}

@media screen and (max-width: 800px){
    #form_3{
    width: 95%;
}

@media screen and (max-width: 600px){
      
.back_xy{
  width: 100%;
  margin-bottom: 5px; 
  margin-left: 15px; 
  padding-top: 30px;
    }
  }
}


</style>























