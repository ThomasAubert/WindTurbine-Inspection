$(document).ready(function(){

  $.ajax({
    url: "data.php",
    type: "POST",
    dataType: "json",
    success: function(){
      alert('AJAX OK');
    }
  });
});