@extends('layouts.sidebar')
@extends('layouts.app')
@extends('layouts.chart')
@section('content')
<div class="container">
    <div class="text-center mb-5">
        <div class="row justify-content-center">
             <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                         @if (session('status'))
                             <div class="alert alert-success" role="alert">
                                  {{ session('status') }}
                             </div>
                           @endif
                            You are logged in {{Auth::user()-> name }}
                     </div>

                 </div>

            </div>
         </div>
    </div>


    <div id="app" class="wrapper-pur wrapper--w960">
        <div class="card card-5">
            <div class="card-heading">
                <h2 class="title">وصول سريع</h2>

            </div>
            <div   class="card-body">


                <div class="text-xl-center mb-5 noPrint">
                    <button type="button" onclick="window.location.href='/items/sortitem';" class="btn btn-success">المخزون</button>
                    <button type="button" onclick="window.location.href='/customers/index';" class="btn btn-success">العملاء</button>
                    <button type="button" onclick="window.location.href='/sales/create';" class="btn btn-success">فواتير المبيعات</button>
                    <button type="button" onclick="window.location.href='/accountReceivables/index';" class="btn btn-success">حسابات العملاء</button>
                </div>
                <div class="text-xl-center mb-5 noPrint">
                    <button type="button" onclick="window.location.href='/services/create';" class="btn btn-success">الخدمات</button>
                    <button type="button" onclick="window.location.href='/suppliers/index';" class="btn btn-success">موردين</button>
                    <button type="button" onclick="window.location.href='/purchases/create';" class="btn btn-success">فواتير المشتريات</button>
                    <button type="button" onclick="window.location.href='/accountPayables/index';" class="btn btn-success">حسابات موردين</button>
                </div>

                <div class="text-xl-center mb-5 noPrint">
                    <button type="button" onclick="window.location.href='/expenses/create';" class="btn btn-success">المصاريف</button>
                    <button type="button" onclick="window.location.href='/cash/index';" class="btn btn-success">تقارير الخذانه</button>

                </div>
            </div>
        </div>
    </div>

    </div>
</div>

@endsection


