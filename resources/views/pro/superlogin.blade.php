<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super LogIn</title>
    <link rel="icon" href="images/hehe.png" type="image/x-icon" />
    <link rel="stylesheet" href="{{url("css/finalproj.css")}}">
    <style>
.container{
    text-align:center;
    padding-top:200px;
}
a{
    border:1px solid black;
    color:blue;
    background-color:lightblue;
    border-radius:5px;
    font-size:20px;
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
</style>
</head>
<body>
<div id = "header">
    <img src="{{url("images/hehe.png") }}"  width="50" height="40" class="d-inline-block align-top" style="margin-left: 29px; margin-top: 20px; "> 
    <span style="position: relative;top: -10px;left:30px; font-size: 29px; letter-spacing:10px;"> Restaurant Reservation System</span>
    <h2 style="position:relative; top:-58px; left:1109px;">Admin</h1>
</div>
    <div class="containersuper">
    <h1 style="position:relative; top:10px;  text-shadow: 5px 4px 5px rgb(200, 14, 14);">Super Log In</h1>
    
    <form action="{{route('pro.supercheck')}}" method="post">
        @if(Session::get('fail'))
        <span>{{Session::get('fail')}}</span><br>
        @endif
        @csrf
        <input  style=" width:320px; position:relative;border:2px solid #800000; top:90px; border-radius:6px;padding:9px 20px;font-size:16px; background-color:#ffff99; color:brown;"type="text" name="superemail" placeholder="Super Admin Email"><div style="color:red;position:relative; top:90px;">{{$errors->first('superemail')}}</div>
        <input  style=" width:320px; position:relative;border:2px solid #800000; top:100px; border-radius:6px;padding:9px 20px;font-size:16px; background-color:#ffff99; color:brown;" type="text" name="superpass" placeholder="Super Admin Password"><div style="color:red;position:relative; top:102px;">{{$errors->first('superpass')}}</div>
        <input type="submit" id="superad" value="Login" class="button">
    </form>
    
    <a style="position:relative; top:-199px; left:-570px; border:2px solid #800000;   font-size:20px; padding:10px 30px; background: #994d00; color:white;" href="{{route('pro.start')}}">Go to MainBoard</a>
    </div>
</body>
</html>