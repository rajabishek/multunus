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
// get height of 'main-content'
// subtract height from offset and scroll to that location
$(document).ready(function() {
  $('a[rel=#main-content]').click(function(e) {
    $('html, body').animate({scrollTop: $("#main-content").offset().top - $("#main-content").height()}, 1000);
  });

  // 'recent work' video button
  $('#client-video').click(function (e) {
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

  $('.team-sort ul li a').click(function() {
    $('.team-images .profile').addClass('hidden');
    $('.team-images figure').removeClass('active');
    var selectedElement = $(this);
    selectedElement.parents('ul').find('li').removeClass('active');
    selectedElement.parents('li').addClass('active');

    var category = selectedElement.data().category;
    $('.team-images figure').removeClass('hidden');
    $(".team-images figure[data-category!='" + category + "']").addClass('hidden');
  });

  $(".team-sort ul li a[data-category='all']").click(function() {
    $('.team-images figure').removeClass('hidden');
  });

  $('.team-sort .category-list-mobile ul li a').click(function() {
    var category = this.text;
    $(this).parents('ul').siblings('button').html(category + "<span class='caret'></span>");
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
    socialLinks.find('.twitter').attr('href', profileData.twitter);

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
});























