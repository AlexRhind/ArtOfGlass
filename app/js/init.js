(function($){
  $(function(){

    $('.sidenav').sidenav();
    $('.parallax').parallax();
    //$("form-create").validate();
    $(".dropdown-trigger").dropdown();
    $('.modal').modal();


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

    //GoMA Friends Create Account validation
    $("#form-create").validate({

        //validClass : 'success',
        errorClass : 'formError',

        rules: {
              //uses the name = value not the id of the object
                username: {
                    required: true,
                    minlength: 2,
                    remote: "../checkUserName.php"
                },
                email: {
                    required: true,
                    email: true
                },
                password: {
                    required: true,
                    minlength: 4
                },
                repeatPassword: {
                    required: true,
                    minlength: 4,
                    equalTo: "#password"
                }
          },
          //Custom messages
          messages: {
              username: {
                  required: "Please enter a username",
                  minlength: "Usernames must have a minimum of 2 characters",
                  remote: "That username is in use. Would you like to <a href='login.php'></a>?"
              },
                  email: {
                  required: "Please enter your email address",
                  email: "Please enter a valid email address"
              },
              password: {
                  required: "Please enter a password",
                  minlength: "Password must be at least 4 characters"
              },
              repeatPassword: {
                  required: "Please confirm your password",
                  minlength: "Password must be at least 4 characters",
                  equalTo: "Passwords do not match"
              }
            }
          }); //end of validate

  }); // end of document ready
})(jQuery); // end of jQuery name space
