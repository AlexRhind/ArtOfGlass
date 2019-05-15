$( document ).ready(function() {

//GoMA Friends Create Account validation
$("#form-create").validate({

    //validClass : 'success',
    errorClass : 'formError',

    rules: {
          //Alina's rules
          //uses the name: value pair not id of the object
            Dec11Meet: {
                required: false,
                maxlength: 6,
            },
            Dec11Adult: {
                required: false,
                maxlength: 6,
            },
            Dec13Adult: {
                required: false,
                maxlength: 6,
            },
            Dec17Adult: {
                required: false,
                maxlength: 6,
            },

      },
      //Custom messages
      messages: {
          username: {
              required: "Please enter a username",
              minlength: "Usernames must have a minimum of 2 characters",
              //remote: jQuery.validator.format('{0} is already registered')
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

}); //end doc onready
