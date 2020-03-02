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

 //declare variables for animation    
     var x = 100; 
     var y = 50;     
     var timerId;           

 // starts the animation
 function startAnimation() {
                                     
     timerId = setInterval(updateAnimation, 100);
}

 // stops the animation
function stopAnimation() {
     clearTimeout(timerId);
             
               
}
//update animation
 function updateAnimation() {
         x=x+3;
                   
        var butterfly =document.getElementById("butterfly");
        window.onmouseover = function(e){              
        butterfly.style.left = e.clientX+x+"px";
        butterfly.style.top = e.clientY+y+"px";
        }

            if ( x >= window.innerWidth-100)
            stopAnimation();
}
startAnimation();
                   
};