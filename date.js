
function registrationPeriod(semester)
{
  let springDates = "10 23 0 21"; //start date month and end date and month 
  let fallDates = "05 23 07 21";
  let date = new Date();	//current date
  let currentDate = (date.toString()).split(" ");

  let spring = springDates.split(" ");
  let fall = fallDates.split(" ");

  let springS = new Date(currentDate[3], spring[0], spring[1]); //Date object registration Spring starts
  let springF = new Date(currentDate[3], spring[2], spring[3]); // Date object registration Spring ends
  let fallS = new Date(currentDate[3], fall[0], fall[1]);	//Date object registration Fall starts
  let fallF = new Date(currentDate[3], fall[2], fall[3]); //Date object registration Fall ends.

	switch(semester)
  {
  			case 0: {
    	 			if(date.getTime() < springS.getTime() || date.getTime > springF.getTime()) // compares registration time window for spring with current date
  					{
    						alert("Registration not in session.");
    						window.location.href = "";
  					}
  					else
   							window.open("");
      			break;

    		}
 				case 1: 
  			{
   					if(date.getTime() < fallS.getTime() || date.getTime > fallF.getTime()) // compares registration time window for spring with current date
  					{
    						alert("Registration not in session.");
    						window.location.href = "";
  					}
  					else
    						window.open("");
    				break;
       	}
 	}
}
