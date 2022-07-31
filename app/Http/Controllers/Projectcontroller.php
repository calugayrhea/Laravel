<?php

namespace App\Http\Controllers;
use App\Models\Super;
use App\Models\Admin;
use App\Models\Customer;
use Illuminate\Http\Request;

class Projectcontroller extends Controller
{
    public function mainboard(){
        return view('pro.main');
    }
    public function superlogin(){
        return view('pro.superlogin');
    }
    public function supercheck(Request $request){
        $request -> validate([
            'superemail'=>'required|email',
            'superpass'=>'required'
        ]);
        $userinfo = Super::where('super_email','=',$request->superemail)->first();
        if(!$userinfo){
            return back()->with('fail','We do not recognize your email address!!');
        }else{
            $userinfo = Super::where('super_password','=',$request->superpass)->first();
            if($userinfo){
                $request->session()->put('LoggedUser',$userinfo->id);
                return redirect('/superdashboard');
            }else{
                return back()->with('fail','Incorrect Password');
            }
        }
    }
    public function superdashboard(){
        $data = ['LoggedUserinfo'=>Super::where('id','=',session('LoggedUser'))->first()];
        $admindata = Admin::all();
        $customerdata = Customer::all();
        return view('superadmin.dashboard',$data)->with('admindata',$admindata)->with('customerdata',$customerdata);
    }
    public function superlogout(){
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect('/superlogin');
        }
    }

    public function adminregister(){
        return view('pro.adminregister');
    }
    public function adminsave(Request $request){
        $request -> validate([
            'adminname'=>'required',
            'adminemail'=>'required|email',
            'adminpass'=>'required'
        ]);
        $admin = new Admin;
        $admin -> admin_name = $request -> adminname;
        $admin -> admin_email = $request -> adminemail;
        $admin -> admin_password = $request -> adminpass;
        $save = $admin -> save();
        if($save){
            return back()->with('success','New Admin User has been successfully Added');
        }else{
            return back()->with('fail','Something went wrong, try again later');
        }
    }
    
    public function adminedit($id){
        $data = Admin::find($id);
        return view('pro.adminedit',['data'=>$data]);
    }
    public function adminupdate(Request $request, Admin $admin){
        $request -> validate([
            'adminname'=>'required',
            'adminemail'=>'required|email',
            'adminpass'=>'required'
        ]);
        $data = Admin::find($request->id);
        $data -> admin_name = $request-> adminname;
        $data -> admin_email = $request-> adminemail;
        $data -> admin_password = $request-> adminpass;
        $save =$data -> save();
        if($save){
            return redirect('superdashboard')->with('success','Updated Successfully');
        }else{
            return redirect('superdashboard')->with('fail','Something went wrong, try again later');
        }
    }
    public function admindelete($id){
        $data = Admin::find($id);
        $del =$data -> delete();
        if($del){
            return redirect('superdashboard')->with('success','Deleted Successfully');
        }else{
            return redirect('superdashboard')->with('fail','Something went wrong, try again later');
        }
    }

    public function customerregister(){
        return view('pro.customerregister');
    }
    public function customersave(Request $request){
        $request -> validate([
            'cname'=>'required',
            'ccontact'=>'required',
            'nort'=>'required',
            'wdays'=>'required',
            'nog'=>'required',
            'rdate'=>'required',
            'rtime'=>'required'
        ]);
        $customer = new Customer;
        $customer -> customer_name = $request -> cname;
        $customer -> customer_contact = $request -> ccontact;
        $customer -> numberof_tables = $request -> nort;
        $customer -> week_days = $request -> wdays;
        $customer -> numberof_guests = $request -> nog;
        $customer -> reservation_date = $request -> rdate;
        $customer -> reservation_time = $request -> rtime;
        $csave = $customer -> save();
        if($csave){
            return back()->with('success','New Customer has been successfully Added');
        }else{
            return back()->with('fail','Something went wrong, try again later');
        }
    }
    public function customeredit($id){
        $data = Customer::find($id);
        return view('pro.customeredit',['data'=>$data]);
    }
    public function customerupdate(Request $request, Customer $customer){
        $request -> validate([
            'cname'=>'required',
            'ccontact'=>'required',
            'nort'=>'required',
            'wdays'=>'required',
            'nog'=>'required',
            'rdate'=>'required',
            'rtime'=>'required'
        ]);
        $data = Customer::find($request->id);
        $data -> customer_name = $request -> cname;
        $data -> customer_contact = $request -> ccontact;
        $data -> numberof_tables = $request -> nort;
        $data -> week_days = $request -> wdays;
        $data -> numberof_guests = $request -> nog;
        $data -> reservation_date = $request -> rdate;
        $data -> reservation_time = $request -> rtime;
        $saved = $data -> save();
        if($saved){
            return redirect('superdashboard')->with('succ','Updated Successfully');
        }else{
            return redirect('superdashboard')->with('fai','Something went wrong, try again later');
        }
    }
    public function customerdelete($id){
        $data = Customer::find($id);
        $dele = $data -> delete();
        if($dele){
            return redirect('superdashboard')->with('succ','Deleted Successfully');
        }else{
            return redirect('superdashboard')->with('fai','Something went wrong, try again later');
        }
    }

    public function adminlogin(){
        return view('pro.adminlogin');
    }

    public function admincheck(Request $request){
        $request -> validate([
            'adminemail'=>'required|email',
            'adminpass'=>'required'
        ]);
        $admininfo = Admin::where('admin_email','=',$request->adminemail)->first();
        if(!$admininfo){
            return back()->with('fail','We do not recognize your email address!!');
        }else{
            $admininfo = Admin::where('admin_password','=',$request->adminpass)->first();
            if($admininfo){
                $request->session()->put('LoggedUser',$admininfo->id);
                return redirect('/admindashboard');
            }else{
                return back()->with('fail','Incorrect Password');
            }
        }
    }

    public function admindashboard(){
        $data = ['LoggedUserinfo'=>Admin::where('id','=',session('LoggedUser'))->first()];
        $customerdata = Customer::all();
        return view('admin.admindashboard',$data)->with('customerdata',$customerdata);
    }

    public function adminlogout(){
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect('/adminlogin');
        }
    }

    public function admincustomerregister(){
        return view('pro.admincustomerregister');
    }
    public function admincustomersave(Request $request){
        $request -> validate([
            'cname'=>'required',
            'ccontact'=>'required',
            'nort'=>'required',
            'wdays'=>'required',
            'nog'=>'required',
            'rdate'=>'required',
            'rtime'=>'required'
        ]);
        $customer = new Customer;
        $customer -> customer_name = $request -> cname;
        $customer -> customer_contact = $request -> ccontact;
        $customer -> numberof_tables = $request -> nort;
        $customer -> week_days = $request -> wdays;
        $customer -> numberof_guests = $request -> nog;
        $customer -> reservation_date = $request -> rdate;
        $customer -> reservation_time = $request -> rtime;
        $csave = $customer -> save();
        if($csave){
            return back()->with('success','New Customer has been successfully Added');
        }else{
            return back()->with('fail','Something went wrong, try again later');
        }
    }
    public function admincustomeredit($id){
        $data = Customer::find($id);
        return view('pro.admincustomeredit',['data'=>$data]);
    }
    public function admincustomerupdate(Request $request, Customer $customer){
        $request -> validate([
            'cname'=>'required',
            'ccontact'=>'required',
            'nort'=>'required',
            'wdays'=>'required',
            'nog'=>'required',
            'rdate'=>'required',
            'rtime'=>'required'
        ]);
        $data = Customer::find($request->id);
        $data -> customer_name = $request -> cname;
        $data -> customer_contact = $request -> ccontact;
        $data -> numberof_tables = $request -> nort;
        $data -> week_days = $request -> wdays;
        $data -> numberof_guests = $request -> nog;
        $data -> reservation_date = $request -> rdate;
        $data -> reservation_time = $request -> rtime;
        $saved = $data -> save();
        if($saved){
            return redirect('admindashboard')->with('succ','Updated Successfully');
        }else{
            return redirect('admindashboard')->with('fai','Something went wrong, try again later');
        }
    }
    public function admincustomerdelete($id){
        $data = Customer::find($id);
        $dele = $data -> delete();
        if($dele){
            return redirect('admindashboard')->with('succ','Deleted Successfully');
        }else{
            return redirect('admindashboard')->with('fai','Something went wrong, try again later');
        }
    }
}
