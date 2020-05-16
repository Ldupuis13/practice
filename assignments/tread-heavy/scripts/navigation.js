function myFunction() {
 var x = document.getElementById("myTopnav");
 if (x.className === "topnav") {
  x.className += " responsive";
 }
 else {
  x.className = "topnav";
 }
}


function myFunctionTwo() {
var elmnt = document.getElementById("Tear");
var b = elmnt.scrollLeft;
var c = elmnt.scrollTop;
}

console.log(c);
