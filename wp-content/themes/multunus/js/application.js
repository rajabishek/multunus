$(function() {

  isMobileDevice = function() {
    if(/mobile.+firefox/i.test(navigator.userAgent)){
      return false;
    }
    if( /Android|iPhone|iPad|iPod/i.test(navigator.userAgent)) {
      return true;
    }
    return false;
  };

  hasBackgroundVideo = function() {
    return $('.video-section-container video').length > 0 ;
  };

  loadBackgroundVideo = function() {
    var videoElement = $('.video-section-container video');
    var videoName = videoElement.data().videoName;
    var cloudfrontURL = "https://d3i6m9q7qxxzav.cloudfront.net/Videos/" + videoName;
    var formats = ["ogg", "mp4", "webm"];

    formats.forEach(function(format) {
      videoElement.append(
        $('<source>',
        {
          src: cloudfrontURL + '.' + format,
          type: "video/" + format
        }
        ));
    });

    // $('video').on('canplay', function() {
    //   $('.video-section-container .overlay').css('-webkit-transform', 'scale(1)'); //trying to redraw
    // });

  };

  setupScrollButton = function() {
    $('[data-toggle=scroll]').click(function(e) {
      var targetElementId = $(this).attr('rel');

      if(!targetElementId) {
        targetPosition = 0;
      } else {
        targetPosition = $(targetElementId).offset().top - $("nav").height(); //Offset the navbar height
      }

      $('html, body').animate({scrollTop: targetPosition}, 1000);
    });
  };

  setupCategoriesDropdownInteraction = function() {
    $('.category-list-mobile ul li a').click(function() {
      var category = this.text;
      $(this).parents('ul').siblings('button').html(category);
    });

    $('.category-filter ul li a').click(function() {
      var selectedCategoryElement = $(this);
      selectedCategoryElement.parents('ul').find('li').removeClass('active');
      selectedCategoryElement.parents('li').addClass('active');
    });
  };

  window.navbar = {
    blinkerElement: $('.navbar .blinker'),

    startBlinker: function() {
      var self = this;
      self.headerBlinkerTimerId = setInterval(function() {
        setTimeout(function() {
          self.blinkerElement.find('.tagline').toggleClass("active");
        }, 1000);
        setTimeout(function() {
          self.blinkerElement.find('.contact-no').toggleClass("active");
        }, 1000);
      }, 4000);
    },

    setupBlinkerHoverHandler: function() {
      var self = this;
      self.blinkerElement.find('.navbar-text').hover(function() {
        clearInterval(self.headerBlinkerTimerId);
      },
      function() {
        self.startBlinker();
      });
    },

    setupBlinker: function() {
      this.startBlinker();
      this.setupBlinkerHoverHandler();
    },

    setupNavBarCollapse: function() {
      var collapseElement = $('.navbar #navbar-collapse');

      $(document).on('click',function(){
        if(!collapseElement.hasClass('collapse')) {
          collapseElement.collapse('hide');
        }
      });

      collapseElement.on('hidden.bs.collapse', function () {
        $('.navbar .navbar-toggle').addClass('collapsed');
      });
    },

    init: function() {
      this.setupNavBarCollapse();
      this.setupBlinker();
    }
  };

  window.navbar.init();
  window.setupScrollButton();
  window.setupCategoriesDropdownInteraction();

  if(hasBackgroundVideo() && !isMobileDevice()) {
    window.loadBackgroundVideo();
  }
});