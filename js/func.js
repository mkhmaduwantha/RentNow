// function login(){
//   window.location.href='login.html';
//		var twoBtn = document.getElementById("twoBtn");
//		if (twoBtn.style.display==="none"){
//			twoBtn.style.display="block";
//		} else {
//			twoBtn.style.display="none";
//		}
// }
function login(){
  var request = new XMLHttpRequest();
  request.open('GET','login.php');
  request.onreadystatechange = function (){
    // if ((request.readyState ===4) && (request.states===200)){
      document.getElementById('contentMain').innerHTML = request.responseText;
    // }
  }
  request.send();
}
