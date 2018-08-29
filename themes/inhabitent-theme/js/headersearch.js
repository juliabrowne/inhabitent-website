jQuery(document).ready(function($) {
$('.header-search .icon-search').on('click', function(event){
  event.preventDefault();
  $('.header-search .search-field').addClass('show');
  $('.header-search .search-field').focus();
});

$('.header-search .search-field').on('blur', function(){
  $('.header-search .search-field').removeClass('show');
});
  
  });

