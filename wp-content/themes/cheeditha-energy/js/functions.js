jQuery(document).ready(function(){

  // Slide in pages when nav item is clicked
  $('#our-story').click(function() {
    $('#our-story-page').toggleClass('active');
  });
  $('#our-people').click(function() {
    $('#our-people-page').toggleClass('active');
  });

  $('.close').click(function() {
    $('.slide-in').removeClass('active');
  })

});
