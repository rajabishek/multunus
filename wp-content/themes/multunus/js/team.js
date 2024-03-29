$(document).ready(function() {
  window.teamGrid = {
    $el: $('.team-grid'),

    $: function(selector) {
      return this.$el.find(selector);
    },

    profileElement: $('.team-grid .team-images .profile'),

    hideProfileDetails: function() {
      this.profileElement.addClass('hidden');
    },

    populateProfileDetails: function(profileData) {
      this.profileElement.find('.image-container img').attr('src', profileData.imageBig);
      this.profileElement.find('h2').html(profileData.name);
      this.profileElement.find('h4').html(profileData.position);
      this.profileElement.find('.bio').html(profileData.bio);

      var socialLinks =  this.profileElement.find('.social-links');

      $.each(['github','twitter','linkedin'], function(index, socialNetwork) {
        var linkElement = socialLinks.find('.' + socialNetwork);

        linkElement.attr('href', profileData[socialNetwork]);

        if(profileData[socialNetwork]) {
          linkElement.parent().removeClass('hidden');
        } else {
          linkElement.parent().addClass('hidden');
        }

      });
    },

    deactivateAllImages: function() {
      this.$('.team-images figure').removeClass('active');
    },

    setupCategorySelection: function() {
      var self = this;

      self.$('.team-filter ul li a').click(function() {
        self.hideProfileDetails();
        self.deactivateAllImages();
        var category = $(this).data().category;

        self.$('.team-images figure').addClass('hidden');
        self.$(".team-images figure[data-category='" + category + "']").removeClass('hidden');
      });

      self.$(".team-filter ul li a[data-category='all']").click(function() {
        self.$('.team-images figure').removeClass('hidden');
      });
    },

    lastElementInTheRowOf: function(selectedElement) {
      var lastElementInCurrentRow;

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

      return lastElementInCurrentRow;
    },

    setupIndividualImageClick: function() {
      var self = this;

      self.$('.team-images figure').click(function(event) {
        var selectedElement = $(this);

        var lastElementInCurrentRow = self.lastElementInTheRowOf(selectedElement);

        self.hideProfileDetails();

        self.deactivateAllImages();

        selectedElement.addClass('active');

        self.populateProfileDetails(selectedElement.data());

        $('html, body').animate({
          scrollTop: selectedElement.position().top - $("nav").height()
        },
        {
          duration: 'slow',
          start: function() {
            self.profileElement.removeClass('hidden').insertAfter(lastElementInCurrentRow);
          }
        });

      });
    },

    initialize: function() {
      this.setupCategorySelection();
      this.setupIndividualImageClick();
    }
  };

  teamGrid.initialize();
});