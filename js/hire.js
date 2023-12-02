$(document).ready(function() {
  // Form submit handler
  $("#form-info").submit(function(event) {
      event.preventDefault();
      var fullName = $("#fullname").val();
      var serviceType = $("#service").val(); // Corrected here
      var date = new Date($("#get-date").val()).toDateString();

      // Check if form is filled
      if (fullName == "" || date == "" || serviceType == "") {
          alert("Please fill in your information below");
      } else {
          $("#displayAppointment").text("Dear " + fullName + ", your appointment is on " + date);
          $("#modeOfComm").text("Your consultation will be held via Email");
          $("#serviceType").text("Service type: " + serviceType);
      }
  });
});


function hiring(){
    alert('Your Booking is Successfull');
}

function contact(){
    alert('Your Query Successfully sent');
}

function hire(){
    alert('You Appointment Successfully sent');
}