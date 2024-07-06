@extends('master')
@section('content')

<div class="container">

    <div class="container">
            <div class="row">
                <div class="col-sm-10">
                    <h3 style="margin:15px;">Order Details</h3>
                    @foreach($orders as $item)
                    <div class="row">
                                <div class="col-sm-4" style="float:left;margin: 10px;background: white;padding: 20px;">
                                    <div class="" style="display:inline-grid">
                                        <img style="margin: 0 auto;" src="{{$item->gallary}}" alt="">
                                    </div>
                                </div>
                                <div class="col-sm-4" style="float:left;margin: 10px;background: white;padding: 20px;">
                                    <div class="" style="display:inline-grid">
                                        <a href="detail/{{$item->id}}">Name: {{$item->name}}</a>
                                        <h6>Delivery Status: {{$item->status}}</h6>
                                        <h6>Address: {{$item->address}}</h6>
                                        <h6>Payment_status: {{$item->payment_status}}</h6>
                                        <h6>Payment Method: {{$item->payment_method}}</h6>
                                        <h6>Address: {{$item->address}}</h6>
                                    </div>
                                </div>

                            </div>
                    @endforeach
                </div>
            </div>
        </div>
</div>   

@endsection