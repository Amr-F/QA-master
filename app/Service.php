<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = ['customer_id','name','date','service_price','service_cost','cash_id','accountreceivables_id'];
    
    public function customer(){
        return $this->belongsTo(Customer::class,'customer_id');
    }

    public function cash(){
        return $this->belongsTo(Cash::class,'cash_id');
    }

    public function account_receivalbe()
    {
        return $this->belongsTo(AccountReceivable::class,'accountreceivables_id');
    } 

    public static function getIncome($firstDate,$secondDate)
    {
        $total = 0;
        $service = Service::whereBetween('date',[$firstDate,$secondDate])->get();
        $service->each(function(Service $service) use (&$total)
        {
            $price = $service->service_price - $service->service_cost;
            $total += $price;
        });
        return $total;
    }

    public static function boot() {
        parent::boot();

        static::deleting(function(Service $service ) { // before delete() method call this
             $service->account_receivalbe()->delete();
             $service->cash()->delete();
             // do the rest of the cleanup...
        });
    }
}
