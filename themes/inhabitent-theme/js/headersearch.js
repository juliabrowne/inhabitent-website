jQuery(document).ready(function($) {
$('.site-header .icon-search').on('click', function(event){
  event.preventDefault();
  $('.site-header .search-field').addClass('show');
  $('.site-header .search-field').focus();
});

$('.site-header .search-field').on('blur', function(){
  $('.site-header .search-field').removeClass('show');
});

});

jQuery(document).ready(function($) {
  $('.site-header-white .icon-search').on('click', function(event){
    event.preventDefault();
    $('.site-header-white .search-field').addClass('show');
    $('.site-header-white .search-field').focus();
  });
  
  $('.site-header-white .search-field').on('blur', function(){
    $('.site-header-white .search-field').removeClass('show');
  });
  
  });