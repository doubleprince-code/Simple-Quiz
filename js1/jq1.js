let lw;
lw= $.noConflict();

lw(document).ready(function(){
  
  lw("#panely").click(function(){
    lw("#overlay").toggleClass("ovlay");
  });
   
}); 

lw(document).ready(function(){
  
    lw("#make_x, #make_xy, #make_xz").addClass("animated zoomInUp");
    
  });
