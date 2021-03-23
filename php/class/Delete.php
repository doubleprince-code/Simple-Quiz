<?php
    
class login{
    private $pdo;
    private $tables;
    private $username;
    private $eml;
    private $hash;
     

    public function __construct($pdo, $tables, $username, $eml, $hash) {
        $this->pdo = $pdo;
        $this->tables = $tables;
        $this->username = $username;
        $this->eml = $eml;
        $this->hash = $hash;
        }
         
/*
     public function findUser($username){
        $sql = "SELECT COUNT(userx_x) AS num FROM `oop_2` WHERE userx_x = :usname";
        $stmt = $this->conn->prepare($sql);
        $stmt-> bindValue(':usname', $username);
        $stmt-> execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if($row['num'] > 0){
            die('That username already exists!');
        }       
    }
*/

    public function login($userx, $lsp){
        $sql = "SELECT * FROM `oop_2` WHERE userx_x = :usm";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(':usm', $userx); 
        $stmt->execute();
        $useruser = $stmt->fetch(PDO::FETCH_ASSOC);
        $stored_password1= $useruser['pwordx_x'];
        //$stored_password2= $useruser['userx_x'];

        
        ob_start();
        var_dump($stored_password2);
        //include __DIR__. '/../templates/form.html.php';
        $outp = ob_get_clean();
        
        
        if($useruser === false){
            die('Incorrect username / password combination!');
        } else{                          
            $validPassword = password_verify($lsp, $stored_password1);       
            //echo "<br>";
            //var_dump($validPassword);
    
            //If $validPassword is TRUE, the login has been successful.
              if($validPassword){
            
                //Provide the user with a login session.
                $_SESSION['idx'] = $user['id'];
                //$_SESSION['logged_in'] = time();
                
                //Redirect to our protected page, which we called home.php
                //header('Location: home.html.php');
                //exit;
                
               } else{
                //$validPassword was FALSE. Passwords do not match.
                die('invalid login!');
            }
        }

    }

    /*
public function is_loggedin($userx, $lsp){
    if(isset($_SESSION['idx']))
    {
        return true;
    }
}

public function redirect(){
    header("location: $url");
}

public function logout(){
        session_destroy();
        unset($_SESSION['idx']);
        ('location: ../loginKontrol.php');
        return true;
    }
       
}
*/


?>

