@extends('layouts.sidebar')
@extends('layouts.app')
@section('content')


    <div class="text-right mb-5">
        <button type="button"  onclick="window.location.href='/items/create';"
                class="btn btn-success">+ اضف صنف</button>

    </div>
    <div class="wrapper-pur wrapper--w960">
        <div class="card card-5">
            <div class="card-heading">
                <h2 class="title">عرض المخزون</h2>

            </div>
            <div class="card-body">


                <table class="table">
                    <thead>
                    <tr>
                        <th>الكود</th>
                        <th>الاسم</th>
                        <th>سعر البيع</th>
                        <th>سعر الشراء</th>
                        <th>الكميه</th>
                        <th>الاجمالي</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($item as $items)
                        <tr>
                            <td><a href="/items/{{$items->id}}" >{{ $items -> id}}</a></td>
                            <td>{{$items -> name}}  </td>
                            <td>{{$items -> sale_price}}  </td>
                            <td>{{$items -> purchase_price}}  </td>
                            <td>{{$items -> quantity}}  </td>
                            <td>{{($items -> quantity)*($items -> purchase_price)}}  </td>
                        </tr>

                    @endforeach
                    </tbody>
                </table>

{{--                <div class="row">--}}
{{--                    <div class="col-12 text-center">--}}
{{--                        {{ $item->links() }}--}}
{{--                    </div>--}}
{{--                </div>--}}

            </div>
        </div>
    </div>
    </div>
@endsection
