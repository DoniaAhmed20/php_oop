$(function () {
    $("#register-link").click(function () {
      $("#login-box").hide();
      $("#register-box").show();
    });
    $("#login-link").click(function () {
      $("#login-box").show();
      $("#register-box").hide();
    });
    $("#forgot-link").click(function () {
      $("#login-box").hide();
      $("#forgot-box").show();
    });
    $("#back-link").click(function () {
      $("#login-box").show();
      $("#forgot-box").hide();
    });
    //Register Ajax Request
    // $("#register-btn").click(function (e) {
    //     if($("#register-form")[0].checkValidity()){
    //         e.preventDefault();
    //         $("#register-btn").val('Please Wait...');
    //         if($("#rpassword").val() != $("#cpassword").val()){
    //             $("#passError").text("* password did not matched");
    //             $("#register-btn").val('Sign Up');

    //         }
    //         else{
    //             $("#passError").text("");
    //             $.ajax({
    //                 url: 'action.php',
    //                 method: 'post'
    //             });
    //         }
    //     }
    //   });
  });

  