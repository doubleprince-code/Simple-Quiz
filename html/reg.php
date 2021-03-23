        <!--div id="reset_xx" style="display: flex; justify-content: space-between;">
                    <div class="text-warning"></div>
                    <div class="text-warning"></div>
                    <div class="text-primary">
                        <a href="#" class="text-right text-primary font-weight-bold mb-2"> Reset passowrd
                        </a>
                    </div>
                </div-->
                <div class="text-center text-warning font-weight-bold mb-3" id="oooooh"><h3 class="font-weight-bold mb-2 mt-2"><?php error_reporting(E_ERROR); echo $message ?></h3></div>
            <div class="form2">
               <h3 class="text-secondary text-center text-warning font-weight-bold mb-4" id="sign_2">REGISTRATION FORM</h3>
                  <form action="" method="post" class="wow flipInY animated animated" id="form_3">
                        <div class="form-group">
                             <label for="username" class="font-weight-bold">Username:</label>
                             <input type="text" class="form-control" name="unm" required/>
                        </div>
                        <div class="form-group mb-4">
                            <label for="email" class="font-weight-bold">Email</label>
                            <input type="email" class="form-control" name="mailt" required/>
                        </div>
                        <div class="form-group">
                             <label for="password" class="font-weight-bold">Password:</label>
                             <input type="password" class="form-control" placeholder="min of 5 char" name="passw" minlength="5" required/>
                        </div>
                        <div class="form-group">
                              <label for="Confirm Password" class="font-weight-bold">Confirm Password:</label>
                              <input type="password" class="form-control" name="cpass" minlength="5" required/>
                        </div><br>
                          <input type="submit" value="Submit" name="send" class="btn btn-primary btn-block font-weight-bold" id="post_xyz"><br>
                          <div id="signup_xc">
                              <div></div>
                              <div>
                                   <a href="../index" class="text-primary font-weight-bold"> <span class="text-secondary">Registered?</span> SignIn << 
                                   </a>
                              </div>
                              <div></div>
                          </div>
                   </form>
             </div>                  
        </div>

<style>
    
  #oooooh{
    padding-bottom: 20px !important;
  }
  
  #reset_xx a{
      padding: 7px;
      border-radius: 5px;
      box-shadow: 2px 2px 2px 2px rgba(50, 50, 100, 0.5);
  }
  
  #sign_2{
        text-shadow: 2px 2px 3px black;
        font-family: trebuchet MS;
    }  
  
  #signup_xc{
      display: flex;
      justify-content: space-between;
  }
  
</style>