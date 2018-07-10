function checkIn() {
	var userIC = document.getElementById("userIC").value;
	var userName = document.getElementById("userName").value;
	
	var room_type = document.getElementById("room_type").value;
	
	// Returns successful data submission message when the entered information is stored in database.
	var dataString = 'userIC=' + userIC  +'&userName=' + userName + '&room_type=' + room_type;

	
		// AJAX code to submit form.
		$.ajax({
		type: "POST",
		url: "checkIn.php",
		data: dataString,
		cache: false,
		success: function() {

		//window.location='index_admin.php';

		document.location.href='index_admin.php';

		alert("This user " + userName + " room is set to " + room_type);


		//alert("Your reservation has been place");

		return false;
		}
		});
	
	return false;
}