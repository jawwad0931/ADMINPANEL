// $(document).ready(function() {
//   // Form submit handler
//   $("#form-info").submit(function(event) {
//       event.preventDefault();
//       var fullName = $("#fullname").val();
//       var timeOfApp = $("#time").val(); // Corrected here
//       var serviceType = $("#service").val(); // Corrected here
//       var communication = $("#comm").val(); // Corrected here
//       var date = new Date($("#get-date").val()).toDateString();

//       // Check if form is filled
//       if (fullName == "" || date == "" || timeOfApp == "" || serviceType == "" || communication == "") {
//           alert("Please fill in your information below");
//       } else {
//           $("#displayAppointment").text("Dear " + fullName + ", your appointment is on " + date + ", at " + timeOfApp);
//           $("#modeOfComm").text("Your consultation will be held via " + communication);
//           $("#serviceType").text("Service type: " + serviceType);
//       }
//   });
// });
