function bookingGuest() {
	var guestIC = document.getElementById("guestIC").value;
	
	var firstName = document.getElementById("firstName").value;
	var lastName = document.getElementById("lastName").value;
	var address = document.getElementById("address").value;
	var postcode = document.getElementById("postcode").value;
	var city = document.getElementById("city").value;
	var state = document.getElementById("state").value;
	var email = document.getElementById("email").value;
	var phoneNum = document.getElementById("phoneNum").value;
	var num_of_person = document.getElementById("num_of_person").value;
	var room = document.getElementById("room").value;
	var startDate = document.getElementById("startDate").value;
	var endDate = document.getElementById("endDate").value;
	// Returns successful data submission message when the entered information is stored in database.
	var dataString = 'guestIC=' + guestIC  +'&firstName=' + firstName + '&lastName=' + lastName + '&address=' + address + '&postcode=' + postcode
					+ '&city=' + city + '&state=' + state + '&email=' + email + '&phoneNum=' + phoneNum + '&num_of_person=' + num_of_person + '&room=' + room
					+ '&startDate=' + startDate + '&endDate=' + endDate;

	if (firstName == '' || lastName == '' || address == '' || postcode == '' ||city == '' || state == '' || email == '' || phoneNum == '' || num_of_person == '' || 
		room == '' || startDate == '' || endDate == '') 
	{
		alert("Please Fill All Fields");
	} 

	else 
	{
		// AJAX code to submit form.
		$.ajax({
		type: "POST",
		url: "insert.php",
		data: dataString,
		cache: false,
		success: function(html) {
		alert("Your reservation has been place");
		}
		});
	}
	return false;
}