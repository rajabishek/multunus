<?php
/*
 * Template Name: Contact Us
 */
?>
<?php get_header(); ?>
<section id="main-content" class="container">
    <h1 class="align-center">Let's work together</h1>
</section>

<div class="form-container">
    <script type="text/javascript">var submitted=false;</script>
    <iframe name="hidden_iframe" id="hidden_iframe" style="display:none;" onload="if(submitted) {window.location='whateveryourredirectis.html';}"></iframe>

    <h2>Write To Us</h2>
    <a href="mailto:info@multunus.com" class="mail-us hidden-ipad">Or Just email us at info@multunus.com</a>
    <a href="mailto:info@multunus.com" class="mail-us visible-ipad">Email us at info@multunus.com</a>
    <!-- Change the width and height values to suit you best -->
    <div class="typeform-widget" data-url="https://multunus-feedback.typeform.com/to/nGvoX3" data-text="Contact Us Form" style="width:100;height:320px;"></div>
    <script>
    (function(){var qs,js,q,s,d=document,gi=d.getElementById,ce=d.createElement,gt=d.getElementsByTagName,id='typef_orm',b='https://s3-eu-west-1.amazonaws.com/share.typeform.com/';if(!gi.call(d,id)){js=ce.call(d,'script');js.id=id;js.src=b+'widget.js';q=gt.call(d,'script')[0];q.parentNode.insertBefore(js,q)}})()
    </script>
</div>
<?php get_footer(); ?>
