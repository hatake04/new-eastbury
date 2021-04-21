function showForm(element)
{
	let box1 = document.getElementById("menuuser");
  let box2 = document.getElementById("menustudent");
  let box3 = document.getElementById("menucourses");
  let box4 = document.getElementById("menuclasses");
  let box5 = document.getElementById("menudepartments");
  
  let input = element.getAttribute('id');
 
	switch(input)
	{
  	case "user":
    {
      if(box1.style.visibility == 'hidden' || !box1.style.visibility)
        box1.style.visibility = 'visible';
      else
        box1.style.visibility = 'hidden';
      break;
    }
    case "student":
    {
    	if(box2.style.visibility == 'hidden' || !box2.style.visibility)
        box2.style.visibility = 'visible';
      else
        box2.style.visibility = 'hidden';
      break;
    }
    case "course":
    {
    if(box3.style.visibility == 'hidden' || !box3.style.visibility)
        box3.style.visibility = 'visible';
      else
        box3.style.visibility = 'hidden';
      break;
    }
    case "class":
    {
    if(box4.style.visibility == 'hidden' || !box4.style.visibility)
        box4.style.visibility = 'visible';
      else
        box4.style.visibility= 'hidden';
      break;
    }
    case "department":
    {
   	 	if(box5.style.visibility == 'hidden' || !box5.style.visibility)
        box5.style.visibility = 'visible';
      else
        box5.style.visibility = 'hidden';
      break;
    }
  }
 }
