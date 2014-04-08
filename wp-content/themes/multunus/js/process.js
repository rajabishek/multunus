$(document).ready(function() {

  window.goldenCircles = {
    $el: $('.why-us-image-section'),

    $: function(selector) {
      return this.$el.find(selector);
    },

    nextCircleOf: function(circle){
      return circle.prev().length ? circle.prev() : circle.siblings().addBack(circle).last();
    },

    activateCircle: function(circle) {
      var self = this;

      self.$('.golden-circle').removeClass('active').addClass('inactive');
      circle.removeClass('inactive').addClass('active');
    },

    showTabForCircle: function(circle) {
      var tab = $(circle.attr('data-tab'));

      this.$('.tab-pane').removeClass('active in');

      setTimeout(function() {
        tab.addClass('active in');
      }, 150);
    },

    activateCircleWithTab: function(circle) {
      this.activateCircle(circle);
      this.showTabForCircle(circle);
    },

    startAnimation: function() {
      var self = this;
      var currentCircle = self.$('.why-img');

      self.$('.big-picture-text.on-desktop, .big-picture-list').removeClass("in");

      setTimeout(function() {
        self.$('.big-picture-text.on-desktop').addClass('size-0');
        self.$('.big-picture-list').hide();
        self.$('.big-picture-img-container').addClass('col-md-5');
      }, 500); // Wait till the left and right sections disappear

      setTimeout(function() {
        self.goldenCirclesAutoAnimation = setInterval(function() {
          self.activateCircle(currentCircle);

          currentCircle = self.nextCircleOf(currentCircle);
          if(currentCircle.hasClass('why-img')) { // If one cycle is complete
            clearInterval(self.goldenCirclesAutoAnimation);

            setTimeout(function() {
              self.activateCircleWithTab(currentCircle);
              self.setupInteraction();
            }, 800); // Wait and then activate the first circle with tab and setup interaction
          }
        }, 800);
      }, 1000); // Wait a sec before starting the circles animation
    },

    setupCircleClick: function() {
      var self = this;

      self.$('.golden-circle').click(function() {
        var selectedCircle = $(this);
        self.activateCircleWithTab(selectedCircle);
      });
    },

    setupCircleHover: function() {
      var self = this;

      self.$('.golden-circle').hover(function() {
        $(this).removeClass('inactive');
      }, function() {
        $(this).addClass('inactive');
      });
    },

    setupInteraction: function() {
      this.setupCircleHover();
      this.setupCircleClick();
    },

    initialize: function() {
      var self = this;

      setTimeout(function() {
        self.startAnimation();
      }, 1500);
    }

  };

  if($(window).width() > 480) { // If non-mobile display
    window.goldenCircles.initialize();
  }

});