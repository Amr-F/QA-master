<link rel="stylesheet" href="/css/jquery-ui.css">
@extends('layouts.sidebar')
@extends('layouts.app')



@section('content')


    <div id="app" class="wrapper-pur wrapper--w960">
        <div class="card card-5">
            <div class="card-heading">
                <h2 class="title">Make Permission To Exchange Store</h2>

            </div>
            <div   class="card-body">
                <form  method="POST" action="#">



                    @csrf



                    <div class="form-row">
                        <div class="name">permission numb</div>
                        <div class="value">
                            <div class="input-group">
                                <input class="input--style-5" type="text" name="per_num" readonly>
                            </div>
                        </div>
                    </div>


                    <div class="form-row">
                        <div class="name">DATE</div>
                        <div class="value">
                            <div class="input-group">
                                <input id="names" class="input--style-5" ata-input="true" type="date" name="date" required>
                            </div>
                        </div>
                    </div>





                    <table class="table">
                        <thead>
                        <tr>
                            <th>CODE</th>
                            <th>ITEM</th>
                            <th>QUANTITY</th>
                        </tr>
                        </thead>
                        <tbody id="records">

                        <tr>
                            <td><div class="form-row">
                                    <div class="input-group">
                                        <input class="input--style-5" type="text" id="code" name="code" required>
                                    </div>
                                </div></td>


                            <td><div class="form-row">
                                    <div class="input-group">
                                        <input class="input--style-5"id="item_name" type="text" name="item_name" required>
                                    </div>
                                </div></td>

                            <td><div class="form-row">
                                    <div class="input-group">
                                        <input class="input--style-5" id="quantity" type="text" name="item_quantity" required>
                                    </div>
                                </div></td>



                        </tr>

                        </tbody>
                    </table>






                    <div>
                        <div class="text-center mb-5 noPrint" >
                            <button id="submit" class=" btn btn--radius-2 btn--green ">ADD</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection












