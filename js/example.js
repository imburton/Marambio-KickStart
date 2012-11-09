$(document).ready(function(){
    //FLEXSLIDER http://www.woothemes.com/flexslider/
    $('#slider-full').flexslider({
      animation: "slide",
      controlNav: true,
      slideshowSpeed: 5000
    });
    $('#carousel').flexslider({
      animation: "slide",
      animationLoop: true,
      slideshow: false, 
      itemWidth: 210,
      asNavFor: '#slider'
    });
    $('#slider').flexslider({
      animation: "fade", 
      directionNav: true,
      slideshowSpeed: 8000,
      controlNav: false,
      sync: "#carousel"
    });
    //FANCYBOX http://fancybox.net/
    $("a.fancy").fancybox({
      'transitionIn'  : 'fade',
      'transitionOut' : 'fade', 
      'speedIn'   : 600, 
      'speedOut'    : 200, 
      'overlayColor'  : '#000',
      'overlayOpacity'  : 0.8
    });
    
    //ESTILOS FORM
    $("#contact-form").jqTransform();
    //VALIDACION FORM
    //set error messages for different languages
    if( typeof errorMessages !== 'undefined'){
      //if there are custom messages, then use them; else, leave defaults
      $.extend($.validator.messages, {
        required: errorMessages.required,
        email: errorMessages.email
      });
    }
    $.validator.setDefaults({
      submitHandler: function(form) { 
        
        var $form = $(form);
        
        $.ajax({
          url: $form.attr('action'),
          type: $form.attr('method'),
          data: $form.serialize(),
          dataType: "json",
          success: function(response){
            if(response.ok){  
          $('.validationWrapper, #submit, .textarea, .required-mark').hide();
          $('#success').fadeIn(300);
            } else {                  
            $('#error').show();
            }
          }
        });
      },
      //place error in special tooltip
      errorPlacement: function(error, element) {
      
        var $warning = $(element).closest('.validationWrapper').find('.warning');
      
        if($warning.length > 0){
          $warning.remove();
        }
        $(element).closest('.validationWrapper').append('<div class="warning">' + error.html() + '<span></span></div>').addClass('error');
      },
      //removes error when field is unhighlighted
      unhighlight: function(element, errorClass, validClass) {
        $(element).removeClass(errorClass).addClass(validClass);
        $(element).closest('.validationWrapper').removeClass('error').find('.warning').remove();
      }
    });
    //validación form 
    $("#contact-form").validate();
});