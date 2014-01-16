$(document).ready(function() {
  $('.portfolio-filter ul li a').click(function() {
    var selectedElement = $(this);
    selectedElement.parents('.portfolio-filter').find('ul li').removeClass('active');
    selectedElement.parents('li').addClass('active');

    category = selectedElement.data().category;
    $('.portfolio-list figure').addClass('hidden');
    $(".portfolio-list figure[data-category*='" + category + "']").removeClass('hidden');
  });

  $(".portfolio-filter ul li a[data-category='all']").click(function() {
    $('.portfolio-list figure').removeClass('hidden');
  });

  $('.portfolio-filter .category-list-mobile ul li a').click(function() {
    var category = this.text;
    $(this).parents('ul').siblings('button').html(category);
  });
});