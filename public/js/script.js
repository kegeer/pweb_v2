$(document).ready(function(){

  $('.toggle-view-custom').on('click', 'li', function () {

    var text = $(this).children('div.panel');

    if (text.is(':hidden')) {
      text.slideDown('10');
      $(this).children('.ui-accordion-header').addClass('ui-accordion-header-active');    
    } else {
      text.slideUp('10');
      $(this).children('.ui-accordion-header').removeClass('ui-accordion-header-active');   
    }

  });

});
