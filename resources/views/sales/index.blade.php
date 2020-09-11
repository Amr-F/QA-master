@extends('layouts.sidebar')
@extends('layouts.app')


@section('content')

    <div class="text-right mb-5">
        <button type="button"  onclick="window.location.href='/sales/index_by_date';"
                class="btn btn-success">عرض فواتير المبيعات حسب تاريخ معين</button>


    </div>



<div class="wrapper-pur wrapper--w960">
    <div class="card card-5">
        <div class="card-heading">
            <h2 class="title">جميع فواتير المبيعات</h2>

        </div>
        <div class="card-body">


            <table class="table">
                <thead>
                <tr>
                    <th>رقم الفاتوره</th>
                    <th>التريخ</th>
                    <th>اسم العميل</th>
                    <th>الاجمالي</th>


                </tr>
                </thead>
                <tbody>
                @foreach ($sales as $sale)
                    <tr>
                        <td> <a href='/sales/{{$sale->id}}' >{{$sale->id}}</td>
                        <td>{{$sale->created_at}}</td>
                        <td>{{$sale->customer->name}}</td>
                        <td>{{$sale->total}}</td>
                    </tr>
                @endforeach

                </tbody>
            </table>
          <div class="row">
            <div class="col-12 text-center">
                {{ $sales->links() }}
            </div>
        </div>


        </div>
    </div>

</div>
@endsection
