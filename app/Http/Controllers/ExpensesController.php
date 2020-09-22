<?php

namespace App\Http\Controllers;

use App\Cash;
use App\Expcategory;
use App\Expenses;
use Illuminate\Http\Request;

class ExpensesController extends Controller
{
    public function __construct()
    {
        $this->middleware('redirectunAuth');
    }
    public function create (Expcategory $expcategory){
        return view ('expenses.create' ,compact('expcategory'));
    }
    public function store(Request $request){
        $data = $request->all();
        $reason = 'paid '.$data['amount'];
        $cash= Cash::create(['credit' => $data['amount'],'reason' => $reason]);
        $cash_id = $cash->id;
        $data['cash_id'] = $cash_id;
        Expenses::create($data);
        return redirect('/expenses/create');
    }


    public function index(){
    $expense= Expenses::orderBy('created_at', 'desc')->paginate(10);
        return view('expenses.index',compact('expense'));
    }

    public function show(Expenses $expense)
    {
        return view ('expenses.show' ,compact('expense'));

    }
    public function edit (Expcategory $expcategory ,Expenses $expense ){
        return view ('expenses.edit' , compact('expcategory','expense'));
    }

    public function update (Request $request){
        $data = $request->all();

        $data['id'] = $request->route('id');
        $exp= Expenses::where('id', '=', $data['id'])->firstOrFail();
        unset($data['_token']);
        unset($data['_method']);
        Expenses::where('id',$data['id'])->update($data);
        Cash::where('id',$exp['cash_id'])->update(['credit' => $data['amount']]);
        return redirect('/expenses'.'/'.$data['id']);
    }

    public function destroy($id){
        $exp= Expenses::where('id', '=', $id)->firstOrFail();
        $cash_id = $exp->cash_id;
        Expenses::find($id)->delete();
        Cash::find($cash_id)->delete();
        return redirect('/expenses/index');
    }

}
