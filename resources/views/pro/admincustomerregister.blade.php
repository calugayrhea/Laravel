<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Register</title>
    <link rel="stylesheet" href="{{url("css/finalproj.css")}}">
    <link rel="icon" href="images/hehe.png" type="image/x-icon" />
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
    <h2 style="position:relative; top:-58px; left:999px;">Admin Dashboard</h1>
</div>
    <div class="containerregad">
        <h1 style="position:relative; top:10px;  text-shadow: 5px 4px 5px rgb(200, 14, 14);" >Customer Register</h1>
        <a style="position:relative; top:-70px; left:-570px; border:2px solid #800000;   font-size:20px; padding:10px 30px; background: #994d00; color:white;" href="{{route('pro.admindashboard')}}">Back to Dashboard</a><br><br>
        <form action="{{route('pro.customersave')}}" method="post">
            @if(Session::get('success'))
            <span>{{Session::get('success')}}</span><br><br>
            @endif
            @if(Session::get('fail'))
            <span>{{Session::get('fail')}}</span><br><br>
            @endif
            @csrf
        <input style=" width:320px; position:relative;border:2px solid #800000; top:-15px; border-radius:6px;padding:5px 20px;font-size:16px; background-color:#ffff99; color:brown;" type="text" name="cname" placeholder="Customer Name"><span>{{$errors->first('cname')}}</span><br><br>
        <input style=" width:320px; position:relative;border:2px solid #800000; top:-25px; border-radius:6px;padding:5px 20px;font-size:16px; background-color:#ffff99; color:brown;" type="text" name="ccontact" placeholder="Customer Contact"><span>{{$errors->first('ccontact')}}</span><br><br>
        <input style=" width:320px; position:relative;border:2px solid #800000; top:-35px; border-radius:6px;padding:5px 20px;font-size:16px; background-color:#ffff99; color:brown;" type="text" name="nort" placeholder="No. of reserve tables"><span>{{$errors->first('nort')}}</span><br><br>
        <input style=" width:320px; position:relative;border:2px solid #800000; top:-45px; border-radius:6px;padding:5px 20px;font-size:16px; background-color:#ffff99; color:brown;" type="text" name="wdays" placeholder="Weekdays"><span>{{$errors->first('wdays')}}</span><br><br>
        <input style=" width:320px; position:relative;border:2px solid #800000; top:-57px; border-radius:6px;padding:5px 20px;font-size:16px; background-color:#ffff99; color:brown; "type="text" name="nog" placeholder="No. of guests"><span>{{$errors->first('nog')}}</span><br><br>
        <label style="position:relative; top:-69px; left:-99px;" >Reservation Date:</label><br>
        <input style=" width:320px; position:relative;border:2px solid #800000; top:-67px; border-radius:6px;padding:5px 20px;font-size:16px; background-color:#ffff99; color:brown; " type="date" name="rdate"><span>{{$errors->first('rdate')}}</span><br><br>
        <label style="position:relative; top:-85px; left:-99px;" >Reservation Time:</label><br>
        <input style=" width:320px; position:relative;border:2px solid #800000; top:-83px; border-radius:6px;padding:5px 20px;font-size:16px; background-color:#ffff99; color:brown;" type="time" name="rtime"><span>{{$errors->first('rtime')}}</span><br><br>
        <input type="submit" id="Addregad" value="Add" class="button">
    </form>
    </div>
</body>
</html>