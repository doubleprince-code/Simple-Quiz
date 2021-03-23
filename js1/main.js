

let ab;
ab= $.noConflict();

         //slide transition for div_xx
         let slideIndex = 0;
           showSlidessy();
            
            function showSlidessy() {
                let i;
                let slides = document.getElementsByClassName("mySlidyy");
                let dots = document.getElementsByClassName("dot");
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";  
                }
                slideIndex++;
                if (slideIndex > slides.length) {slideIndex = 1}    
                for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace("active", "");
                }
                slides[slideIndex-1].style.display = "block";  
                dots[slideIndex-1].className += " active";
                setTimeout(showSlidessy, 7000); // Change image every 5 seconds
            }
        
             //script to end the entire quiz(1000mls equal 1s)
             setInterval(function()
             {
                redirect();
             }, 69900);
             
             function redirect()
             {
                 document.location="dashboard.php";
             }

          //time counter starts here
          let counter = {};
           window.addEventListener("load", function () {
            
            //COUNTDOWN IN SECONDS
            //EXAMPLE - 1 MIN = 1 X 60 = 60 SECS
            counter.end = 70;

            //Get the containers
            counter.min = document.getElementById("cd-min");
            counter.sec = document.getElementById("cd-sec");

            //Start if not past end date
            if(counter.end > 0){
              counter.ticker = setInterval(function(){
                
                //stop if passed end time
                  counter.end--;
                  if(counter.end <= 0){
                    clearInterval(counter.ticker);
                     counter.end = 0;
                   }
                  
                   //Calculate remaining time
                    let secs = counter.end;
                    let mins = Math.floor(secs/60); //1 min and 10s = 70 secs
                    secs -= mins * 60;

                   //Update HTML
                    counter.min.innerHTML = mins;
                    counter.sec.innerHTML = secs;
                  }, 1000);
                }
              });

            ab(document).ready(function(){
                //alert("hello");
                ab(".que_x").addClass("animated fadeOut1x");
                }); 
              
              ar(document).ready(function(){
                ar("#headera").addClass("animated fadeIn");
              });
              
              ar(document).ready(function(){
                    ar("#headerb").addClass("animated fadeIn");
                });
              
              ar(document).ready(function(){
                    ar("#headerc").addClass("animated fadeIn");
               });
               
               //nav1 icons top bar
                ar(document).ready(function(){
                   ar("#face_x").addClass("animated changeFontColor1");
                   ar("#twitter_x").addClass("animated changeFontColor2");
                   ar("#instagram_x").addClass("animated changeFontColor3");
                   ar("#envelop_x").addClass("animated changeFontColor4");
                   ar("#phone_x").addClass("animated changeFontColor5");
                   ar("#clock_x").addClass("animated changeFontColor6");
                   ar("#envelope2_x").addClass("animated changeFontColor7");
                
                }); 
              
                 //section four  & five effect top bar
                 ar(document).ready(function(){
                  ar("#ig1").addClass("animated changeOpacity");
                }); 

                 ar(document).ready(function(){
                    ar("#ig2").addClass("animated changeOpacity_1");
                  }); 

                  ar(document).ready(function(){
                    ar("#ig3").addClass("animated changeOpacity_2");
                  }); 

                  ar(document).ready(function(){
                    ar("#ig_x3").addClass("animated changeOpacity_3");
                  });
                  
                  ar(document).ready(function(){
                    ar("#ig_x2").addClass("animated changeOpacity_4");
                  }); 

                  ar(document).ready(function(){
                    ar("#ig_x1").addClass("animated changeOpacity_5");
                  }); 
                
                  //post button
                  ar(document).ready(function(){
                    ar("#post_xyz").addClass("animated changeFontColor3");
                  }); 
                  
                
                //animate script
                ar("#capt_1").addClass("animated slideInLeft");
                ar("#capt_4").addClass("animated slideInLeft");
                ar("#capt_7").addClass("animated slideInLeft");
                
                ar("#capt_2").addClass("animated zoomInLeft");
                ar("#capt_5").addClass("animated zoomInLeft");
                ar("#capt_8").addClass("animated zoomInLeft");

                ar("#capt_3").addClass("fadeInSlow");
                ar("#capt_6").addClass("fadeInSlow");
                ar("#capt_9").addClass("fadeInSlow");

                //overlay text effcet
                //layer1
            
                ar("#con1").addClass("animated slideInLeft");
                ar("#con2").addClass("animated slideInRight");
                ar("#con3").addClass("animated slideInLeft");
                
                ar("#con4").addClass("animated slideInRight");
                ar("#con5").addClass("animated slideInLeft");
                ar("#con6").addClass("animated slideInRight");
                
                //layer2
                ar("#con1x").addClass("animated slideInLeft");
                ar("#con2x").addClass("animated slideInRight");
                ar("#con3x").addClass("animated slideInLeft");
                
                ar("#con4x").addClass("animated slideInRight");
                ar("#con5x").addClass("animated slideInLeft");
                ar("#con6x").addClass("animated slideInRight");

                //layer3
                ar("#con1xx").addClass("animated slideInLeft");
                ar("#con2xx").addClass("animated slideInRight");
                ar("#con3xx").addClass("animated slideInLeft");
                
                ar("#con4xx").addClass("animated slideInRight");
                ar("#con5xx").addClass("animated slideInLeft");
                ar("#con6xx").addClass("animated slideInRight");
              

                