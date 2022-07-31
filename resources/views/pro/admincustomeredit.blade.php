<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Customer</title>
</head>
<body>
    <div class="container">
        <h1>Update Added Customer</h1>
        <a href="{{route('pro.admindashboard')}}">Back to Admin Dashboard</a>
        <form action="/admincustomerupdate" method="post">
            @csrf
        <input type="hidden" name="id" value="{{$data['id']}}">
        <input type="text" name="cname" placeholder="Customer Name" value="{{$data['customer_name']}}"><span>{{$errors->first('cname')}}</span><br>
        <input type="text" name="ccontact" placeholder="Customer Contact" value="{{$data['customer_contact']}}"><span>{{$errors->first('ccontact')}}</span><br>
        <input type="text" name="nort" placeholder="No. of reserve tables" value="{{$data['numberof_tables']}}"><span>{{$errors->first('nort')}}</span><br>
        <input type="text" name="wdays" placeholder="Weekdays" value="{{$data['week_days']}}"><span>{{$errors->first('wdays')}}</span><br>
        <input type="text" name="nog" placeholder="No. of guests" value="{{$data['numberof_guests']}}"><span>{{$errors->first('nog')}}</span><br>
        <label>Reservation Date:</label><br>
        <input type="date" name="rdate" value="{{$data['reservation_date']}}"><span>{{$errors->first('rdate')}}</span><br>
        <label>Reservation Time:</label><br>
        <input type="time" name="rtime" value="{{$data['reservation_time']}}"><span>{{$errors->first('rtime')}}</span><br>
        <input type="submit" value="Update">
    </form>
    </div>
</body>
</html>