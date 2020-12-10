// User s Login AJAX

$('#loginForm').submit(function(event) {
event.preventDefault();
  var dataReq = $('#loginForm').serialize(); //здесь подставить нужный селектор
    $.ajax({
      type: 'POST',
      url: 'endpoints/login.php', //путь обработчика
      data: dataReq,
      success: function(dataResp) {

        if (dataResp == 1) {
           Swal.fire({
 
  icon: 'success',
  title: "Successfully login",
  showConfirmButton: false,
  timer: 2000
})
       
       setInterval(function() {
   location.reload();
}, 1000); //5 seconds
      }
     
       else if (dataResp==2) {
         Swal.fire({
 
  icon: 'error',
  title: "Incorect Username or Password",
  showConfirmButton: false,
  timer: 2000
})
      }
   }

    });
});






// User s Login AJAX

$('#registerForm').submit(function(event) {
event.preventDefault();
  var dataReq = $('#registerForm').serialize(); //здесь подставить нужный селектор
    $.ajax({
      type: 'POST',
      url: 'endpoints/login.php', //путь обработчика
      data: dataReq,
      success: function(dataResp) {
        alert(dataResp);

        if (dataResp == 1) {
           Swal.fire({
 
  icon: 'success',
  title: "Successfully login",
  showConfirmButton: false,
  timer: 2000
})
       
       setInterval(function() {
   location.reload();
}, 1000); //5 seconds
      }
     
       else if (dataResp==2) {
         Swal.fire({
 
  icon: 'error',
  title: "Username is taken",
  showConfirmButton: false,
  timer: 2000
})
      }
   }

    });
});

