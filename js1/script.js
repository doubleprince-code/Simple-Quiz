$(function(){
  $('#regg-form').on('submit', function(e){
    e.preventDefault();

    $form = $(this);

    submitForm($form);

    console.log($form);
  });
});

function submitForm($form){

    $('#modallx').html('<img src="../img1/ajax-loader.gif">');

    $.ajax({
        url:"../php/controllers/startController.php",
        method: $form.attr('method'),
        data: $form.serialize(),
        success: function( response ){
            response = $.parseJSON( response );

            if(response.success){
                           
                if(!response.signout){
                    setTimeout(function(){
                      $('#modallx').html(response.message); 
                        window.location = response.url;
                    },5000);        
                }
              $('#modallx').html(response.message); 
            }
            else if(response.error){
              $('#modallx').html(response.message);
            }
        }
    });
}


