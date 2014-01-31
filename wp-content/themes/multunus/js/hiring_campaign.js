$(document).ready(function() {
  if($(window).width() > 480) { // If non-mobile display
    setTimeout(function() {
      $('#Stage').removeClass('in');
      $('.something').addClass('in');
    },7000);
  } else {
    setTimeout(function() {
      $('#Stage').removeClass('in');
      $('.something').addClass('in');
    },800);
  }
});