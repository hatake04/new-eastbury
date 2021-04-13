var SPRING_REG = "Nov 25 Jan 21";
var FALL_REG = "Jun 25 Aug 21";
let currentDate = new Date();
let dateArray = (currentDate.toString()).split(" ");

let spring = SPRING_REG.split();
let fall = FALL_REG.split();
let springS = new Date(spring[0], spring[1], dateArray[3]);
let springF = new Date(spring[2], spring[3], dateArray[3]);
let fallS = new Date(fall[0], fall[1], dateArray[3]);
if(currentDate < springS.getTime() && currentDate > springF.getTime())
  console.log("Invalid Operation");
