document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.fixed-action');
    var instances = M.FloatingActionButton.init(elems, {
      direction: 'right'
    });
  });
  /*
  $(document).ready(function(){
    $('.carousel').carousel();
  });
*/
  // Or with jQuery

  $(document).ready(function(){
    $('.carousel').carousel();
  });

  $('.fixed-action-btn').openFAB();
  $('.fixed-action-btn').closeFAB();
  $('.fixed-action-btn.toolbar').openToolbar();
  $('.fixed-action-btn.toolbar').closeToolbar();