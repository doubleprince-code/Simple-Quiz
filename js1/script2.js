
//login script
$('document').ready(function()
{
    $('#regx').on('submit', function(event){  
event.preventDefault();  
let mail = $('#mail').val();  
let pwd = $('#pwd').val();
        
if(mail != '' && pwd != '')   
{  

$.ajax({  
    url:"../php/controllers/loginKontrol2.php",
      method:"POST", 
      data:new FormData(this),  
      contentType:false,  
      processData:false,
      beforeSend: function()
      { 
        $("#message").fadeOut();
        $("#btn-submit").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; sending ...');
      },  

      success:function(data)  
      {  
            
           $('#regx')[0].reset();
         if(data== 1){
            $("#message").fadeIn(1000, function(){
                $("#message").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; Invalid Email/Password!</div>');
           });
          }
            else if(data==2)
            { 
               $("#message").fadeIn(1000, function(){
                $('#message').html('<img src="../img1/ajax-loader.gif">');                                  
            });
            
            setInterval(function(){
                 window.location='html/dashboard';
            }, 5000);

           }
            else if(data==3)
            {
                $("#message").fadeIn(1000, function(){
                    $("#message").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; password do not match !</div>');
                    $("#btn-submit").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Create Account');
              });
            }
            else{
                $("#message").fadeIn(1000, function(){
                    $("#message").html('<div class="alert alert-danger"><span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+data+' !</div>');
                    $("#btn-submit").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Create Account');
                });
            }
      }  
   })  
  }  
  else  
  {  
    alert("All Fields are Required");  
   }  
  });
});

  

