<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Register</title>
    <link rel="icon" href="images/hehe.png" type="image/x-icon" />
    <link rel="stylesheet" href="{{url("css/finalproj.css")}}">
    <style>

.container{
    text-align:center;
    padding-top:100px;
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
</style>
</head>
<body>
<div id = "header">
    <img src="{{url("images/hehe.png") }}"  width="50" height="40" class="d-inline-block align-top" style="margin-left: 29px; margin-top: 20px; "> 
    <span style="position: relative;top: -10px;left:30px; font-size: 29px; letter-spacing:10px;"> Restaurant Reservation System</span>
    <h2 style="position:relative; top:-58px; left:1109px;">Super Admin</h1>
</div>
    <div class="containerreg">
        <h1 style="position:relative; top:10px;  text-shadow: 5px 4px 5px rgb(200, 14, 14);">Customer Register</h1>
        <a  style="position:relative; top:-70px; left:-570px; border:2px solid #800000;   font-size:20px; padding:10px 30px; background: #994d00; color:white;" href="{{route('pro.superdashboard')}}">Go to Dashboard</a><br><br>
        <form action="{{route('pro.customersave')}}" method="post">
            @if(Session::get('success'))
            <span>{{Session::get('success')}}</span><br><br>
            @endif
            @if(Session::get('fail'))
            <span>{{Session::get('fail')}}</span><br><br>
            @endif
            @csrf
        <input style=" width:320px; position:relative;border:2px solid #800000; top:-32px; border-radius:6px;padding:5px 20px;font-size:16px; background-color:#ffff99; color:brown;" type="text" name="cname" placeholder="Customer Name"><div style="color:red;position:relative; top:-30px;">{{$errors->first('cname')}}</div>
        <input style=" width:320px; position:relative;border:2px solid #800000; top:-25px; border-radius:6px;padding:5px 20px;font-size:16px; background-color:#ffff99; color:brown;" type="text" name="ccontact" placeholder="Customer Contact"><div style="color:red;position:relative; top:-23px;">{{$errors->first('ccontact')}}</div>
        <input style=" width:320px; position:relative;border:2px solid #800000; top:-19px; border-radius:6px;padding:5px 20px;font-size:16px; background-color:#ffff99; color:brown;" type="text" name="nort" placeholder="No. of reserve tables"><div style="color:red;position:relative; top:-20px;">{{$errors->first('nort')}}</div>
        <input style=" width:320px; position:relative;border:2px solid #800000; top:-15px; border-radius:6px;padding:5px 20px;font-size:16px; background-color:#ffff99; color:brown;" type="text" name="wdays" placeholder="Weekdays"><div style="color:red;position:relative; top:-20px;">{{$errors->first('wdays')}}</div>
        <input style=" width:320px; position:relative;border:2px solid #800000; top:-10px; border-radius:6px;padding:5px 20px;font-size:16px; background-color:#ffff99; color:brown;" type="text" name="nog" placeholder="No. of guests"><div style="color:red;position:relative; top:-10px;">{{$errors->first('nog')}}</div>
        <label style="position:relative; top:-13px; left:-99px;">Reservation Date:</label><br>
        <input style=" width:320px; position:relative;border:2px solid #800000; top:-16px; border-radius:6px;padding:5px 20px;font-size:16px; background-color:#ffff99; color:brown;" type="date" name="rdate"><div style="color:red;position:relative; top:-10px;">{{$errors->first('rdate')}}</div>
        <label style="position:relative; top:-19px; left:-99px;" >Reservation Time:</label><br>
        <input style=" width:320px; position:relative;border:2px solid #800000; top:-20px; border-radius:6px;padding:5px 20px;font-size:16px; background-color:#ffff99; color:brown;" type="time" name="rtime"><div style="color:red;position:relative; top:-18px;">{{$errors->first('rtime')}}</div>
        <input type="submit" id="regbut" value="Add" class="button">
    </form>
    </div>
</body>
</html>