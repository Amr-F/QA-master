@extends('layouts.sidebar')
@extends('layouts.app')
@section('content')


    <div class="wrapper-pur wrapper--w960">
        <div class="card card-5">
            <div class="card-heading">
                <h2 class="title">عرض فواتير المبيعات حسب تاريخ معين</h2>

            </div>
            <div class="card-body">

                <form method="POST" action="/sales/index_by_date_f">
                    @csrf

                    <div class="form-row">
                        <div class="name">بدايه المدده </div>
                        <div class="value">
                            <div class="input-group">
                                <input class="input--style-5" type="date" name="start_date" required>

                            </div>
                        </div>
                    </div>


                    <div class="form-row">
                        <div class="name">نهايه المدده </div>
                        <div class="value">
                            <div class="input-group">
                                <input class="input--style-5" type="date" name="end_date" required>

                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="text-center mb-5">
                            <button class="btn btn--radius-2 btn--green" type="submit">عمل</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

