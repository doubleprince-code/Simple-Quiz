
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="stylesheet" href="../../font-awesome(4.7.0)/css/style1.css">
    </head>
    <body class="img_gallery">
        
        <!--gallery starts here using php link-->
     <div class="cop_3">
         <p class="pp_1"> <span class="pp_2">EVENTS GALLERY</span> </p>
         <p class="gallery_log"><span><a href="logout.php"> << Back</a></span></p>
            <form method="post" enctype="multipart/form-data">
                <?php
                    include_once('connection.php');                   
                  
                                        if(isset($_POST['update_media'])){
                                        $up_filex= $_FILES['serious'];
                                            
                                            echo $filename =$up_filex['name'];
                                            $filetype =$up_filex['type'];
                                            $filesize =$up_filex['size'];
                                            $fileerror =$up_filex['error'];
                                            $filetmp_name =$up_filex['tmp_name'];
                                            
                                            $fileext = explode('.', $filename);
                                            $filerealext = strtolower(end($fileext));
                                            $allowed = array('JPG', 'JPEG', 'PNG', 'GIF', 'PDF', 'jpg', 'jpeg', 'png', 'gif');
                                            
                                                if(in_array($filerealext, $allowed)){
                                                    if ($fileerror === 0){
                                                        if($filesize < 80000001 ){
                                                            $filenewname = uniqid('', false). ".". $filerealext;
                                                        $filedestination = "pics/". $filenewname;
                                                            move_uploaded_file($filetmp_name, $filedestination);
                                                                                                                                                                                                                    
                                                            $woke = mysqli_query($conn1, "INSERT INTO `gallery`(`id`, `photos`) VALUES(null, '$filenewname'); ");
                                                                            
                                                                if($woke){
                                                                    echo "<script>alert('upload Successful!!')</script>";
                                                                                                                            
                                                                    
                                                                }else echo mysqli_error($conn1) . "<script>alert('Error!!')</script>";
                                                            ?>
                                                            <?php
                                                            
                                        
                                                        }else echo "image should not be more than 100kb ";
                                                    }else echo "There was an error uploading your file!";
                                                }else echo "cannot upload files of this type";
                                            }

                ?>

                        
                        
                        <!--upload button-->
                        <center>     
                            <div class="picx_xx" id="">                                   
                                    <!--logout button-->
                                    <span class="px_1"><input type="file" name="serious" class="serious_x1"></span>
                                    <span class="px_2"><input type="submit" value="submit" name="update_media" class="serious_x2"></span>
                                                    
                            </div>
                        </center>                  
            </form>
 
                        <!--mysqli fetch-->
                        <center>
                                <div class="flexx">
                                        <?php
                                            $plus= mysqli_query($conn1, "SELECT * FROM `gallery`");
                                                while($run_done = mysqli_fetch_array($plus)){
                                                $id = $run_done['id'];
                                                $picx = $run_done['photos'];
                                        ?>
                                            <div class="normal" >
                                                <div style="background-image:url(pics/<?php echo $picx ?>); background-repeat: no-repeat;">
                                                    <div align="left">
                                                        <br /><br /><br /><br />
                                                        <button class="button_xy" onclick="window.location='delete.php?id=<?php echo $id ?>'">Delete</button>
                                                    </div>
                                                </div>
                                            </div>

                                        <?php
                                            }
                                        ?>

                                </div>
                        </center>
        </div>


    </body>
</html>




