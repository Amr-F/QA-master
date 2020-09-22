@extends('layouts.sidebar')
@extends('layouts.app')


@section('content')



    <div class="text-right mb-5">
        <button type="button"  onclick="window.location.href='/purchases/index_by_date';"
                class="btn btn-success">عرض فواتير المشتريات حسب تاريخ معين</button>


    </div>
    <div class="wrapper-pur wrapper--w960">
        <div class="card card-5">
            <div class="card-heading">

                <h2 class="title">عرض فواتير المشتريات حسب تاريخ معين</h2>


            </div>
            <div class="card-body">


                <table class="table">
                    <thead>
                    <tr>
                        <th>رقم الفاتوره</th>
                        <th>التاريخ</th>
                        <th>اسم المورد</th>
                        <th>الاجمالي</th>


                    </tr>
                    </thead>
                    <tbody>

                    @foreach ($purchases as $purchase)
                        <tr>
                            <td> <a href='/purchases/{{$purchase->id}}' >{{$purchase->id}}</td>
                            <td>{{$purchase->bill_date}}</td>
                            <td>{{$purchase->supplier->name}}</td>
                            <td>{{$purchase->total}}</td>
                        </tr>
                    @endforeach

                    </tbody>

                </table>





            </div>
        </div>
    </div>
    </div>


@endsection
