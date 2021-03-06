<!DOCTYPE HTML>
<html>
<head>
<title>Coding Canvas</title>
</head>
<body>
<canvas id="mycanvas" width="350" height="200" style="border:1px solid #000000; margin:20px;">
    Oops! This browser does not support the HTML5 canvas tag.
</canvas>
 
<script>
var canvas=document.getElementById('mycanvas');
var context=canvas.getContext('2d');
 
function drawRec(x, y){
    context.beginPath();
    context.rect(x, y, 80, 50);
    context.stroke();
}
 
// get x, y coordinates of double clicking
function getPosition(e) {
    var rect = canvas.getBoundingClientRect();
    return {
        x: e.clientX - rect.left,
        y: e.clientY - rect.top
    };
}
 
// add event listener on double click to canvas
canvas.addEventListener('dblclick', function(e) {
    var position = getPosition(e);
    drawRec(position.x, position.y);
});
</script>
 
 </body>
</html>
