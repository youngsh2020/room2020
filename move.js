//Youngshin Choi(991585731)

 window.onload =function(){

//a frog moves with a mouse
var frogs = document.getElementById("frogs");
   	window.onmousemove = function(e){
      		
   		frogs.style.left= e.clientX+"px" ;
     	frogs.style.top = e.clientY +"px";
 }	

//paragraph changes when the mouse is over
 var a =  document.getElementById("pa");
 a.addEventListener("mouseover", change);

	function change(){
	var msg ="Catch me !!";
	 document.getElementById("message").innerHTML = msg;
 }

 
//change the location of target character
var b =  document.getElementById("butterfly");
 b.addEventListener("mouseover", updateAnimation);

 function updateAnimation() {
    
       butterfly.style.left = (Math.random()*window.innerWidth -100)+"px";
       butterfly.style.top = (Math.random()*window.innerHeight -100)+"px";   
 }
};