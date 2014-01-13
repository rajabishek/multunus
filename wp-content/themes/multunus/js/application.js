$(function() {
  window.header = {
  /** header JS **/
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
    }
  };
  /** header JS **/

  window.HOMEPAGE = {
    toggleHomePageVideo: function(){
      if(this.isMobileDevice()){
        $(".video-section-container").addClass("mobile-device");
      }
    },
    isMobileDevice: function() {
      if(/mobile.+firefox/i.test(navigator.userAgent)){
        return false;
      }
      if( /Android|iPhone|iPad|iPod/i.test(navigator.userAgent)) {
        return true;
      }
      return false;
    }
  };

  window.header.setupBlinker();
  window.header.setupNavBarCollapse();
  window.HOMEPAGE.toggleHomePageVideo();

});

// 'explore' button should scroll to 'main-content'
// get offset of 'main-content' from top of the viewport
// get height of 'navbar'
// subtract height from offset and scroll to that location
$(document).ready(function() {
  $('[rel=#main-content]').click(function(e) {
    $('html, body').animate({scrollTop: $("#main-content").offset().top - $("nav").height()}, 1000);
  });

  $('[rel=#open-positions], [rel=#career-details]').click(function(e) {
    $('html, body').animate({scrollTop: $("#open-positions, #career-details").offset().top - $("nav").height()}, 2000);
  });

  $('[href=#back-to-top]').click(function(e) {
    $('html, body').animate({scrollTop: 0}, 500);
    return false;
  });

  // 'recent work' video button
  $('.client-video, #founder-video').click(function (e) {
    if (window.HOMEPAGE.isMobileDevice()) {
      $(this).attr({
        href: $(this).attr('href').replace('v/', 'watch?v='),
        target: '_blank'
      });
    }
    else {
      e.preventDefault();

      $('#myModal').modal('show');
      $('#myModal iframe').attr({
        width: '630px',
        height: '380px',
        src: $(this).attr('href')
      });
    }
  });

  // remove 'src' attribute from iframe when user clicks on close button
  $('#myModal button').click(function () {
    $('#myModal iframe').removeAttr('src');
  });

  $('.team-filter ul li a').click(function() {
    $('.team-images .profile').addClass('hidden');
    $('.team-images figure').removeClass('active');
    var selectedElement = $(this);
    selectedElement.parents('ul').find('li').removeClass('active');
    selectedElement.parents('li').addClass('active');

    var category = selectedElement.data().category;
    $('.team-images figure').removeClass('hidden');
    $(".team-images figure[data-category!='" + category + "']").addClass('hidden');
  });

  $(".team-filter ul li a[data-category='all']").click(function() {
    $('.team-images figure').removeClass('hidden');
  });

  $('.team-filter .category-list-mobile ul li a').click(function() {
    var category = this.text;
    $(this).parents('ul').siblings('button').html(category);
  });

  $('.team-images figure').click(function(event) {
    selectedElement = $(this);
    var profileData = selectedElement.data();
    var profileElement = $('.team-images .profile').addClass('hidden');
    var lastElementInCurrentRow;

    $('.team-images figure').removeClass('active');
    selectedElement.addClass('active');

    if(selectedElement.nextAll().not('.hidden').length === 0) {
      lastElementInCurrentRow = selectedElement;
    } else {
      selectedElement.nextAll().not('.hidden').each(function(index, element) {
        if($(element).position().top !== selectedElement.position().top) {
          lastElementInCurrentRow = $(element).prev();
          return false;
        }
        lastElementInCurrentRow = $(element);
      });
    }

    profileElement.find('.image-container img').attr('src', profileData.imageBig);
    profileElement.find('h2').html(profileData.name);
    profileElement.find('h4').html(profileData.position);
    profileElement.find('.bio').html(profileData.bio);

    socialLinks =  profileElement.find('.social-links');
    socialLinks.find('.github').attr('href', profileData.github);

    if(profileData.github) {
      socialLinks.find('.github').parent().removeClass('hidden');
    } else {
      socialLinks.find('.github').parent().addClass('hidden');
    }

    if(profileData.twitter) {
      socialLinks.find('.twitter').parent().removeClass('hidden');
    } else {
      socialLinks.find('.twitter').parent().addClass('hidden');
    }

    $('html, body').animate({
      scrollTop: selectedElement.position().top - 64
    },
    {
      duration: 'slow',
      start: function() {
        profileElement.removeClass('hidden').insertAfter(lastElementInCurrentRow);
      }
    });

  });

  $('.portfolio-filter ul li a').click(function() {
    var selectedElement = $(this);
    selectedElement.parents('ul').find('li').removeClass('active');
    selectedElement.parents('li').addClass('active');

    var category = selectedElement.data().category;
    $('.portfolio-list figure').removeClass('hidden');
    $(".portfolio-list figure[data-category!='" + category + "']").addClass('hidden');
  });

  $(".portfolio-filter ul li a[data-category='all']").click(function() {
    $('.portfolio-list figure').removeClass('hidden');
  });

  $('.portfolio-filter .category-list-mobile ul li a').click(function() {
    var category = this.text;
    $(this).parents('ul').siblings('button').html(category);
  });
});


$(document).ready(function() {

  window.goldenCircles = {
    $el: $('.why-us-image-section'),

    $: function(selector) {
      return this.$el.find(selector);
    },

    nextCircleOf: function(givenCircle){
      return givenCircle.prev().length ? givenCircle.prev() : givenCircle.siblings().addBack(givenCircle).last();
    },

    activateCircle: function(selectedCircle) {
      var correspondingTab = $(selectedCircle.attr('data-tab'));

      this.$('.golden-circle').removeClass('active').addClass('inactive');
      this.$('.tab-pane').removeClass('active in');

      setTimeout(function() {
        selectedCircle.removeClass('inactive').addClass('active');
        correspondingTab.addClass('active in');      
      }, 150);
    },

    startAnimation: function() {
      var self = this;
      var currentCircle = self.$('.why-img');

      self.$('.big-picture-text.on-desktop, .big-picture-list').removeClass("in");

      setTimeout(function() {
        self.$('.big-picture-text.on-desktop').addClass('size-0');
        self.$('.big-picture-img-container').addClass('col-md-6');
        self.$('.big-picture-list').hide();
      }, 500);

      self.goldenCirclesAutoAnimation = setInterval(function() {
        self.activateCircle(currentCircle);
        currentCircle = self.nextCircleOf(currentCircle);
      }, 3000);
    },

    setupCircleClick: function() {
      var self = this;

      self.$('.big-picture-img-container .golden-circle').click(function() {
        clearInterval(self.goldenCirclesAutoAnimation);
        var selectedCircle = $(this);
        self.activateCircle(selectedCircle);
      });
    },

    initialize: function() {
      var self = this;

      setTimeout(function() {
        self.startAnimation();
        self.setupCircleClick();
      }, 3000);
    }

  };

  window.goldenCircles.initialize();
});