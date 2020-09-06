@extends('layouts.sidebar')
@extends('layouts.app')
@section('content')
<script src="/js/editService.js" defer></script>


    <div class="wrapper wrapper--w550">
        <div class="card card-5">
            <div class="card-heading">
                <h2 class="title">تعديل خدمه</h2>

            </div>
            <div class="card-body">


                <form method="post" action="/services/{{$service ->id}}">
                    @csrf
                    @method('PUT')
                    <div class="form-row" >
                        <div class="name">اسم العميل</div>
                        <div class="value">
                            <div class="input-group">
                               <h3 class="input--style-5"  name="customer_name"   >{{ $service->customer->name }}</h3>
                            </div>

                        </div>

                    </div>
                    <div class="form-row" >
                        <div class="name">الاسم</div>
                        <div class="value">
                            <div class="input-group">
                                <input class="input--style-5"  name="name" value="{{$service -> name}}" required>

                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="name">التاريخ</div>
                        <div class="value">
                            <div class="input-group">
                                <input class="input--style-5" type="date" name="date" value="{{$service -> date}}" required>

                            </div>
                        </div>
                    </div>
                    <div class="form-row" >
                        <div class="name">السعر</div>
                        <div class="value">
                            <div class="input-group">
                                <input class="input--style-5"  name="service_price" value="{{$service -> service_price}}" required>

                            </div>
                        </div>
                    </div>
                    <div class="form-row" >
                        <div class="name">التكلفه</div>
                        <div class="value">
                            <div class="input-group">
                                <input class="input--style-5"  name="service_cost" value="{{$service -> service_cost}}" required>

                            </div>
                        </div>
                    </div>
                    <table class="table">
                        <thead>
                        <tr>

                            <th>النقدي</th>
                            <th>علي الحساب</th>
                        </tr>
                        </thead>
                        <tbody>


                        <tr>

                            <td><div class="form-row">
                                    <div class="input-group">
                                        <input class="input--style-5" value="{{$cash}}" type="cash" id="cash" name="cash" required>
                                    </div>
                                </div></td>
                            <td><div class="form-row">
                                    <div class="input-group">
                                        <input class="input--style-5" type="credit" value="{{$ar}}" id="credit" name="credit" required >
                                    </div>
                                </div></td>
                        </tr>

                        </tbody>
                    </table>
                    <div>
                        <div class="text-center mb-5">
                            <button class="btn btn--radius-2 btn--green" type="submit">عدل</button>
                        </div>
                    </div>
                </form>

                <form method="POST" action="/services/{{$service->id}}/destroy">
                    @csrf
                    <div class="text-center mb-5">
                        <button class="btn btn--radius-2 btn--red" type="submit">احذف</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

