function showForm(element)
{
	let box1 = document.getElementById("form1");
  let box2 = document.getElementById("form2");
  let box3 = document.getElementById("form3");
  let box4 = document.getElementById("form4");
  
  let input = element.getAttribute('id');
 
	switch(input)
	{
  	case "show1":
    {
      if(box1.style.display == 'none' || !box1.style.display)
        box1.style.display = 'block';
      else
        box1.style.display = 'none';
      break;
    }
    case "show2":
    {
    	if(box2.style.display == 'none' || !box2.style.display)
        box2.style.display = 'block';
      else
        box2.style.display = 'none';
      break;
    }
    case "show3":
    {
    if(box3.style.display == 'none' || !box3.style.display)
        box3.style.display = 'block';
      else
        box3.style.display = 'none';
      break;
    }
    case "show4":
    {
    if(box4.style.display == 'none' || !box4.style.display)
        box4.style.display = 'block';
      else
        box4.style.display = 'none';
      break;
    }
  }
 }
