$(document).ready(function () {



  // CATEGORIES POPUP
  $("#category-popup-btn").click(function () {
    $(".category-popup").fadeIn();
  });
  $("#category-popup-close-btn").click(function () {
    $(".category-popup").fadeOut();
  });



});


function sendContact() {
  var valid;
  valid = validateContact();
  if (valid) {
    jQuery.ajax({
      url: "/sender.php",
      data: 'userName=' + $("#userName").val() + '&userEmail=' +
        $("#userEmail").val() + '&subject=' +
        $("#subject").val() + '&content=' +
        $(content).val() + '&phone='+
        $("#userPhone").val(),
      type: "POST",
      success: function (data) {
        $("#mail-status").html(data);
      },
      error: function () { }
    });
  }
}

function validateContact() {
  var valid = true;
  $(".demoInputBox").css('background-color', '');
  $(".info").html('');
  if (!$("#userName").val()) {
    $("#userName-info").html("(required)");
    $("#userName").css('background-color', '#FFFFDF');
    valid = false;
  }

  if (!$("#userEmail").val()) {
    $("#userEmail-info").html("(required)");
    $("#userEmail").css('background-color', '#FFFFDF');
    valid = false;
  }
  if (!$("#userPhone").val()) {
    $("#userPhone-info").html("(required)");
    $("#userPhone").css('background-color', '#FFFFDF');
    valid = false;
  }
  if (!$("#userEmail").val().match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
    $("#userEmail-info").html("(invalid)");
    $("#userEmail").css('background-color', '#FFFFDF');
    valid = false;
  }
  if (!$("#subject").val()) {
    $("#subject-info").html("(required)");
    $("#subject").css('background-color', '#FFFFDF');
    valid = false;
  }
  if (!$("#content").val()) {
    $("#content-info").html("(required)");
    $("#content").css('background-color', '#FFFFDF');
    valid = false;
  }
  return valid;
}