(function($){

    $('.carousel-cell').each( function() {
        $(this).children('p').first().addClass('service-description');
    });


    $('#edit0').on('click',function(e){           // form 1
        e.preventDefault();
        $('#gform_page_1_6').toggle();
        $('#gform_page_1_1').toggle();
        $('#gform_next_button_1_8').hide();
        $('#edit-name').addClass('unhide-edit');
    });

    $('#edit1').on('click',function(e){           // form 2
        e.preventDefault();
        $('#gform_page_1_6').toggle();
        $('#gform_page_1_2').toggle();
        $('#gform_next_button_1_10').hide();
        $('#edit-email').addClass('unhide-edit');
    });

    $('#edit2').on('click',function(e){           // form 3
        e.preventDefault();
        $('#gform_page_1_6').toggle();
        $('#gform_page_1_3').toggle();
        $('#gform_next_button_1_13').hide();
        $('#edit-trainer').addClass('unhide-edit');
    });

    $('#edit3').on('click',function(e){           // form 4
        e.preventDefault();
        $('#gform_page_1_6').toggle();
        $('#gform_page_1_4').toggle();
        $('#gform_next_button_1_12').hide();
        $('#edit-action').addClass('unhide-edit');
    });

    $('#edit4').on('click',function(e){           // form 5
        e.preventDefault();
        $('#gform_page_1_6').toggle();
        $('#gform_page_1_5').toggle();
        $('#gform_next_button_1_23').hide();
        $('#edit-comment').addClass('unhide-edit');
    });    

})( jQuery );