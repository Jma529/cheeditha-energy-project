jQuery(document).ready(function(){

  $('.menu-item').click(function() {
    $('.slide-in').toggleClass('active');
    $(this.getAttribute('href')).show()
  });

});









 
