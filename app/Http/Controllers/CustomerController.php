<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function index(){
        $data = DB::table('sales.customers')
        ->offset(380)
        ->limit(20)
        ->get();

        return view('table', compact('data'));
    }
}
