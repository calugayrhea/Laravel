<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="icon" href="images/hehe.png" type="image/x-icon" />
    <link rel="stylesheet" href="{{url("css/finalproj.css")}}">
    <style>
        
</style>
</head>
<body>

<div id = "header">
    <img src="{{url("images/hehe.png") }}"  width="50" height="40" class="d-inline-block align-top" style="margin-left: 29px; margin-top: 20px; "> 
    <span style="position: relative;top: -10px;left:30px; font-size: 29px; letter-spacing:10px;"> Restaurant Reservation System</span>
    <h2 style="position:relative; top:-58px; left:999px;">Admin Dashboard</h1>
</div>
<div id = "header1">
    
    <span style="position: relative;top: 19px;left:30px; font-size: 19px; letter-spacing:10px;"> Welcome, {{$LoggedUserinfo['admin_email']}}</span>
    <a style="position:relative; top:19px; left:690px; border:2px solid #800000;   font-size:20px; padding:5px 30px; background-color:rgb(188, 165, 92); color:black;" href="{{route('pro.adminlogout')}}" class="tb">Log Out</a><br><br>
</div>

    <div class="container1">
        <a  style="position:relative; top:106px; left:959px; border:2px solid #800000; font-size:20px; padding:5px 16px; background-color:rgb(188, 165, 92); color:black;"  href="{{route('pro.admincustomerregister')}}" class="tb">Add Customer</a><br><br>

        @if(Session::get('succ'))
        <span>{{Session::get('succ')}}</span><br><br>
        @endif
        @if(Session::get('fai'))
        <span>{{Session::get('fai')}}</span><br><br>
        @endif

        <table>
            <tr>
                <th style="background-color:rgb(188, 165, 92);"colspan="10">Customer Table</th>
            </tr>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Contact</th>
                <th>Number of Reserved Tables</th>
                <th>Week Days</th>
                <th>Reserved Date</th>
                <th>Reserved Time</th>
                <th>Number of Guests</th>
                <th colspan="2">Actions</th>
            </tr>
            @foreach($customerdata as $item)
            <tr  style="height:25px; ">
                <td>{{$item->id}}</td>
                <td>{{$item->customer_name}}</td>
                <td>{{$item->customer_contact}}</td>
                <td>{{$item->numberof_tables}}</td>
                <td>{{$item->week_days}}</td>
                <td>{{$item->numberof_guests}}</td>
                <td>{{$item->reservation_date}}</td>
                <td>{{$item->reservation_time}}</td>
              
                    
                <td> <a style="position:relative; border:2px solid #800000;   font-size:20px; padding:5px 20px; background-color:rgb(188, 165, 92); color:black;"  href="{{'admincustomeredit/'.$item['id']}}" >Edit</a></td>
                   
                
               

                <td> <a style="position:relative; border:2px solid #800000;   font-size:20px; padding:5px 10px; background-color:rgb(188, 165, 92); color:black;"  href="{{'admincustomerdelete/'.$item['id']}}" >Delete</a></td>
            </tr>
            @endforeach
        </table>

    </div>
</body>
</html>