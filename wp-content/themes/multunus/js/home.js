$(function() {
  window.homePage = {
    $el: $('.home-page'),

    $: function(selector) {
      return this.$el.find(selector);
    },

    setupTestimonialVideoInteraction: function() {
      var self = this;

      self.$('.client-video, #founder-video').click(function (e) {
        if (window.isMobileDevice()) {
          $(this).attr({
            href: $(this).attr('href').replace('v/', 'watch?v='),
            target: '_blank'
          });
        }
        else {
          e.preventDefault();

          $('#testimonialVideo').modal('show');
          $('#testimonialVideo iframe').attr({
            width: '630px',
            height: '380px',
            src: $(this).attr('href')
          });
        }
      });

      // remove 'src' attribute from iframe when user clicks on close button
      self.$('#testimonialVideo [data-dismiss="modal"]').click(function () {
        self.$('#testimonialVideo iframe').removeAttr('src');
      });
    }
  };

  $('.testimonials').slick({
      arrows: false,
      responsive: [
        {
          breakpoint: 1024,
          settings: "unslick"
        }, 
        {
          breakpoint: 600,
          settings: {
              slidesToShow: 2,
              slidesToScroll: 2
          }
        }, 
        {
          breakpoint: 480,
          settings: {
              slidesToShow: 1,
              slidesToScroll: 1
          }
        }
      ]
  });

  $('.carousel-next-button').click(function() { 
      $(".testimonials").slickPrev(); 
  });

  $('.carousel-prev-button').click(function() { 
      $(".testimonials").slickPrev(); 
  });
  
});