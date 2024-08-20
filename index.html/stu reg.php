<html>
<title>Student's Register form</title>
<head>
<link href="style.css" type="text/css" rel="stylesheet"/>
</head>
<style>
form{

border:1.5px solid silver;
border-radius:40px;
box-shadow:3px 5px silver;
max-width:40%;
margin:70px 0px 0px 345px;
}
h3{
color:#62ff62;
position:absolute;
margin:0px 0px 0px 140px;
}
h5{
color:#62ff62;
position:absolute;
margin:32px 0px 0px 70px;
}
input{
margin:31px 0px 0px -50px;
border-radius:2px;
max-width:100px;
background-color:black;
color:#62ff62;
}
#button{
margin:0px 0px 0px 250px;
}
#quantity{
margin:28px 0px 0px 258px;
max-width:100px;
height:30px;
color:#62ff62;
background-color:black;
border-radius:10px;
}
a{
margin:0px 0px 0px 200px;
color:black;
background-color:white;
max-width:10%;
height:5px;
font-size:16px;
border-radius:3px;
}
body{
background-repeat:no-repeat;
background-size:1300px 800px;
}
</style>
<body style="background-image: url('https://us.123rf.com/450wm/prathanchorruangsak/prathanchorruangsak2306/prathanchorruangsak230600105/205953080-flat-lay-notebook-earphones-coffee-cup-and-glasses-on-dark-black-surface-copy-space-for-your-text.jpg?ver=6')">

<form method="get" id="myform">
<h3>Student's Register Form</h3>
<br>
<h5>Name of the student *</h5>
<input type="text"id="quantity" placeholder="Enter Name"name="Name"required>
<h5>Enter Date Of  Birth *</h5>
<input type="date" id="quantity" name="quantity" min="1990" max="2007">
<h5>Select Qualification *</h5>
<select id="quantity" name="">
<option value="">Choose Qualification:</option>
<option value="1">SSLC</option>
<option value="2">HSE</option>
<option value="3">Diplomo</option>
<option value="4">UG</option>
<option value="5">PG</option>
</select>
<h5>Enter E-mail *</h5>
<input type="text" id="quantity" placeholder="Enter E-mail" Name="email"required>
<h5>Enter course *</h5>
<input type="text" id="quantity" placeholder="Enter Course"name="Course">
<h5>Generate password *</h5>
<input type="password" class="check" id="quantity" placeholder="Enter password" name="psw" required onkeyup="verify()">
<span id="error" style="color:white;"></span>
<h5>Conform password *</h5>
<input type="password"  class="build" id="quantity" name="Conform password"placeholder="Conform password">
<br>
<input id="button" type="submit" name="name" value="submit" style="margin: 14px 0px 6px 280px;;font-size:200px background-color:black color:blue border-radius:7px padding:05px;">
<h5>Already Register this please login</h5>
<h5><a href="stu Login.html">Login</a></h5>
</form>
</body>
<script>
function verify(){
let x = document.getElementsById("check").value;
let e = document.getElementById("error");

if ( x.length == 10 )
{
 alert("Length Matched");
}
else if(x.length < 10)
{
 alert("Enter minimum 10 characters using special symbols");
}
else{
 alert("Note you Entered above 10 characters");
}
}
</script>
</html>