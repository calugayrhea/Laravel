<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DavidController extends Controller
{


    public function item( $myitem, $Name, $Price) {
        return view('David.item', ['myitem' =>$myitem, 'Name' =>$Name, 'Price' =>$Price]);
    }

    
    public function customer( $myID, $Name, $myaddress) {
            return view('David.customer', ['myID' =>$myID, 'Name' =>$Name, 'myaddress' =>$myaddress]);
        }

    // /Order/{MyID}/{Name}/{OrderNum}/{Date}
    public function order($myID, $Name, $OrderNum, $Date) {
                return view('David.order', ['myID' =>$myID, 'Name' =>$Name, 'OrderNum' =>$OrderNum, 'Date' =>$Date]);
            }

     ///OrderDetails/{TransNo}/{OrderNum}/{ItemID}/{Name}/{Price}/{Qty}
    public function orderdetails($TransNo, $MyOrder, $myItem, $Name, $Price, $Qty) {
                    return view('David.orderdetails', ['TransNo' =>$TransNo, 'MyOrder' =>$MyOrder, 'myItem' =>$myItem, 'Name' =>$Name, 'Price' =>$Price, 'Qty' =>$Qty]);
                }
}


