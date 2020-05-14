jQuery(document).ready(function($){
  //Check to see if the window is top if not then display button
  toggleButton()
  $(window).scroll(toggleButton);
  //Click event to scroll to top
  $('#topBtn').click(function(){
    $('html, body').animate({scrollTop : 0},360);
    return false;
  });
});

function toggleButton() {
  if ($(window).scrollTop() > 100) {
    $('#topBtn').fadeIn();
  } else {
    $('#topBtn').fadeOut();
  }
}
