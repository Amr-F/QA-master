@extends('layouts.sidebar')
@extends('layouts.app')

@section('content')




</div>
<div class="wrapper-pur wrapper--w960">
    <div class="card card-5">
        <div class="card-heading">
            <h2 class="title">عرض السجل النقدي</h2>

        </div>
        <div class="card-body">


            <table class="table">
                <thead>
                <tr>
                    <th>رقم السجل</th>
                    <th>السبب</th>
                    <th>التاريخ</th>
                    <th>دائن</th>
                    <th>مدين</th>

                </tr>
                </thead>
                <tbody>
                @foreach($cash as $cashh)
                    <tr>
                        <td><a href="/cash/{{$cashh->id}}" >{{ $cashh->id }}</a></td>
                        <td>{{$cashh -> reason}}  </td>
                        <td>{{$cashh -> updated_at}}  </td>
                        <td>{{$cashh -> debit }}  </td>
                        <td>{{$cashh -> credit}}  </td>


                    </tr>

                @endforeach

                </tbody>
            </table>

            <div class="text-center mb-5">
            <div class="form-row">
                <div class="name"><h1>الاجمالي </h1>  </div>
                <div class="value">
                    <div class="input-group">
                        <h1>  = {{$total}}</h1>
                    </div>
                </div>
            </div>
            </div>

            <div class="row">
                <div class="col-12 text-center">
                    {{ $cash->links() }}
                </div>
            </div>



        </div>
    </div>
</div>
</div>
@endsection
