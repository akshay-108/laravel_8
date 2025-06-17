@extends('master')
@section('content')

<div class="custom-product">
    <div class="row">
        <div class="col-sm-6">
            <table class="table">
                <tbody>
                    <tr>
                        <td>Price</td>
                        <td>{{$total}} Rupees</td>
                    </tr>
                    <tr>
                        <td>Tax</td>
                        <td>0 Rupees</td>
                    </tr>
                    <tr>
                        <td>Delivery</td>
                        <td>100 Rupees</td>
                    </tr>
                    <tr>
                        <td>Total</td>
                        <td>{{$total + 100}} Rupees</td>
                    </tr>
                </tbody>
            </table>
            <form method="POST" action="{{url('orderplace')}}">
                @csrf
                <div class="mb-3">
                  <textarea placeholder="Enter your address" name="address" class="form-control"> </textarea>
                </div>
                <div class="mb-3 form-check">
                    <label class="form-check-label" for="exampleCheck1">Payment Method</label>
                    <p>
                        <input type="radio" value="cash" name="payment">
                        <span>Online Payment</span>
                    </p>
                    <p>
                        <input type="radio" value="cash" name="payment">
                        <span>Emi Payment</span>
                    </p>
                    <p>
                        <input type="radio" value="cash" name="payment">
                        <span>Cash On Delivery</span>
                    </p>
                </div>
                <button type="submit" class="btn btn-primary">Order Now</button>
              </form>
        </div>
    </div>
</div>
@endsection
