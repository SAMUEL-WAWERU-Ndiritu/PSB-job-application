$(document).ready(function(){
    $('#get_first').click(function(){
        $('#first').show();
        $('#second').hide();
        $('#third').hide();
        $('#fourth').hide();
       


    });
    $('#get_second').click(function(){
        $('#first').hide();
        $('#second').show();
        $('#third').hide();
        $('#fourth').hide();
       
    });
    $('#get_third').click(function(){
        $('#first').hide();
        $('#second').hide();
        $('#third').show();
        $('#fourth').hide();
        
    });
    $('#get_fourth').click(function(){
        $('#first').hide();
        $('#second').hide();
        $('#third').hide();
        $('#fourth').show();
        
    });
 
  
})



