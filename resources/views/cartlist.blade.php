@extends('master')
@section('content')

<div class="container">

    <div class="container">
            <div class="row">
                <div class="col-sm-10">
                    <h3 style="margin:15px;">Cart Listing</h3>
                    <a href="ordernow" class="btn btn-success">Order Now</a>
                    @foreach($products as $item)
                    <div class="row">
                                <div class="col-sm-3" style="float:left;margin: 10px;background: white;padding: 20px;">
                                    <div class="" style="display:inline-grid">
                                        <img style="margin: 0 auto;" src="{{$item->gallary}}" alt="">
                                    </div>
                                </div>
                                <div class="col-sm-3" style="float:left;margin: 10px;background: white;padding: 20px;">
                                    <div class="" style="display:inline-grid">
                                        <a href="detail/{{$item->id}}">{{$item->name}}</a>
                                        <h4>{{$item->price}}</h3>
                                        <h6>{{$item->description}}</h4>
                                    </div>
                                </div>
                                <div class="col-sm-3" style="float:left;margin: 10px;background: white;padding: 20px;">
                                    <a onclick="return confirm('Are you sure you want to delete this item?');"  href="/removecart/{{$item->cart_id}}" class="btn btn-warning">Remove Cart</a>
                                </div>
                            </div>
                    @endforeach
                     <a href="ordernow" class="btn btn-success">Order Now</a>
                </div>
            </div>
        </div>
</div>   

@endsection