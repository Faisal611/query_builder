<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomarsController extends Controller
{
    public function index(){
        return view('home.home');
    }

    public function customer(){
        $data=[
            'name'=>'sohan',
            'email'=>'sohan@gmail.com',
            'votes'=>'150'
        ];
        DB::table('customars')->insert($data);
        return 'customer create successful';
    }
    public function allCustomer(){

//       $allCustomer= DB::table('customars')->where('name','faisal')->get();
//       $allCustomer= DB::table('customars')->find(3);
//       $allCustomer= DB::table('customars')->pluck('id');
//        $allCustomer = DB::table('customars')
//            ->select('id', 'email')
//            ->where('votes',150)
//            ->get();
        $allCustomer =DB::table('customars')
            ->select('customars.email','invoices.amount')
            ->join('invoices','customars.id','=','invoices.id')
            ->get();

//       return $allCustomer;
        dd($allCustomer);
    }

    public function customerId(){
        $data =[
            'customer_id'=>'2',
            'amount'=>'150',
            'date'=>'2020/9/20'
        ];
        DB::table('invoices')->insert($data);
        return 'successful';
    }


}
