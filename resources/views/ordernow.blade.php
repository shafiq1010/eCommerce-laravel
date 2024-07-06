@extends('master')
@section('content')

<div class="container">

    <div class="container">
        <div class="row">
            <div class="col-sm-10">
                <br><h3>Order Details</h3><br>
                <table class="table">
                    <tr>
                        <td>Amount</td>
                        <td>$ {{$total}}</td>
                    </tr>
                    <tr>
                        <td>Tax</td>
                        <td>$ 0</td>
                    </tr>
                    <tr>
                        <td>Delivery</td>
                        <td>$ 10</td>
                    </tr>
                    <tr>
                        <td>Amount</td>
                        <td>$ {{$total+10}}</td>
                    </tr>
                </table>
                
                <form action="/orderplace" method="post">
                    @csrf
                  <div class="form-group row">
                    <div class="col-sm-10">
                        <textarea name="address" placeholder="Type your address" class="form-control"></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                      <label for="inputPassword" class="col-sm-4 col-form-label"><b>Payment Method</b></label>
                    <div class="col-sm-10">
                        <input type="radio" value="online payment" name="payment"><span> Online Payment</span><br>
                        <input type="radio" value="EMI payment" name="payment"><span> EMI Payment</span><br>
                        <input type="radio" value="COD" name="payment"><span> Cash on Delivery</span><br>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-10">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </div>
                </form>
            </div>
        </div>
    </div>
</div>   

@endsection