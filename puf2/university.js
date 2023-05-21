function draw()
  {
var canvas = document.getElementById('circle');
if (canvas.getContext)
{
var ctx = canvas.getContext('2d'); 
var X = canvas.width / 2;
var Y = canvas.height / 2;
var R = 80;
ctx.beginPath();
ctx.arc(X, Y, R, 0, 2 * Math.PI, false);
ctx.lineWidth = 3;
ctx.strokeStyle = '#2f3542';
ctx.stroke();
}
    var canvas1 = document.getElementById('circle');
if (canvas1.getContext)
{
var ctx = canvas1.getContext('2d'); 
var X = canvas1.width / 2;
var Y = canvas1.height / 2;
var R = 140;
ctx.beginPath();
ctx.arc(X, Y, R, 0, 2 * Math.PI, false);
ctx.lineWidth = 3;
ctx.strokeStyle = '#2f3542';
ctx.stroke();
}
     var canvas2 = document.getElementById('circle');
if (canvas2.getContext)
{
var ctx = canvas2.getContext('2d'); 
var X = canvas2.width / 2;
var Y = canvas2.height / 2;
var R = 200;
ctx.beginPath();
ctx.arc(X, Y, R, 0, 2 * Math.PI, false);
ctx.lineWidth = 3;
ctx.strokeStyle = '#2f3542';
ctx.stroke();
}
}