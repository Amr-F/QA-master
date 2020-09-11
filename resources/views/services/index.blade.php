@extends('layouts.sidebar')
@extends('layouts.app')


@section('content')




</div>
<div class="wrapper-pur wrapper--w960">
    <div class="card card-5">
        <div class="card-heading">
            <h2 class="title">عرض جميع الخدمات</h2>

        </div>
        <div class="card-body">


            <table class="table">
                <thead>
                <tr>
                    <th>اسم العميل</th>
		    <th>رقم الهاتف</th>
                    <th>اسم الخدمه</th>
                    <th>التاريخ</th>
                    <th>السعر</th>


                </tr>
                </thead>
                <tbody>
                @foreach($service as $services)
                    <tr>
                        <td><a href="/services/{{$services->id}}" >{{ $services->customer->name }}</a></td>
			<td>{{$services -> customer->phone}}  </td>
                        <td>{{$services -> name}}  </td>
                        <td>{{$services -> date}}  </td>
                        <td>{{$services -> service_price }}  </td>



                    </tr>

                @endforeach

                </tbody>
            </table>
            <div class="row">
            <div class="col-12 text-center">
                {{ $service->links() }}
            </div>
        </div>


        </div>
    </div>
</div>
</div>
@endsection
