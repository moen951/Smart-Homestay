(function()

{
//initialize Firebase
	const config = {
    apiKey: "AIzaSyCppORwD4pq5jkp_E176yCvh2SeG9QTs40",
    authDomain: "smart-homestay.firebaseapp.com",
    databaseURL: "https://smart-homestay.firebaseio.com",
    projectId: "smart-homestay",
    storageBucket: "smart-homestay.appspot.com",
    messagingSenderId: "747776544912"
  };
  firebase.initializeApp(config);

var ref = firebase.app().database().ref('House');
var roomRef = ref.child('Room2');

roomRef.update({
 '/status2': true,
 '/bilik1': true,
 '/bilik2': true,
 '/bilik3': true,
 '/fan': true,
 '/light': true,
 '/livingRoom': true,
 
})
.catch(function (err) {
 console.log('one of these updates failed', err);
});

  

}());

