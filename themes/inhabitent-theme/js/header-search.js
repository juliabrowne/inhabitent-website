jQuery(document).ready(function($) {
$('.search-form').on('click', function(event){
  event.preventDefault();
  $('.search-field').addClass('show');
  $('.search-field').focus();
});

$('.search-field').on('blur', function(){
  $('.search-field').removeClass('show');
});

});