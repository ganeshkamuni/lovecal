<?php
?
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<style type="text/css">
body
{
background-image:url('love2.jpeg');
background-repeat:no-repeat;
background-size:cover;
}
.qq
{
width:900px;
height:400px;
background-color:white;
border:5px solid black;
position:relative;
left:380px;
top:200px;
}
h1
{
position:absolute;
left:453px;
top:81px;
}
h2
{
margin-top:0px;
width:100%;
text-align:center;
background-color:pink;
padding:25px 0px;
}
.in1
{
position:absolute;
left:160px;
padding:18px 33px;
border:1px solid blue;
text-align:center;
}
.in2
{
position:absolute;
right:140px;
padding:18px 33px;
border:1px solid blue;
text-align:center;
}
.in3
{
width:99%;
position:absolute;
left:0;
bottom:0;
padding:20px 0px;
background-color:#525252;
text-align:center;
}
.in4
{
position:absolute;
left:240px;
top:250px;
padding:20px 40px;
width:330px;
text-align:center;
}
button
{
background-color:green;
position:absolute;
top:190px;
left:335px;
text-align:center;
padding:13px 80px;
}

@media(max-width:768px)
{
body
{
background-image:url('love2.jpeg');
height:100vh;
background-size:cover;
}
.qq
{
width:400px;
height:400px;
position:relative;
left:0px;
top:180px;
right:0px;
}
.in1
{
position:absolute;
left:10px;
padding:12px 3px;
border:1px solid blue;
}
.in2
{
position:absolute;
right:10px;
padding:12px 3px;
border:1px solid blue;
}
button
{
background-color:green;
position:absolute;
top:180px;
left:90px;
text-align:center;
padding:13px 80px;
}
.in4
{
position:absolute;
left:63px;
top:250px;
padding:20px 40px;
width:230px;
}
h1
{
position:absolute;
left:197px;
top:104px;
font-size:12px;
}
}
</style>
</head>
<body>
<div class="qq">
<h2>Love Calculator</h2>
<button onclick="hh()"> chech your love</button>
<form name="ff">
<input type="text" class="in1" name="p1" placeholder="your name">
<input type="text" class="in2" name="p2" placeholder="love name">
<input type="text" placeholder="love percentage" class="in4"  name="p3">
<h4></h4>
<input type="text" class="in3" class="s12" placeholder="**Ganesh.......): ...........stay single stay home stay safe">
</form>
<h1>+</h1>
</div>
<script type="text/javascript">
function hh()
{
var s1=ff.p1.value;
var s2=ff.p2.value;
if(s1=="")
{
alert("enter your name");
}
else if(s1.length<4)
{
alert("min num of charectes are 3");
}
else if(s2=="")
{
alert("enter your love name");
}
else if(s2.length<4)
{
alert("min num of charectes are 3");
}
if((s1!="")&&(s2!=""))
{
var v=(Math.floor((Math.random()*100))+"%");
ff.p3.value=v;
}
}
</script>
</body>
</html>