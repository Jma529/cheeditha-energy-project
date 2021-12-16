jQuery(document).ready(function(){

  // Slide in pages when nav item is clicked
  $(function() {
    var curPage="";
    $(".menu a").click(function() {
        if (curPage.length) { 
            $("#"+curPage).removeClass('active');
        }
        curPage=$(this).data("page");
        $("#"+curPage).addClass('active');
    });
});
  $('.close').click(function() {
    $('.slide-in').removeClass('active');
  })
});