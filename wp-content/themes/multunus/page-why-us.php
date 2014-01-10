<?php
/**
 * Template Name: Why Us
 */
get_header();

?>
<section class="why-us-page">
  <div class="why-us-image-section">
    <div class="container">
      <div class="row">
        <div class="col-md-4 hidden-xs hidden-sm on-desktop big-picture-text fade in">
          <h1>The<br />Big Picture</h1>
        </div>

        <div class="col-md-12 visible-sm visible-xs align-center on-mobile big-picture-text">
          <h1>The Big Picture</h1>
        </div>

        <div class="col-md-4 big-picture-img-container">
          <figure>
            <a href="#what" data-toggle="tab" class="golden-circle what-img"></a>
            <a href="#how" data-toggle="tab" class="golden-circle how-img"></a>
            <a href="#why" data-toggle="tab" class="golden-circle why-img"></a>
          </figure>
        </div>

        <div class="col-md-4 col-sm-12 big-picture-list fade in">
          <ul>
            <li><a class="red-text" href="#">Why</a></span> we exist?</li>
            <li><a class="red-text" href="#">How</a></span> we achieve<br /> our mission?</li>
            <li><a class="red-text" href="#">What</a></span> we do on a<br /> daily basis?</li>
          </ul>
        </div>

        <div class="tab-content col-md-6 col-sm-12">
          <div class="tab-pane fade in" id="why">
            <h1><span class="red-text">Why</span> we exist?</h1>
            <h3>Help Enterpreneurs succeed</h3>
            <p>
              Raw denim you probably haven't heard of them jean shorts Austin.
              Nesciunt tofu stumptown aliqua, retro synth master cleanse.
              Mustache cliche tempor, williamsburg carles vegan helvetica.
            </p>
          </div>

          <div class="tab-pane fade in" id="how">
            <h1><span class="red-text">How</span> we achieve our mission?</h1>
            <h3>Better products, with deliberate discovery</h3>
            <p>
              Raw denim you probably haven't heard of them jean shorts Austin.
              Nesciunt tofu stumptown aliqua, retro synth master cleanse.
              Mustache cliche tempor, williamsburg carles vegan helvetica.
            </p>
          </div>

          <div class="tab-pane fade in" id="what">
            <h1><span class="red-text">What</span> we do on a daily basis?</h1>
            <h3>Culture + Process + Technology &divamp; Tools </h3>
            <p>
              Raw denim you probably haven't heard of them jean shorts Austin.
              Nesciunt tofu stumptown aliqua, retro synth master cleanse.
              Mustache cliche tempor, williamsburg carles vegan helvetica.
            </p>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>