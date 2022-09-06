console.log("form page linked")
$("#contact-form").validate({
    rules:{
        name:{
            minlength:2
        },
        email:{
            email:true
        },
        subject:{
            minlength:5
        }
    },
    messages:{
        name:{
            required:"Please enter your first name",
            minlength:"First name at least 2 characters"
        },
        email:{
            required:"Please enter your email"
        },
        subject:{
            required:"Subject is required",
            minlength:"Please enter at least 3 words."
        }
    },

    submitHandler: function(form) {
      form.submit();
    }
});

