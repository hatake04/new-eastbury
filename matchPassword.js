let button = document.getElementById("submit");
button.addEventListener("mouseover", match);

function match()
{
	let input1 = document.getElementById("password").value;
  let input2 = document.getElementById("password1").value;
  
  if(input1 != input2)
		window.alert("Password does not match");
  else if (input1 == "" && input2 == "")
  	window.alert("Empty fields");
}
