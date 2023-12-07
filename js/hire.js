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
          $("#serviceType").text(serviceType);
      }
  });
});


// for online payment
function Confirm() {
    let full_name = document.getElementById('full_name').value
    let email = document.getElementById('email').value
    let cardNumber = document.getElementById('cardNumber').value
    let lawyer_name = document.getElementById('lawyer_name').value
    let city = document.getElementById('city').value
    let ZipCode = document.getElementById('ZipCode').value
    let paymentMode = document.getElementById('paymentMode').value
    if (full_name && email && lawyer_name && city && paymentMode) {
        const payment_message = `Your Name: ${full_name}\nEmail: ${email}\nCardNumber : ${cardNumber}\nLawyer Name: ${lawyer_name}\nCity: ${city}\nZipCode :${ZipCode}\nPayment Mode: ${paymentMode} \n \nIf this right so click OK button`;
        alert(payment_message);
    } else {
        // Handle the case when any of the fields is empty
        alert("Please fill your payment details.");
    }
}



// userQueries alert message 
function contact() {
    let validationCustomName = document.getElementById('validationCustomName').value;
    let validationCustomEmail = document.getElementById('validationCustomEmail').value;
    let validationCustomPhone = document.getElementById('validationCustomPhone').value;
    let validationCustomMessage = document.getElementById('validationCustomMessage').value;

    if (validationCustomName && validationCustomEmail && validationCustomPhone && validationCustomMessage) {
        const Query_message = `Your Name: ${validationCustomName}\nEmail: ${validationCustomEmail}\nPhone: ${validationCustomPhone}\nMessage: ${validationCustomMessage}`;
        alert(Query_message);
    } else {
        // Handle the case when any of the fields is empty
        alert("Please fill contact form");
    }
}

// booking alert message
function hire() {
    let fullname = document.getElementById('fullname').value;
    let services = document.getElementById('services').value;
    let AppointDate = document.getElementById('AppointDate').value;

    if (fullname && services && AppointDate) {
        const user_queries = `Full Name: ${fullname}\nService: ${services}\nAppointment Date: ${AppointDate}`;
        alert(user_queries);
        console.log(user_queries);
    } else {
        // Handle the case when any of the fields is empty
        alert("Please fill the Booking Form");
    }
}



