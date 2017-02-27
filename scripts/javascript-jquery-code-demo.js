$(document).ready(function() {
  
  var $slideBtn = $('.slide-btn');
  var $slideOut = $('.slide-out');
  var $stepMenu = $('.step-menu');
  var $mainNav = $('.site-nav-bar');

  $stepMenu.hide();

  $slideBtn.click(function() {
    $stepMenu.animate({
      width: 'toggle'
    }, 'slow')
    $('.fa-chevron-right').toggleClass('fa-rotate-180', 'slow');
  });

});