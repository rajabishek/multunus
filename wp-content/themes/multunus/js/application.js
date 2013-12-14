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
      $(document).on('click',function(){
          $('.navbar #navbar-collapse').collapse('hide');
      });

      $('.navbar #navbar-collapse').on('hidden.bs.collapse', function () {
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
// get height of 'main-content'
// subtract height from offset and scroll to that location
$(document).ready(function() {
  $('a[rel=#main-content]').click(function(e) {
    $('html, body').animate({scrollTop: $("#main-content").offset().top - $("#main-content").height()}, 1000);
  });

  // 'recent work' video button
  $('#client-video').click(function (e) {
    e.preventDefault();

    $('#myModal').modal('show');
    $('#myModal iframe').attr({
      width: '630px',
      height: '380px',
      src: $(this).attr('href')
    });
  });

  // remove 'src' attribute from iframe when user clicks on close button
  $('#myModal button').click(function () {
    $('#myModal iframe').removeAttr('src');
  });

});
