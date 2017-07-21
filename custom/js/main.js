$(document).ready(function(){
  $("[data-submit]").click(function(){
      var r = confirm($(this).data("submit"));
      if (r == false) return false;
  });

  var table = $('.dtable').DataTable({
    "lengthMenu": [[10, 25, -1], [10, 25, "All"]],
    responsive: true
  });

  $('.dtable').removeClass( 'display' ).addClass('table table-bordered table-style');

  $('tr[data-href]').on( 'click', function () {
    window.location.href = $(this).data('href');
  });

  //submit enter
  $('.submitOnEnter').keydown(function(event) {
    // enter has keyCode = 13, change it if you want to use another button
    if (event.keyCode == 13) {
      this.form.submit();
      return false;
    }
  });
});
