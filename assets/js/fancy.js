jQuery(document).ready(function($) {
  $('.dropdown_toggle').on('click', function(e) {
    e.preventDefault();
    $('.dropdown_menu').slideToggle('fast');
  });
});
