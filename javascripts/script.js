$("document").ready(function () {
$('.ui.modal.register').modal('setting', 'transition', 'horizontal flip').modal('setting', 'closable', false);
$('.ui.modal.login').modal('setting', 'transition', 'horizontal flip').modal('setting', 'closable', false);
$('.ui.modal.register').modal('show');

$('.login_btn').click(
  function(evt){
    $(".ui.modal.register").modal('hide');
    $(".ui.modal.login").modal('show');
  });
  $('.register_btn').click(
    function(evt){
      $(".ui.modal.login").modal('hide');
      $(".ui.modal.register").modal('show');
    });
})
