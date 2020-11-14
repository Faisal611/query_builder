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
            'name'=>'faisal',
            'email'=>'faisal@gmail.com',
            'votes'=>'150'
        ];
        DB::table('customars')->insert($data);
        return 'insert data successful';
    }
}
