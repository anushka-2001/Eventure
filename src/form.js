var firebaseConfig = {
  apiKey: "AIzaSyAYc8WmoSbBkYmog28mIXkeVi4atmhySd4",
  authDomain: "contacteventure-please.firebaseapp.com",
  databaseURL: "https://contacteventure-please.firebaseio.com",
  projectId: "contacteventure-please",
  storageBucket: "contacteventure-please.appspot.com",
  messagingSenderId: "160009348722",
  appId: "1:160009348722:web:ef2d9c92e7243b640c04eb"
};
// Initialize Firebase
firebase.initializeApp(firebaseConfig);

var messagesRef = firebase.database( ).ref('messages');

document.getElementById('contactform').addEventListener('submit',submitForm);

function submitForm(e){
  e.preventDefault( );

  var name = getInputVal('name');
  var email = getInputVal('email');
  var experience = getInputVal('experience');
  var most = getInputVal('most');
  var comments = getInputVal('comments');
  saveMessage(name,email,experience,most,comments);

  document.querySelector('.alert').style.display = 'block';

// Hide alert after 3 seconds
setTimeout(function(){
  document.querySelector('.alert').style.display = 'none';
},3000);

// Clear form
document.getElementById('contactform').reset();
}
function getInputVal(id){
  return document.getElementById(id).value;
}



function saveMessage(name, email,experience,most,comments){
   var newMessageRef= messagesRef.push( );
   newMessageRef.set({
     name:name,
     email:email,
     experience:experience,
     most:most,
     comments:comments
   });
}