<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Customer</title>
    <link rel="icon" href="images/hehe.png" type="image/x-icon" />
    <link rel="stylesheet" href="{{url("css/finalproj.css")}}">
</head>
<body>
<div id = "header">
    <img src="{{url("images/hehe.png") }}"  width="50" height="40" class="d-inline-block align-top" style="margin-left: 29px; margin-top: 20px; "> 
    <span style="position: relative;top: -10px;left:30px; font-size: 29px; letter-spacing:10px;"> Restaurant Reservation System</span>
    <h2 style="position:relative; top:-58px; left:1199px;">Admin</h1>
</div>
    <div class="containercus">
        <h1 style="position:relative; top:10px;  text-shadow: 5px 4px 5px rgb(200, 14, 14);">Update Added Customer</h1>
        <a style="position:relative; top:-70px; left:-570px; border:2px solid #800000;   font-size:20px; padding:10px 30px; background: #994d00; color:white;" href="{{route('pro.superdashboard')}}">Go to Dashboard</a>
        <form action="/customerupdate" method="post">
            @csrf
        <input type="hidden" name="id" value="{{$data['id']}}">
        <input style=" width:320px; position:relative;border:2px solid #800000; top:30px; border-radius:6px;padding:5px 20px;font-size:16px; background-color:#ffff99; color:brown;"type="text" name="cname" placeholder="Customer Name" value="{{$data['customer_name']}}"><span>{{$errors->first('cname')}}</span><br>
        <input style=" width:320px; position:relative;border:2px solid #800000; top:40px; border-radius:6px;padding:5px 20px;font-size:16px; background-color:#ffff99; color:brown;"type="text" name="ccontact" placeholder="Customer Contact" value="{{$data['customer_contact']}}"><span>{{$errors->first('ccontact')}}</span><br>
        <input style=" width:320px; position:relative;border:2px solid #800000; top:50px; border-radius:6px;padding:5px 20px;font-size:16px; background-color:#ffff99; color:brown;" type="text" name="nort" placeholder="No. of reserve tables" value="{{$data['numberof_tables']}}"><span>{{$errors->first('nort')}}</span><br>
        <input style=" width:320px; position:relative;border:2px solid #800000; top:60px; border-radius:6px;padding:5px 20px;font-size:16px; background-color:#ffff99; color:brown;"type="text" name="wdays" placeholder="Weekdays" value="{{$data['week_days']}}"><span>{{$errors->first('wdays')}}</span><br>
        <input style=" width:320px; position:relative;border:2px solid #800000; top:70px; border-radius:6px;padding:5px 20px;font-size:16px; background-color:#ffff99; color:brown;"type="text" name="nog" placeholder="No. of Guests" value="{{$data['numberof_guests']}}"><span>{{$errors->first('nog')}}</span><br>   
        <input  style=" width:320px; position:relative;border:2px solid #800000; top:80px; border-radius:6px;padding:5px 20px;font-size:16px; background-color:#ffff99; color:brown;" type="date" name="rdate" value="{{$data['reservation_date']}}"><span>{{$errors->first('rdate')}}</span><br>
        <input style=" width:320px; position:relative;border:2px solid #800000; top:90px; border-radius:6px;padding:5px 20px;font-size:16px; background-color:#ffff99; color:brown; " type="time" name="rtime" value="{{$data['reservation_time']}}"><span>{{$errors->first('rtime')}}</span><br>
        <input type="submit" id="upbutton" value="Update">
    </form>
    </div>
</body>
</html>