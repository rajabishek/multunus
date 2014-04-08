$(function() {
  var form = $('#ss-form');
  form.validate({
    errorClass: 'invalid',
    errorPlacement: function(error, element) {
      element.attr("placeholder", error.text());
    },
    rules: {
      'entry.0.single': { required: true, maxlength: 25 },
      'entry.1.single': { required: true, email: true },
      'entry.4.single': { required: true, maxlength: 1000 }
    },
    messages: {
      'entry.0.single': { required: "Name is required" },
      'entry.1.single': { required: "Email id is required" },
      'entry.4.single': { required: "Message is required" }
    },
  });

  $("#hidden_iframe").load(function (){
    $("#ss-form input[type='text'], #ss-form textarea").val('');
    $('input[type="submit"]').hide();
    $('.notification').show();
  });
});