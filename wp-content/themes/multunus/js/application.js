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

$(document).ready(function() {

  //Scroll Button
  $('[data-toggle=scroll]').click(function(e) {
    var targetElementId = $(this).attr('rel');

    if(targetElementId === 'top') {
      targetPosition = 0;
    } else {
      targetPosition = $(targetElementId).offset().top - $("nav").height(); //Offset the navbar height
    }

    $('html, body').animate({scrollTop: targetPosition}, 1000);
  });

  //Category list and dropdown
  $('.category-list-mobile ul li a').click(function() {
    var category = this.text;
    $(this).parents('ul').siblings('button').html(category);
  });

  $('.category-filter ul li a').click(function() {
    var selectedCategoryElement = $(this);
    selectedCategoryElement.parents('ul').find('li').removeClass('active');
    selectedCategoryElement.parents('li').addClass('active');
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

});