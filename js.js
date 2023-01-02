$('.one-movie').click(function(){
  let show = true;
  if ($(this).hasClass('show'))
      show = false;
  $('.one-movie').removeClass('show')
  if (show)
  {
      $(this).toggleClass('show')
      setTimeout(() => {$.scrollTo($(this).children('.description-container'), 800)}, 250);  
   }
})

$('#to_browse').click(() => {
  $.scrollTo($('.movie-gallery'), 1000)
})

$('.toggle-side').click(function(){
  $(".side-menu").toggleClass("show")
})

$('.close-side').click(function(){
  $(".side-menu").toggleClass("show")
})


