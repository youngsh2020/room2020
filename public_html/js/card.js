//Youngshin Choi(991585731)

 window.onload =function(){

 var button1 = document.getElementById("submit");

button1.addEventListener("click",hide);
button1.addEventListener("click",show);
button1.addEventListener("click",ani);
button1.addEventListener("click",checkform);

function hide(){
    document.getElementById("area1").style["visibility"] ="hidden";
}
function show(){
    document.getElementById("area2").style["visibility"]="";
}
  
function ani(){          
     
     var x = 100, y = 50;   
    var radius = 10;      
     var timerId;           

 // starts the animation
 function startAnimation() {
                                     
                    timerId = setInterval(updateAnimation, 20);
}

 // stops the animation
function stopAnimation() {
                clearTimeout(timerId);
                checkform();
}
//update animation
 function updateAnimation() {
                   
                    y = y + 2;
                    var c = document.getElementById("cardCanvas");
                    var ctx = c.getContext("2d");
                    ctx.clearRect(0, 0, c.width, c.height);

                    ctx.fillStyle = "white";
                    ctx.beginPath();
                    ctx.arc(x, y, radius, 0, Math.PI * 2);
                    ctx.closePath();
                    ctx.fill();

                    if (y >= c.height - radius)
                        stopAnimation();
}
startAnimation();
                    
}
  //get values from the input results  
function checkform(){
 var toName = document.getElementById("toName").value;
 var msg = document.getElementById("msg").value;
 var textColor = document.getElementById("textColor").value;
 
 //main message of card
 var c = document.getElementById("cardCanvas");
 var ctx = c.getContext("2d");
 ctx.font = "35px verdna";
 ctx.fillStyle = "green";
 ctx.fillText("Merry Christmas",100, 100);

 //drawing a snowman
 ctx.fillStyle = "white";
 ctx.beginPath();
 ctx.arc(200,300,50,0,Math.PI *2);
 ctx.arc(200,420,70,0,Math.PI *2);
 ctx.closePath();
 ctx.fill();
 ctx.beginPath();
 ctx.arc(90,90,8,0,Math.PI *2);
 ctx.arc(300,180,8,0,Math.PI *2);
 ctx.closePath();
 ctx.fill();

 ctx.beginPath();
 ctx.moveTo(0,500);
 ctx.lineTo(80,480);
 ctx.lineTo(200,450);
 ctx.lineTo(330,480);
 ctx.lineTo(400,500);
 ctx.closePath();
 ctx.fill();

 ctx.fillStyle = "black";
 ctx.beginPath();
 ctx.arc(180,290,6,0,Math.PI *2);
 ctx.arc(220,290,6,0,Math.PI *2);
 ctx.closePath();
 ctx.fill();
 
 ctx.fillRect(150,250,100,10);
 ctx.fillRect(180,230,40,20);
 ctx.beginPath();
 ctx.arc(200, 300,30,Math.PI*2,Math.PI );
 ctx.stroke();
 
 // print values from  the input text and color
 var c = document.getElementById("cardCanvas");
 var ctx = c.getContext("2d");
 ctx.font = "35px verdna";
 ctx.fillStyle = textColor;
 ctx.fillText(toName,150,150);
 ctx.fillText(msg,100,200); 
 }
};
              



