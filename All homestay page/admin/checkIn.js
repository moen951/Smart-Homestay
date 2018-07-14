function checkIn() {
	var userIC = document.getElementById("userIC").value;
	var firstName = document.getElementById("firstName").value;
	var lastName = document.getElementById("lastName").value;
	var room_type = document.getElementById("room_type").value;
	
	// Returns successful data submission message when the entered information is stored in database.
	var dataString = 'userIC=' + userIC  + '&firstName=' + firstName + '&lastName=' + lastName + '&room_type=' + room_type;

	// window.alert(firstName+" "+lastName);
	
		// AJAX code to submit form.
		$.ajax({
		type: "POST",
		url: "checkIn.php",
		data: dataString,
		cache: false,
		success: function(data) {

		var userName = firstName+" "+lastName;

		//window.location='index_admin.php';

		window.location.href='index_admin.php';

		alert("This user " + userName + " room is set to " + room_type);


		//alert("Your reservation has been place");

		return false;
		}
		});
	
	return false;
}