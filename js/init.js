(function($){
  $(function(){
    $('.button-collapse').sideNav();
    $('.parallax').parallax();
    $('.carousel').carousel();
    $("#rslides_index").responsiveSlides({
        auto: true,
        speed: 1000,
        timeout: 4500,
        pager: false,
        nav: true
    });
      
    $("#slider_wolle").responsiveSlides({
        manualControls: '#slider_wolle-pager',
        maxwidth: 540
    });
    
    $(".toggler").click(function(){
        $("#togglee").toggle();
        $(".toggler").toggle();
    });
   
    $('.collapsible').collapsible({
      accordion : false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
    });
  }); // end of document ready
})(jQuery); // end of jQuery name space
