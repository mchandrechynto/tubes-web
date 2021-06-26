$(document).ready(function(){
  $('#form-order').on('submit',function(e) {
    var name = $('#name').val();
    var email = $('#email').val();
    var gender = $('#gender').val();
    var address = $('#address').val();
    var note = $('#note').val();

    if (name == "" || email == "" || gender == "" || address == "" || note == "") {
      swal ('Warning', 'There is still an empty form !', 'warning', '10000');
    } else {
      swal ('Your order is cofirmed', 'Thanks for your order, Regarding your order we will inform you via email :-)','success', '10000');
    }
  });
});
