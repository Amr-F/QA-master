<?php

namespace App\Http\Controllers;

use App\Cash;
use Illuminate\Http\Request;

class CashController extends Controller
{
    public function __construct()
    {
        $this->middleware('redirectunAuth');
    }

    public function index(){
        $totalCash = Cash::all();
        $cash= Cash::orderBy('created_at', 'desc')->paginate(10);
        $debit = $totalCash->sum('debit');
        $credit = $totalCash->sum('credit');
        $total = $debit-$credit;
        return view('cash.index',compact('cash','total'));
    }

    public function show(Cash $cash)
    {
        return view ('cash.show' ,compact('cash'));

    }
    public function create (){
        return view ('cash.create' );
    }
    public function store(Request $request){
        $data = $request->all();
        Cash::create($data);
        return redirect('/cash/index');
    }

}
