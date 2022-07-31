<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Admin</title>
    <link rel="icon" href="images/hehe.png" type="image/x-icon" />
    <link rel="stylesheet" href="{{url("css/finalproj.css")}}">
</head>
<body>
<div id = "header">
    <img src="{{url("images/hehe.png") }}"  width="50" height="40" class="d-inline-block align-top" style="margin-left: 29px; margin-top: 20px; "> 
    <span style="position: relative;top: -10px;left:30px; font-size: 29px; letter-spacing:10px;"> Restaurant Reservation System</span>
    <h2 style="position:relative; top:-58px; left:1109px;">Admin</h1>
</div>
    <div class="containeredit">
        <h1 style="position:relative; top:10px;  text-shadow: 5px 4px 5px rgb(200, 14, 14);" >Update Registered Admin</h1>
        <a style="position:relative; top:-68px; left:-570px; border:2px solid #800000;   font-size:20px; padding:10px 30px; background: #994d00; color:white;" href="{{route('pro.superdashboard')}}">Back to Dashboard</a>
        <form action="/adminupdate" method="post">
            @csrf
        <input type="hidden" name="id" value="{{$data['id']}}">
        <input style=" width:320px; position:relative;border:2px solid #800000; top:60px; border-radius:6px;padding:9px 20px;font-size:16px; background-color:#ffff99; color:brown;" type="text" name="adminname" placeholder="Admin Name" value="{{$data['admin_name']}}"><div style="color:red;position:relative; top:90px;">{{$errors->first('adminname')}}</div>
        <input style=" width:320px; position:relative;border:2px solid #800000; top:70px; border-radius:6px;padding:9px 20px;font-size:16px; background-color:#ffff99; color:brown;"  type="text" name="adminemail" placeholder="Admin Email" value="{{$data['admin_email']}}"><div style="color:red;position:relative; top:90px;">{{$errors->first('adminemail')}}</div>
        <input  style=" width:320px; position:relative;border:2px solid #800000; top:80px; border-radius:6px;padding:9px 20px;font-size:16px; background-color:#ffff99; color:brown;" type="text" name="adminpass" placeholder="Admin Password" value="{{$data['admin_password']}}"><div style="color:red;position:relative; top:90px;">{{$errors->first('adminpass')}}</div>
        <input type="submit" id="editadmin" value="Update">
    </form>
    </div>
</body>
</html>