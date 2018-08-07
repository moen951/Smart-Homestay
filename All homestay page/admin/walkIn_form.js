function walkIn_form() {
	


	var guestIC = document.getElementById("guestIC").value;
	
	var firstName = document.getElementById("firstName").value;
	var lastName = document.getElementById("lastName").value;
	var address = document.getElementById("address").value;
	var postcode = document.getElementById("postcode").value;
	var city = document.getElementById("city").value;
	var state = document.getElementById("state").value;
	// var email = document.getElementById("email").value;
	var phoneNum = document.getElementById("phoneNum").value;
	var num_of_person = document.getElementById("num_of_person").value;
	var room = document.getElementById("room").value;
	var startDate = document.getElementById("startDate").value;
	var endDate = document.getElementById("endDate").value;
	var status = document.getElementById("status").value;

	// Returns successful data submission message when the entered information is stored in database.
	var dataString = 'guestIC=' + guestIC  +'&firstName=' + firstName + '&lastName=' + lastName + '&address=' + address + '&postcode=' + postcode
					+ '&city=' + city + '&state=' + state +  '&phoneNum=' + phoneNum + '&num_of_person=' + num_of_person + '&room=' + room
					+ '&startDate=' + startDate + '&endDate=' + endDate + '&status=' + status ;

	if (firstName == '' || lastName == '' || address == '' || postcode == '' ||city == '' || state == '' || phoneNum == '' || num_of_person == '' || 
		room == '' || startDate == '' || endDate == '') 
	{
		alert("Please Fill All Fields");
	} 

	else 
	{
		//initialize Firebase
			var config = {
		    apiKey: "AIzaSyCppORwD4pq5jkp_E176yCvh2SeG9QTs40",
		    authDomain: "smart-homestay.firebaseapp.com",
		    databaseURL: "https://smart-homestay.firebaseio.com",
		    projectId: "smart-homestay",
		    storageBucket: "smart-homestay.appspot.com",
		    messagingSenderId: "747776544912"
		  };
		  firebase.initializeApp(config);
		  var ref = firebase.app().database().ref('House');

		if(room != 'Regular')
				{
					var roomRef1 = ref.child('Room1');

					roomRef1.update({
					 '/status1': true,

					 
					})
					.catch(function (err) {
					 console.log('one of these updates failed', err);
					});

					walkIn_Data();
				}

		else
				{ 
					var roomRef2 = ref.child('Room2');

					roomRef2.update({
					 '/status2': true,

					 
					})
					.catch(function (err) {
					 console.log('one of these updates failed', err);
					});

					walkIn_Data();
				}


				function walkIn_Data()
				{

				// AJAX code to submit form.
						$.ajax({
						type: "POST",
						url: "insert_admin.php",
						data: dataString,
						cache: false,
						success: function(html) {

						var userName = firstName+" "+lastName;

						window.location.href='index_admin.php';

						alert("This user " + userName + " room is set to " + room_type);

						return false;
						}
						});


				}

		

	}
	return false;
}

