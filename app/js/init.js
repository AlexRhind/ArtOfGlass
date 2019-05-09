(function($){
  $(function(){

    $('.sidenav').sidenav();
    $('.parallax').parallax();
    //$("form-create").validate();
    $(".dropdown-trigger").dropdown();
    $('.modal').modal();
    $('.collapsible').collapsible();



    $('.carousel.carousel-slider').carousel(
        {fullWidth: true,
        indicators: true}
    );


    $(function(){
      $('#slider').rbtSlider({
        height: '70vh',
        'dots': true,
        'arrows': true,
        'auto': 4
      });
    });


  }); // end of document ready

})(jQuery); // end of jQuery name space
