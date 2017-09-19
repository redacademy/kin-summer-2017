(function($){

    $('.carousel-cell').each( function() {
        $(this).children('p').first().addClass('service-description');
    });


    // Form consultation
    $('#gf_step_1_5').on('click',function(e){
        e.preventDefault(); 
        alert($(this)); 
    });

    

})( jQuery );