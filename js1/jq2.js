
         let lg;
         lg= $.noConflict();

         lg(document).ready(function(){
           
           lg("#panely").click(function(){
               lg(".flew").toggle();
            });
           
            lg("#tgl").click(function(){
               lg(".sidebar2").show();
           });
           
           lg("#myMove").click(function(){
               lg(".sidebar2").hide();
           });
           
         }); 
         
     