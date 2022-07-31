<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin LogIn</title>
    <link rel="icon" href="images/hehe.png" type="image/x-icon" />
    <style>
body {
    background:url(../images/resto.jpeg) no-repeat center fixed; 
    background-size: cover;
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
.container{
         border:4px solid #800000;   
        border-radius:20px;
        height:500px;
        width:640px;
        color: rgb(5, 11, 77);
        position:relative;
        left:380px;
        top:98px;
        text-align:center;
        background-color:rgb(188, 165, 92);
        
        color: #050505;
}
#header { 
        box-shadow: -1px 5px 5px -2px #333333; 
         position:fixed; 
         width:100%; 
         height:80px; 
         top:0;
         text-shadow: 0px 1px 2px rgba(7, 7, 7, 0.8), 0px 2px 4px rgb(224, 26, 56), 0px 4px 8px rgb(179, 184, 186),-5px 6px 4px rgb(79, 85, 88);
         color: #050505;
         border-radius:0px 0px 20px 20px; 
         background-color:rgb(188, 165, 92);
        }
a{
    border:1px solid black;
    color:blue;
    background-color:lightblue;
    border-radius:5px;
    font-size:15px;
}
a:link {
  text-decoration: none;
}
a:hover {
  color:green;
}
.button:hover{
    color:green;
}

.button{
    color:blue;
    background-color:lightblue;
    border-radius:5px;
    font-size:20px;
}
input[type="submit"]
{
	width: 140px;
position: relative;
left:6px;
top: 90px;
height: 40px;
background: #994d00;
color: white;
border:2px solid #800000;   
font-size: 20px;
}


</style>
</head>
<body>
<div id = "header">
    <img src="{{url("images/hehe.png") }}"  width="50" height="40" class="d-inline-block align-top" style="margin-left: 29px; margin-top: 20px; "> 
    <span style="position: relative;top: -10px;left:30px; font-size: 29px; letter-spacing:10px;"> Restaurant Reservation System</span>
    <h2 style="position:relative; top:-58px; left:1109px;">Admin</h1>
</div>
    <div class="container">
        
    <h1 style="position:relative; top:60px;  text-shadow: 5px 4px 5px rgb(200, 14, 14);">Admin Log In</h1>
  
    <form action="{{route('pro.admincheck')}}" method="post">
        @if(Session::get('fail'))
        <span>{{Session::get('fail')}}</span><br><br>
        @endif
        @csrf
        <input style=" width:320px; position:relative;border:2px solid #800000; top:100px; border-radius:6px;padding:10px 20px;font-size:16px; background-color:#ffff99; color:brown;"type="text" name="adminemail" placeholder="Admin Email"><div style="color:red;position:relative; top:90px;"><p>{{$errors->first('adminemail')}}<p></div>
        <input  style=" width:320px; border-radius:6px; border:2px solid #800000;   padding:10px 20px; position:relative; top:100px;font-size:16px; background-color:#ffff99; color:brown;" type="text" name="adminpass" placeholder="Admin Password"><div style="color:red;position:relative; top:90px;"><p>{{$errors->first('adminpass')}}</p></div>
        <input type="submit" value="Login" class="button">
    </form>
    
    <br><br>
    <a style="position:relative; top:-289px; left:-610px; border:2px solid #800000;   font-size:20px; padding:10px 30px; background: #994d00; color:white;" href="{{route('pro.start')}}">Go Back</a>
    </div>
</body>
</html>