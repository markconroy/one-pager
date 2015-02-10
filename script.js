// A $( document ).ready() block.
$( document ).ready(function() {
  if ( $(window).width() > 520) {
          //Add your jQuery for large screens here
          $('.menu-control').hide();
      }
  else {
      //Add your jQuery for small screens here
      // Hide the main menu for mobile views initially
    $('#nav ul').hide();
    $('.menu-control').addClass('menu-title-unclicked');
      // Toggle list on/off when title is clicked
    $('.menu-control').click(function() {
    $('.menu-control').toggleClass('menu-title-clicked menu-title-unclicked');
    $('#nav ul').slideToggle();
    });
    $('.menu-control').hover(function() {
      $(this).css('cursor','pointer');
    });
  }
});
