@extends('master')
@section('content')

<div class="container">

    <div class="container">
            <div class="row">
                <div class="col-sm-4">
                <a href="">Filter</a>
                </div>
                <div class="col-sm-4">
                    <h3 style="margin:15px;">Search Results</h3>
                    @foreach($products as $item)
                    <div class="container">
                                <div class="float" style="float:left;margin: 10px;background: white;padding: 20px;">
                                    <div class="" style="display:inline-grid">
                                        <img style="margin: 0 auto;" src="{{$item->gallary}}" alt="">
                                        <a href="detail/{{$item->id}}">{{$item->name}}</a>
                                        <h3>{{$item->price}}</h3>
                                        <h4>{{$item->description}}</h4>
                                    </div>
                                </div>
                            </div>
                    @endforeach
                </div>
            </div>
        </div>
</div>   

@endsection