
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
            
        <title>ONLINE QUIZ</title>
        <link rel="stylesheet" href="bootstrap/bootstrap.min.css"> 
        <link rel="stylesheet" href="font-awesome(4.7.0)/css/font-awesome.min.css">
        <link rel="stylesheet" href="animate/animate.css">
    </head>

    <body id="login_x">
            <section class="head1"> 
                <?php include_once('html/headfoot/header.php'); ?>
            </section>
            
            <section class="form_1">    
                
                <div class="container" id="container">
                    <div class="back_x">
                        <a href="#" role="button" class="btn btn-warning">Back</a>
                    </div>
                    <div class="text-secondary text-center font-weight-bold mb-4" id="login_2">
                    <h2 class="font-weight-bold text-warning">USER LOGIN</h2>
                    </div>
                </div><br>
                
                <div class="container" id="logy">
                <a href="#" role="button" class="btn btn-primary btn-block text-right text-warning font-weight-bold mb-2" id="reset_xx"> Reset passowrd</a>
                
                <center>
                        <div class="mb-4" id="message1">
                            <span class="text-center" id="message"></span>                
                        </div>
                    </center>
                    
                    <div class="form2">
                    <h3 class="font-weight-bold mb-2 mt-2"></h3>
                        <form method="Post" action="" class="wow flipInY animated animated" id="regx">
                        <label for="email" class="font-weight-bold">Email</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="e_icon"><img src="../img1/logicon2.jpg" /></span>
                            </div>
                            <input type="email" class="form-control" name="maily" id="mail" required/>
                            </div>

                            <label for="password" class="font-weight-bold">Password</label>
                            <div class="input-group mb-3">
                            <div class="input-group-append">
                                <span class="input-group-text" id="key_icon"><img src="../img1/key4.jpg" /></span>
                            </div><br>
                            <input type="password" class="form-control" name="pwst" id="pwd" required/>
                        </div>
                        
                        <input type="submit" value="submit" name="send" class="btn btn-primary btn-block font-weight-bold mt-4" id="btn-submit"><br>
                    </form>

                    <a href="signup" role="button" class="btn btn-primary btn-block text-success font-weight-bold mb-4" id="signup_xx"> <span class="text-secondary">Not Registered?</span> Signup Here </a>
                    </div>
                </div>
            </section>
        
            <!--footer start here-->
            <section class="futal">
                <?php include_once('html/headfoot/footer.php'); ?>
            </section>
            <!--end of footer-->

            <script src="js1/jquery-3.3.1.min.js"></script>
            <script src="js1/wow.min.js"></script> 
            <script src="js1/popper.min.js"></script>
            <script src="js1/bootstrap.min.js"></script>
            <script src="js1/script2.js"></script>
      </body>
</html>

<style>

    
    #login_x{
        background:  #F8F8FF ;
    }

    .form_1{
          position: relative;
          top: 30px;
      }
      
      #reset_xx, #signup_xx{
          background: none;
          border: none;
      }
      
      #login_2, #reset_xx{
          position: relative;
          top: 20px;
      }
      
      #logy{
          border: 1px solid silver;
          width: 50%;
          border-radius: 10px;
          box-shadow: 0px 0px 2px 1px silver;
      }

      #post_xyz{
        margin-top: 40px!important;
    }

    
    #key_icon{
        background: white;
    }
      
    #message1{
        margin-top: 20px;
    }

    /*classes message*/

    .inc{
        color: blue;
        font-weight: bold;
        width: 80%;
        margin: auto;
        text-align: center;
    }

    .inv{
        color: blue;
        font-weight: bold;
        width: 80%;
        margin: auto;
        text-align: center;
    }

    #container{
        margin-top: 70px;
    } 

    #login_2 h2{
        text-shadow: 2px 2px 3px black;
    }  

      @media screen and (max-width: 768px){
        #logy{
          width: 95%;
          padding-bottom: 10px;
          margin-bottom: 20px;
      }   
    }






















