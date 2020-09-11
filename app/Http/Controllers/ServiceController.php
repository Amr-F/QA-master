<?php

namespace App\Http\Controllers;

use App\Cash;
use App\Customer;
use App\Service;
use App\AccountReceivable;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
     public function __construct()
     {
        $this->middleware('redirectunAuth',['except' => ['store','create']]);
    }
    public function create (Customer $customer){
        return view ('services.create' ,compact('customer'));
    }


    public function store(Request $request){
        $data = $request->all();
        $cash = intval($data['cash']);
        $name = ($data['name']);
        $customer_id =($data['customer_id']);
        $debit= ($data['credit']);
        $date= ($data['date']);
        $reason = 'Service ' . $name;
        $cash = Cash::create(['debit' => $cash,'reason' => $reason]);
        $ar = AccountReceivable::create( ['customer_id' => $customer_id , 'debit'=>$debit , 'credit'=> 0,'payment_date'=>$date ] );
        $data['cash_id'] = $cash->id;
        $data['accountreceivables_id'] = $ar->id;
        Service::create($data);
        return redirect('/services/create');
    }

    public function index(){
        $service=Service::orderBy('created_at', 'desc')->paginate(10);
        return view('services.index',compact('service'));
    }

    public function show(Service $service)
    {
        return view ('services.show' ,compact('service'));

    }
    public function edit (Service $service){
        $ar = $service->account_receivalbe->debit;
        $cash = $service->cash->debit;
        return view ('services.edit' , compact('service','ar','cash'));
    }


    public function update (Request $request){
        $data = $request->all();
        $id = $request->route('id');
        $service = Service::find($id);
        $service->update($data);
        $cash = intval($data['cash']);
        $name = ($data['name']);
        $reason = 'Service ' . $name;
        $customer_id = $service->customer->id;
        $debit= ($data['credit']);
        $date= ($data['date']);
        $service->cash()->update(['debit' => $cash,'reason' => $reason]);
        $service->account_receivalbe()->update(['customer_id' => $customer_id , 'debit'=>$debit ,'payment_date'=>$date ]);
        return redirect('/services'.'/'.$id);
    }

    public function destroy($id){

        Service::find($id)->delete();
    return redirect('/services/index');
    }

}
