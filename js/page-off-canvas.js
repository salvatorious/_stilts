jQuery(document).ready(function() {
  
  window.scrollTo(0, 1);
  
  jQuery('.page-template-page-off-canvas-php .menu-toggle').click(function (e) {
    jQuery('body').toggleClass('active');
    e.preventDefault();
    }); 
});