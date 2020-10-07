(function($) {
    "use strict";
    $(".mobile-toggle").click(function(){
        $(".nav-menus").toggleClass("open");
    });
    $(".mobile-search").click(function(){
       $(".form-control-plaintext").toggleClass("open");
   }); 

    $(".bookmark-search").click(function(){
        $(".form-control-search").toggleClass("open");
    })
    $(".filter-toggle").click(function(){
        $(".product-sidebar").toggleClass("open");
    });
    $(".toggle-data").click(function(){
        $(".product-wrapper").toggleClass("sidebaron");
    });
    $(".form-control-search").keyup(function(e){
        if(e.target.value) {
            $(".page-wrapper.horizontal-wrapper").addClass("offcanvas-bookmark");
        } else {
            $(".page-wrapper.horizontal-wrapper").removeClass("offcanvas-bookmark");
        }
    });
})(jQuery);

$('.loader-wrapper').fadeOut('slow', function() {
    $(this).remove();
});

$(window).on('scroll', function() {
    if ($(this).scrollTop() > 600) {
        $('.tap-top').fadeIn();
    } else {
        $('.tap-top').fadeOut();
    }
});
$('.tap-top').click( function() {
    $("html, body").animate({
        scrollTop: 0
    }, 600);
    return false;
});

function toggleFullScreen() {
    if ((document.fullScreenElement && document.fullScreenElement !== null) ||
        (!document.mozFullScreen && !document.webkitIsFullScreen)) {
        if (document.documentElement.requestFullScreen) {
            document.documentElement.requestFullScreen();
        } else if (document.documentElement.mozRequestFullScreen) {
            document.documentElement.mozRequestFullScreen();
        } else if (document.documentElement.webkitRequestFullScreen) {
            document.documentElement.webkitRequestFullScreen(Element.ALLOW_KEYBOARD_INPUT);
        }
    } else {
        if (document.cancelFullScreen) {
            document.cancelFullScreen();
        } else if (document.mozCancelFullScreen) {
            document.mozCancelFullScreen();
        } else if (document.webkitCancelFullScreen) {
            document.webkitCancelFullScreen();
        }
    }
}
(function($, window, document, undefined) {
    "use strict";
    var $ripple = $(".js-ripple");
    $ripple.on("click.ui.ripple", function(e) {
        var $this = $(this);
        var $offset = $this.parent().offset();
        var $circle = $this.find(".c-ripple__circle");
        var x = e.pageX - $offset.left;
        var y = e.pageY - $offset.top;
        $circle.css({
            top: y + "px",
            left: x + "px"
        });
        $this.addClass("is-active");
    });
    $ripple.on(
        "animationend webkitAnimationEnd oanimationend MSAnimationEnd",
        function(e) {
            $(this).removeClass("is-active");
        });
})(jQuery, window, document);


// active link
$(".chat-menu-icons .toogle-bar").click(function(){
    $(".chat-menu").toggleClass("show");
});

var Windowwidth = jQuery(window).width();
if ((Windowwidth) > '575') {
    $(".mobile-search").click(function(){
       $(".search-form").toggleClass("open");
       $(".mobile-search").toggleClass("open");    
   });    
    $(".close-search").click(function(){
       $(".search-form").toggleClass("open");
       $(".mobile-search").toggleClass("open");    
   });
}

 //view confidence doc image in a modal
$(document).on('click','#competence-tab', function(){
    let img = $(this).data('img');
    let displayModal = $('#comp_modal');
    let imgHook = $('#comp-document');
    $(imgHook).attr('src', img);
    $(displayModal).modal('show');
});

//add competence from the user profile
$(document).on('click', '#add-competence', function(){
    $(this).fadeOut(300, function(){
        $('.add-comp-form').toggleClass('hide');
    });
});

$(document).on('click','#close-comp-ico', function(){
    $(this).parent('div').toggleClass('hide');
    $('#add-competence').fadeIn(300);
});

$(document).on('submit','#competence-form', function(e){
    e.preventDefault();
    let btn = $('#save-comp');
    $(btn).fadeOut(300, function(){
        $('.loader-ico').toggleClass('hide');
    });
    let formData = new FormData(this);
    console.log(formData.get('comp_name'));
    $.ajax({
      type: "POST",
      url: page_data.routes.add_comp,
      processData: false,
      contentType: false,
      data: new FormData(this),
      success: function(data){
        $('.loader-ico').toggleClass('hide');
        $(btn).fadeIn(300);
        console.log(data);
        //if theres an error 
        if (data.success === false) {
        //hide the already displayedd error msgs
          hideErrTxts();
          //get the errors array and loop through it
          let errors = data.errors;
          for (let i = 0; i < errors.length; i++) {
            //for each iteration, show the appropraite error msg
              displayErrors(errors[i]);
            }
        }else{
            let com_box = `<div class="shadow shadow-showcase p-25 text-center comp-box" id="competence-tab" data-toggle="tooltip" title="Click to view document" data-img="{{asset('assets/images/uploads/'.${data.comp.comp_doc})}}">
                                <h5 class="m-0 f-18">
                                    <i class="icofont icofont-certificate-alt-1"></i>
                                    <div class="comp-name">
                                        ${data.comp.comp_name}<br/>
                                    </div>
                                    <div class="exp_date">
                                        Exp: ${new Date(data.comp.exp_date).toDateString()}
                                    </div>
                                </h5>
                            </div>`;
            clearInputs('#competence-form');
            $(com_box).insertBefore($('#add-competence'));
        }
      }
    });
})

//function to check error messages and how appropriate error msg
function displayErrors(error)
{
    // use switch statement to check
    // in each case, remove the hide class from the error message
    // to reveal the error message for that field
    switch(error){

        case 'Title':;
             $('#title-error').removeClass('hide');
        break;

        case 'Document':
            $('#doc-error').removeClass('hide');
        break;

        case 'Expiry':
            $('#exp-error').removeClass('hide');
        break;        
    }
    return true;
}

function hideErrTxts()
{
    $('#title-error').addClass('hide');
    $('#doc-error').addClass('hide');
    $('#exp-error').addClass('hide');

    return true;
}

function clearInputs(form)
{
    let inputs = document.querySelectorAll(form+' input');
    for( let i = 0; i < inputs.length; i++){
        inputs[i].value = '';
    }

    return true;
}