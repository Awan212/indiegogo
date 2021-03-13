$('.content-slider-thumb').on('click', function() {
  let url = $(this).css('background-image').substring(5).slice(0,-2);
  $('#content-slider-image-img').attr('src', url)
  $('.content-slider-thumb').removeClass('active');
  $(this).addClass('active')
})