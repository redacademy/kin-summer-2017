(function($){

    $('.carousel-cell').each( function() {
        $(this).children('p').first().addClass('service-description');
    });





    $('#edit0').on('click',function(e){           // form 1
        e.preventDefault();
        $('#gform_page_1_6').toggle();
        $('#gform_page_1_1').toggle();
    });

    $('#edit1').on('click',function(e){           // form 2
        e.preventDefault();
        $('#gform_page_1_6').toggle();
        $('#gform_page_1_2').toggle();
    });

    $('#edit2').on('click',function(e){           // form 3
        e.preventDefault();
        $('#gform_page_1_6').toggle();
        $('#gform_page_1_3').toggle();
    });

    $('#edit3').on('click',function(e){           // form 4
        e.preventDefault();
        $('#gform_page_1_6').toggle();
        $('#gform_page_1_4').toggle();
    });

    $('#edit4').on('click',function(e){           // form 5
        e.preventDefault();
        $('#gform_page_1_6').toggle();
        $('#gform_page_1_5').toggle();
    });

    


    

})( jQuery );