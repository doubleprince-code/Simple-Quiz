

    <div class="form2">
      <h3 class="font-weight-bold mb-2 mt-2"><?php error_reporting(E_ERROR); echo $message; ?></h3>
        <form action="" method="Post" class="wow flipInY animated animated" id="form_3">
         <label for="email" class="font-weight-bold">Email</label>
          <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="e_icon"><img src="../img1/logicon2.jpg" /></span>
            </div>
             <input type="email" class="form-control" name="maily" required/>
            </div>

            <label for="password" class="font-weight-bold">Password</label>
            <div class="input-group mb-3">
             <div class="input-group-append">
                <span class="input-group-text" id="key_icon"><img src="../img1/key4.jpg" /></span>
            </div><br>
            <input type="password" class="form-control" name="pwst" required/>
          </div>
          <div>
                <radio>
                    <span><input type="radio" name="statusxy" value="dashboard" id="dsb">&nbsp; Admin  </span> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    <span><input type="radio" name="statusxy" value="result" id="rst"> &nbsp; Student</span>
                </radio>
            </div>
          <input type="submit" value="submit" name="send" class="btn btn-primary btn-block font-weight-bold mt-4" id="post_xyz"><br>
    </form>

       <a href="signup.html.php" role="button" class="btn btn-primary btn-block text-success font-weight-bold mb-4" id="signup_xx"> >> User Registraion << </a>
    </div>

    <style>
    
    #post_xyz{
        margin-top: 40px!important;
    }

    #key_icon{
        background: white;
    }
    
    </style>