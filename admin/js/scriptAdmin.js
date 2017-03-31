$('.login-input').on('focus', function() {
  $('.login').addClass('focused');
});

$('.login').on('submit', function() {
  $('.login').removeClass('focused').addClass('loading');
});


