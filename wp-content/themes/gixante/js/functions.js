$( document ).ready(function() {

    windowWidth = $(window).width();
    windowHeight = $(document).height();

    // slideshow home
    /*$('.slideshow').cycle({ 
        fx:    'fade', 
        speed:  5000 
    });*/
     $('#maximage').maximage({
        cycleOptions: {
            fx: 'fade',
            // Speed has to match the speed for CSS transitions
            speed: 1000, 
            timeout: 7000
        },
        // cssBackgroundSize might be causing choppiness in retina display safari
        cssBackgroundSize: true 
    });   


    $(window).load(function () {  
        $('#maximage, .background-image').fadeTo(500, 1);
    });         
    
    // slideshow gallery
    $('.gallery-slideshow').cycle({ 
        fx:    'fade', 
        speed:  5000 
    });   

    //contact bg height 100% fix
    if ($('body').hasClass("contact")) {
        console.log(windowHeight);
    }



    // form
    $("form .form-element select").customSelect( function() {
    });
    var pickerOpts = {
        dateFormat:"dd/mm/yy",
        minDate: 0 
    };
    $("#startDate").datepicker(pickerOpts); 

    $(".book-table a").click(function(e) {
        e.preventDefault(); 
        document.ism.RestaurantReferralID.value = document.ism.RestaurantID.value;
        dateVal = $('#startDate').val();                             
        $("form#ism").trigger( "submit" );
    }); 

    // gallery
    caption = $("#slider ul li:eq(0) .caption").text();
    $(".caption-container").text(caption);
    pagenumber = $("#slider ul li:eq(0) .pagenumber").text();
    $(".pagenumber-container").text(pagenumber);    
    var slider = new Swipe(document.getElementById('slider'), {
        speed: 500,
        callback: function(index, elem) {
          caption = $("#slider ul li:eq("+elem+") .caption").text();
          pagenumber = $("#slider ul li:eq("+elem+") .pagenumber").text();
          $(".caption-container").text(caption);
          $(".pagenumber-container").text(pagenumber);
        }          
    });

    $( ".prev" ).click(function(e) {
        e.preventDefault();
        slider.prev();
    });             
    
    $( ".next" ).click(function(e) {
        e.preventDefault();
        slider.next();
    }); 


    // gallery
    /*$( ".gallery .image a" ).mouseover(function() {
        $(this).find("img:eq(0)").hide();
        $(this).find("img:eq(1)").show();        
    }).mouseout(function() {
        $(this).find("img:eq(0)").show();
        $(this).find("img:eq(1)").hide(); 
    });*/      

    // responsive
    $(".showhide-nav").click(function() {
        $(".nav").toggle();
    });  

    // rosettes
    $( ".rosettes-box" ).mouseover(function() {
        $('.rosettes-text').css('visibility','visible');
    }).mouseout(function() {
        $('.rosettes-text').css('visibility','hidden');
    });        

    // if Modernizr detects class "touch"
    if($('html').hasClass('touch')) {
        // for each element with class "make-tel-link"
        $(".make-tel-link").each(function () {
            var jPhoneNumber = $(this).text();
            // wrap phone with href="tel:" and then insert phone number
            $(this).wrapInner('<a class="jPhoneLink" href=""></a>');
            $('.jPhoneLink').attr('href', 'tel:'+jPhoneNumber);
        });
    }                 


});





