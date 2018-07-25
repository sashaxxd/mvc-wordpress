(function($) {
$(function() {

  $('#site_up_st').click(function() {
    $('html, body').animate({scrollTop: 0},500);
    return false;
  })

})
})(jQuery);


$(window).scroll(function(){
     if($(window).scrollTop()>300){
                $('#Layer1').show();
      }
      else{
                 $('#Layer1').hide();
     }

});

