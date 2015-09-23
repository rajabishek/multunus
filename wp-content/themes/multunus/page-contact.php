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
          <div data-toggle="scroll" rel="#main-content" class="btn-red">Get in Touch<span></span></div>
        </div>
    </div>
  </div>

  <video autoplay="autoplay" loop="loop" poster="/img/contact-page-poster.jpeg" data-video-name="contact">
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
      <!-- Change the width and height values to suit you best -->
  <div class="typeform-widget" data-url="https://multunus-feedback.typeform.com/to/nGvoX3" data-text="Contact Us Form" style="width:100;height:320px;"></div>
  <script>(function(){var qs,js,q,s,d=document,gi=d.getElementById,ce=d.createElement,gt=d.getElementsByTagName,id='typef_orm',b='https://s3-eu-west-1.amazonaws.com/share.typeform.com/';if(!gi.call(d,id)){js=ce.call(d,'script');js.id=id;js.src=b+'widget.js';q=gt.call(d,'script')[0];q.parentNode.insertBefore(js,q)}})()</script>

      <!-- <div style="font-family: Sans-Serif;font-size: 12px;color: #999;opacity: 0.5; padding-top: 5px;">Powered by <a href="http://www.typeform.com/?utm_campaign=typeform_nGvoX3&amp;utm_source=website&amp;utm_medium=typeform&amp;utm_content=typeform-embedded&amp;utm_term=English" style="color: #999" target="_blank">Typeform</a></div> -->
      <script type="text/javascript">
      // document.getElementById("typeform").contentWindow.focus()
      </script>
    </div>
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

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCbJH0CjhwXWdmqq5Hz9m3iBwEA7giflHQ&sensor=false&v=3"></script>

<script>
function initialize() {
  var Latlng = new google.maps.LatLng(12.910562, 77.589097);
  var myOptions = {
    zoom: 3,
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
    '<a target="_blank" href="https://maps.google.com/maps?f=q&source=s_q&hl=en&geocode=&q=Multunus+Software+Pvt+Ltd,+9th+Cross+Road,+Phase+II,+J+P+Nagar,+Bangalore,+Karnataka,+India&aq=0&oq=multunus&sll=12.953997,77.63094&sspn=0.836455,1.229095&vpsrc=0&ie=UTF8&hq=multunus+software+pvt+ltd&hnear=9th+Cross+Rd,+Phase+II,+J+P+Nagar,+Bangalore,+Bangalore+Urban,+Karnataka,+India&ll=12.910541,77.588925&spn=0.006536,0.009602&t=m&z=17&iwloc=A&cid=14451696054480489098">We are here</a>'+
    '<p>No. 1316/A, 2nd floor,</p>'+
    '<p>9th Cross, JP Nagar 2nd Phase,</p>'+
    '<p>Bangalore - 560078</p>'+
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
