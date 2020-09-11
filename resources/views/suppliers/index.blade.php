@extends('layouts.sidebar')
@extends('layouts.app')


@section('content')


    <div class="text-right mb-5">
    <button type="button"  onclick="window.location.href='/suppliers/create';"
            class="btn btn-success">اضف مورد جديد</button>

    </div>
    <div class="wrapper wrapper--w550">
        <div class="card card-5">
            <div class="card-heading">
                <h2 class="title">عرض جميع الموردين</h2>

            </div>
            <div class="card-body">


                <table class="table">
                    <thead>
                    <tr>
                        <th>الاسم</th>
                        <th>رقم الهاتف</th>


                    </tr>
                    </thead>
                    <tbody>
                    @foreach($supplier as $suppliers)
                        <tr>
                            <td><a href="/suppliers/{{$suppliers->id}}" >{{ $suppliers -> name}}</a></td>
                            <td>{{$suppliers -> phone}}  </td>


                        </tr>

                    @endforeach
                    </tbody>
                </table>
                <div class="row">
                    <div class="col-12 text-center">
                        {{ $supplier->links() }}
                    </div>
                </div>



        </div>
    </div>
</div>
    </div>
@endsection
