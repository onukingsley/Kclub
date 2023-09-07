<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Order;
use App\Models\Ticket;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $event = Event::all();
        $ticket = Ticket::all();
        $customers = User::where('usertype', '=', '0')->get();

        $wp = null;
        $tt = null;
        $um1=null;
        $um2 = null;
        $cp = null;
        $af = null;
        $total = null;

        $wpa = 0;
        $tta = 0;
        $um1a=0;
        $um2a = 0;
        $cpa = 0;
        $afa = 0;


        foreach ($ticket as $tick){
            $total += $tick->price;
            if($tick->event_id == 1 ){
                $wp += $tick->price;
                $wpa++;
            }elseif ($tick->event_id == 2 ){
                $tt += $tick->price;
                $tta++;
            }elseif ($tick->event_id == 3 ){
                $um1 += $tick->price;
                $um1a++;
            }elseif ($tick->event_id == 4 ){
                $um2 += $tick->price;
                $um2a++;
            }elseif ($tick->event_id == 5 ){
                $cp += $tick->price;
                $cpa++;
            }elseif ($tick->event_id == 6 ){
                $af += $tick->price;
                $afa++;
            }
        }
        $pricelist = [$wp,$tt,$um1,$um2,$cp,$af];
        $ticketlist = ['whiteparty'=>$wpa,'Treat-or-tequilla'=>$tta,'unmasked1'=>$um1a,'unmasked2'=>$um2a,'crocsParty'=>$cpa,'africana'=>$afa];
        $ticketcount = [$wpa,$tta,$um1a,$um2a,$cpa,$afa];

        $lis = [];
        $eventdate = [];
        foreach ($event as $enve){
            array_push($lis,$enve->event_name);
            array_push($eventdate,date('Y-m-d',strtotime($enve->event_date)));
        }

        //fetch latest orders
        $orders = Order::latest()->limit(8)->get();
        //dd($orders[0]->event->event_name);


        return view('admin.dashboard',['orders'=>$orders,'ticketcount'=>$ticketcount,'ticketlist'=>$ticketlist,'eventdate'=> $eventdate, "event" => $event, "lis"=>$lis, 'pricelist'=>$pricelist, 'total'=>$total, 'customers'=> $customers, 'ticket' => $ticket ]);
    }
}
