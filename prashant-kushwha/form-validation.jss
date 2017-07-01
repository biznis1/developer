$(function() {
  $("form[name='shpwd']").validate({
    // Specify validation rules
    rules: {
      pwd: {
        required: true,
        minlength: 8
      }
    },
    messages: {
      pwd: {
        required: "<span style='color:red'>* Please provide a password</span>",
        minlength: "<span style='color:red'>* Your password must be at least 8 characters long</span>"
      }
    }
    
  });

   $("#sub").click(function(event) {
         alert("Thank you very much! Your data has been successfully submitted!");
    });
});