@extends('master')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <img style="width: 30%;margin: 50px;" src="{{$product['gallary']}}" alt="">
        </div>
        <div class="col-sm-6">
            <a href="/">Go Back</a>
            <h2>{{$product['name']}}</h2>
            <h3>Price: {{$product['price']}}</h3>
            <h4>Categor: {{$product['category']}}</h4>
            <h4>Description: {{$product['description']}}</h4>
            <form action="/add_to_cart" method="post">
                @csrf
                <input type="hidden" name="product_id" value="{{$product['id']}}">
                <button class="btn btn-primary">Add to Cart </button>
            </form>    
            <br><br>
            <button class="btn btn-success">Buy Now</button>
            <br><br>
        </div>
    </div>
</div>
@endsection