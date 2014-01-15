<?php 
/*
 * Template Name: Contact Us
 */
?>

<?php get_header(); ?>

<div class="video-section-container contact-page">
  <div class="overlay">
    <div class="overlay-content">
      <h1 id="quote">Namaste! We'd love to hear from you.</h1>
        <div class="hidden-xs">
          <div rel="#main-content" class="btn-red">Get in Touch<span></span></div>
        </div>
    </div>
  </div>

  <video tabindex="0" autoplay loop>
    <source src="http://multunus_website.s3.amazonaws.com/wp-content/uploads/2013/12/1.mp4" type="video/mp4" />
    <source src="http://multunus_website.s3.amazonaws.com/wp-content/uploads/2013/12/2.mp4" type="video/mp4" />
  </video>
</div>

<section id="main-content" class="container">
  <h1 class="align-center">Find us on the map</h1>
</section><!-- end of get-in-touch -->

<section class="multunus-gmap">
  <div id="map">
  </div>

  <div class="form-container">
    <script type="text/javascript">var submitted=false;</script>
    <iframe name="hidden_iframe" id="hidden_iframe" style="display:none;" onload="if(submitted) {window.location='whateveryourredirectis.html';}"></iframe>

    <h2>Write To Us</h2>
    <a href="mailto:info@multunus.com" class="mail-us hidden-ipad">Or Just email us at info@multunus.com</a>
    <a href="mailto:info@multunus.com" class="mail-us visible-ipad">Email us at info@multunus.com</a>
    <?php echo $response; ?>
    <form action="http://docs.google.com/a/multunus.com/spreadsheet/formResponse?formkey=dDRNZFlZYUxqbGNpSEpzVGhiU2JZR1E6MQ&amp;ifq" method="POST" target="hidden_iframe" id="ss-form">
      <div class="form-group ss-form-entry">
        <label class="ss-q-title" for="entry_0">Name <span>*</span></label>
        <label class="ss-q-help" for="entry_0"></label>
        <input type="text" name="entry.0.single" value="" class="ss-q-short" id="entry_0">
      </div>

      <div class="form-group ss-form-entry">
        <label class="ss-q-title" for="entry_1">Email <span>*</span></label>
        <label class="ss-q-help" for="entry_1"></label>
        <input type="text" name="entry.1.single" value="" class="ss-q-short" id="entry_1">
      </div>

      <div class="form-group ss-form-entry">
        <label class="ss-q-title" for="entry_4">Message <span>*</span></label>
        <label class="ss-q-help" for="entry_4"></label>
        <textarea name="entry.4.single" rows="4" cols="75" class="ss-q-long" id="entry_4"></textarea>
      </div>

      <input type="hidden" name="pageNumber" value="0">
      <input type="hidden" name="backupCache" value="">

      <div class="ss-form-entry">
        <input type="submit" name="submit" value="Submit">
        <span></span>
      </div>

      <div class="notification success" style="display:none;">
        <img src="/img/tick-arrow-white-icon.png" />
        Thanks! We'll get in touch soon
      </div>
    </form>
  </div><!-- end of form-container -->

  <div id="map-inner-shadow">
  </div>
</section>

<section class="latest-tweet-section">
  <div class="container align-center">
    <?php dynamic_sidebar( 'twitter-widget' ); ?>
    <a href="https://twitter.com/multunus" class="twitter-follow-button"
      data-show-count="false" data-lang="en">Follow @multunus</a>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
  </div>
</section>

<script type="text/javascript">
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
</script>

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyASm3CwaK9qtcZEWYa-iQwHaGi3gcosAJc&sensor=false"></script>

<script>
function initialize() {
  var Latlng = new google.maps.LatLng(12.910562, 77.589097);
  var myOptions = {
    zoom: 15,
    center: Latlng,
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    scrollwheel: false,
    navigationControl: false,
    mapTypeControl: false,
    scaleControl: false,
    draggable: false,
    styles: [{"featureType":"landscape","stylers":[{"saturation":-100},{"lightness":65},{"visibility":"on"}]},{"featureType":"poi","stylers":[{"saturation":-100},{"lightness":51},{"visibility":"simplified"}]},{"featureType":"road.highway","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"road.arterial","stylers":[{"saturation":-100},{"lightness":30},{"visibility":"on"}]},{"featureType":"road.local","stylers":[{"saturation":-100},{"lightness":40},{"visibility":"on"}]},{"featureType":"transit","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"administrative.province","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"labels","stylers":[{"visibility":"on"},{"lightness":-25},{"saturation":-100}]},{"featureType":"water","elementType":"geometry","stylers":[{"hue":"#ffff00"},{"lightness":-25},{"saturation":-97}]}]
  };

  var map = new google.maps.Map(document.getElementById('map'), myOptions);
  map.panBy(-300,-100);

  var contentString = '<div id="map-content">'+
    '<a href="https://maps.google.com/maps?f=q&source=s_q&hl=en&geocode=&q=Multunus+Software+Pvt+Ltd,+9th+Cross+Road,+Phase+II,+J+P+Nagar,+Bangalore,+Karnataka,+India&aq=0&oq=multunus&sll=12.953997,77.63094&sspn=0.836455,1.229095&vpsrc=0&ie=UTF8&hq=multunus+software+pvt+ltd&hnear=9th+Cross+Rd,+Phase+II,+J+P+Nagar,+Bangalore,+Bangalore+Urban,+Karnataka,+India&ll=12.910541,77.588925&spn=0.006536,0.009602&t=m&z=17&iwloc=A&cid=14451696054480489098">We are here</a>'+
    '<p>No. 1316/A, 2nd floor,</p>'+
    '<p>9th Cross, JP Nagar 2nd Phase,</p>'+
    '<p>Bangalore</p>'+
    '<p>Karnataka - 560078</p>'+
    '</div>';

  var infowindow = new google.maps.InfoWindow({
    content: contentString
  });

  var marker = new google.maps.Marker({
    position: myOptions.center,
    map: map
  });

  google.maps.event.addListener(marker, 'click', function() {
    infowindow.open(map,marker);
  });

  infowindow.open(map,marker);
}

google.maps.event.addDomListener(window, 'load', initialize);

</script>

<?php get_footer(); ?>