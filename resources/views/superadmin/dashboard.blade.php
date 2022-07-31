<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Admin Dashboard</title>
    <link rel="icon" href="images/hehe.png" type="image/x-icon" />
    <link rel="stylesheet" href="{{url("css/finalproj.css")}}">
    <style>
        table,th{
            border:1px solid black;
        }
        .tb1{
            margin-left:470px;
        }
       

.container{
    text-align:center;
    padding-top:0px;
}
a{
    border:1px solid black;
    color:blue;
    background-color:lightblue;
    border-radius:5px;
    font-size:15px;
}
.btn{
    font-size:20px;
}
a:link {
  text-decoration: none;
}
a:hover {
  color:green;
}
.tb{
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
<div id = "header1">
    
    <span style="position: relative;top: 19px;left:30px; font-size: 19px; letter-spacing:10px;"> Welcome, {{$LoggedUserinfo['super_email']}}</span>
    <a style="position:relative; top:19px; left:590px; border:2px solid #800000;   font-size:20px; padding:5px 30px; background-color:rgb(188, 165, 92); color:black;" href="{{route('pro.superlogout')}}" class="tb">Log Out</a><br><br>
    <a style="position:relative; top:-23px; left:996px; border:2px solid #800000;   font-size:20px; padding:5px 18px; background-color:rgb(188, 165, 92); color:black;" href="{{route('pro.adminregister')}}" class="tb">Add Admin</a><br><br>
    <a style="position:relative; top:-65px; left:809px; border:2px solid #800000;   font-size:20px; padding:5px 18px; background-color:rgb(188, 165, 92); color:black;" href="{{route('pro.customerregister')}}" class="tb">Add Customer</a><br><br>
</div>
    <div class="containe">
       
        
        @if(Session::get('success'))
        <span>{{Session::get('success')}}</span><br><br>
        @endif
        @if(Session::get('fail'))
        <span>{{Session::get('fail')}}</span><br><br>
        @endif

        <table class="tb1">
            <tr>
                <th style="background-color:rgb(188, 165, 92);"colspan="6" class="tb">Admin Table</th>
            </tr>
            <tr>
                <th>ID</th>
                <th>Admin Name</th>
                <th>Admin Email</th>
                <th colspan="2">Actions</th>
            </tr>
            @foreach($admindata as $item)
            <tr>
                <th>{{$item->id}}</th>
                <th>{{$item->admin_name}}</th>
                <th>{{$item->admin_email}}</th>
                <th><a  style="position:relative; border:2px solid #800000;   font-size:20px; padding:5px 7px; background-color:rgb(188, 165, 92); color:black;"  href="{{'adminedit/'.$item['id']}}">Edit</a></th>
                <th><a  style="position:relative; border:2px solid #800000;   font-size:20px; padding:5px 7px; background-color:rgb(188, 165, 92); color:black;"  href="{{'admindelete/'.$item['id']}}">Delete</a></th>
            </tr>
            @endforeach
        </table><br>


        @if(Session::get('succ'))
        <span>{{Session::get('succ')}}</span><br><br>
        @endif
        @if(Session::get('fai'))
        <span>{{Session::get('fai')}}</span><br><br>
        @endif

        <table  class="tb2">
            <tr>
                <th  style="background-color:rgb(188, 165, 92);" colspan="10" class="tb">Customers Table</th>
            </tr>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Contact</th>
                <th># of Reserved Tables</th>
                <th>Week Days</th>
                <th>Reserved Date</th>
                <th>Reserved Time</th>
                <th># of Guests</th>
                <th colspan="2">Actions</th>
            </tr>
            @foreach($customerdata as $item)
            <tr>
                <th>{{$item->id}}</th>
                <th>{{$item->customer_name}}</th>
                <th>{{$item->customer_contact}}</th>
                <th>{{$item->numberof_tables}}</th>
                <th>{{$item->week_days}}</th>
                <th>{{$item->numberof_guests}}</th>
                <th>{{$item->reservation_date}}</th>
                <th>{{$item->reservation_time}}</th>
                <th><a style="position:relative; border:2px solid #800000;   font-size:20px; padding:5px 7px; background-color:rgb(188, 165, 92); color:black;"  href="{{'customeredit/'.$item['id']}}">Edit</a></th>
                <th><a style="position:relative; border:2px solid #800000;   font-size:20px; padding:5px 7px; background-color:rgb(188, 165, 92); color:black;"  href="{{'customerdelete/'.$item['id']}}">Delete</a></th>
            </tr>
            @endforeach
        </table>

    </div>
</body>
</html>