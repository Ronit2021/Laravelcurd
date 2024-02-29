@extends('master')
@section('content')
<div class="container-fluid custom-product ">

    <div class="row mt-5">
        <div class="col-md-12">

            <table class="table table-striped">
               
                <tbody>
                    <tr>
                        <td>Amount</td>
                        <td>{{$total}}</td>
                    </tr>
                    <tr>
                        <td>Tax</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>Delivery</td>
                        <td>100</td>
                    </tr>
                    <tr>
                        <td>Total</td>
                        <td>{{$total+100}}</td>
                    </tr>
                </tbody>
              </table>

                
        </div>
        <div class="col-md-12">
            <form action="orderplace" method="post">
                @csrf
                    <div class="form-group">
                        <textarea name="address" id="" cols="100" rows="5" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Payment Method</label>
                        <input type="radio" name="payment_method" value="Online Payment" id="op"> <label for="op">Online Payment</label> | 
                        <input type="radio" name="payment_method" value="EMI Payment" id="emi"> <label for="emi">EMI Payment</label> | 
                        <input type="radio" name="payment_method" value="Pay on Delivery" id="pod"> <label for="pod">Pay on Delivery</label>
                    
                    </div>
                    <div class="form-group">
                        <button  class="btn btn-success" type="submit">Order Now</button>
                    </div>
            </form>
        </div>
    </div>
 
</div>


@endsection