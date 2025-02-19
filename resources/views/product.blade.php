@extends('master')
@section('content')

<div class="container">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>
<div class="viewed">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="bbb_viewed_title_container">
                        <h3 class="bbb_viewed_title">Recently Viewed</h3>
                        <div class="bbb_viewed_nav_container">
                            <div class="bbb_viewed_nav bbb_viewed_prev"><i class="fas fa-chevron-left"></i></div>
                            <div class="bbb_viewed_nav bbb_viewed_next"><i class="fas fa-chevron-right"></i></div>
                        </div>
                    </div>

                    <div class="bbb_viewed_slider_container">
                        
                      

                        <div class="owl-carousel owl-theme bbb_viewed_slider">
                         
                            @foreach($products as $item)
                            <div class="owl-item">
                                <a href="detail/{{$item->id}}">
                                <div class="bbb_viewed_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                    <div class="bbb_viewed_image"><img src="{{$item->gallary}}" alt=""></div>
                                    <div class="bbb_viewed_content text-center">
                                        <div class="bbb_viewed_price">{{$item->price}}</div>
                                        <div class="bbb_viewed_name"><a href="#">{{$item->name}}</a></div>
                                    </div>
                                    <ul class="item_marks">
                                        <li class="item_mark item_discount">-25%</li>
                                        <li class="item_mark item_new">new</li>
                                    </ul>
                                </div>
                                </a>    
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <h3 style="margin:15px;">Trending Products</h3>
                    @foreach($products as $item)
                    <div class="container">
                                <div class="float" style="float:left;margin: 10px;background: white;padding: 20px;">
                                    <div class="" style="display:inline-grid">
                                        <img style="margin: 0 auto;" src="{{$item->gallary}}" alt="">
                                        <a href="detail/{{$item->id}}">{{$item->name}}</a>
                                    </div>
                                </div>
                            </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>   
<script>
    $(document).ready(function()
{
        if($('.bbb_viewed_slider').length)
        {
            var viewedSlider = $('.bbb_viewed_slider');

            viewedSlider.owlCarousel(
            {
                loop:true,
                margin:30,
                autoplay:true,
                autoplayTimeout:6000,
                nav:false,
                dots:false,
                responsive:
                {
                    0:{items:1},
                    575:{items:2},
                    768:{items:3},
                    991:{items:4},
                    1199:{items:5}
                }
            });

            if($('.bbb_viewed_prev').length)
            {
                var prev = $('.bbb_viewed_prev');
                prev.on('click', function()
                {
                    viewedSlider.trigger('prev.owl.carousel');
                });
            }

            if($('.bbb_viewed_next').length)
            {
                var next = $('.bbb_viewed_next');
                next.on('click', function()
                {
                    viewedSlider.trigger('next.owl.carousel');
                });
            }
        }

    });
    </script>

<style>
    

@import url('https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800,900|Rubik:300,400,500,700,900');

*
{
    margin: 0;
    padding: 0;
    -webkit-font-smoothing: antialiased;
    -webkit-text-shadow: rgba(0,0,0,.01) 0 0 1px;
    text-shadow: rgba(0,0,0,.01) 0 0 1px;
}
body
{
    font-family: 'Rubik', sans-serif;
    font-size: 14px;
    font-weight: 400;
    background: #eff6fa;
    color: #000000;
}
div
{
    display: block;
    position: relative;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
ul
{
    list-style: none;
    margin-bottom: 0px;
}
p
{
    font-family: 'Rubik', sans-serif;
    font-size: 14px;
    line-height: 1.7;
    font-weight: 400;
    color: #828282;
    -webkit-font-smoothing: antialiased;
    -webkit-text-shadow: rgba(0,0,0,.01) 0 0 1px;
    text-shadow: rgba(0,0,0,.01) 0 0 1px;
}
p a
{
    display: inline;
    position: relative;
    color: inherit;
    border-bottom: solid 1px #ffa07f;
    -webkit-transition: all 200ms ease;
    -moz-transition: all 200ms ease;
    -ms-transition: all 200ms ease;
    -o-transition: all 200ms ease;
    transition: all 200ms ease;
}
a, a:hover, a:visited, a:active, a:link
{
    text-decoration: none;
    -webkit-font-smoothing: antialiased;
    -webkit-text-shadow: rgba(0,0,0,.01) 0 0 1px;
    text-shadow: rgba(0,0,0,.01) 0 0 1px;
}
p a:active
{
    position: relative;
    color: #FF6347;
}
p a:hover
{
    color: #FFFFFF;
    background: #ffa07f;
}
p a:hover::after
{
    opacity: 0.2;
}
::selection
{
    
}
p::selection
{
    
}
h1{font-size: 48px;}
h2{font-size: 36px;}
h3{font-size: 24px;}
h4{font-size: 18px;}
h5{font-size: 14px;}
h1, h2, h3, h4, h5, h6
{
    font-family: 'Rubik', sans-serif;
    font-weight: 500;
    -webkit-font-smoothing: antialiased;
    -webkit-text-shadow: rgba(0,0,0,.01) 0 0 1px;
    text-shadow: rgba(0,0,0,.01) 0 0 1px;
}
h1::selection, 
h2::selection, 
h3::selection, 
h4::selection, 
h5::selection, 
h6::selection
{
    
}
.form-control
{
    color: #db5246;
}
section
{
    display: block;
    position: relative;
    box-sizing: border-box;
}
.clear
{
    clear: both;
}
.clearfix::before, .clearfix::after
{
    content: "";
    display: table;
}
.clearfix::after
{
    clear: both;
}
.clearfix
{
    zoom: 1;
}
.float_left
{
    float: left;
}
.float_right
{
    float: right;
}
.trans_200
{
    -webkit-transition: all 200ms ease;
    -moz-transition: all 200ms ease;
    -ms-transition: all 200ms ease;
    -o-transition: all 200ms ease;
    transition: all 200ms ease;
}
.trans_300
{
    -webkit-transition: all 300ms ease;
    -moz-transition: all 300ms ease;
    -ms-transition: all 300ms ease;
    -o-transition: all 300ms ease;
    transition: all 300ms ease;
}
.trans_400
{
    -webkit-transition: all 400ms ease;
    -moz-transition: all 400ms ease;
    -ms-transition: all 400ms ease;
    -o-transition: all 400ms ease;
    transition: all 400ms ease;
}
.trans_500
{
    -webkit-transition: all 500ms ease;
    -moz-transition: all 500ms ease;
    -ms-transition: all 500ms ease;
    -o-transition: all 500ms ease;
    transition: all 500ms ease;
}
.fill_height
{
    height: 100%;
}
.super_container
{
    width: 100%;
    overflow: hidden;
}
.prlx_parent
{
    overflow: hidden;
}
.prlx
{
    height: 130% !important;
}
.nopadding
{
    padding: 0px !important;
}
.button
{
    display: inline-block;
    background: #0e8ce4;
    border-radius: 5px;
    height: 48px;
    -webkit-transition: all 200ms ease;
    -moz-transition: all 200ms ease;
    -ms-transition: all 200ms ease;
    -o-transition: all 200ms ease;
    transition: all 200ms ease;
}
.button a
{
    display: block;
    font-size: 18px;
    font-weight: 400;
    line-height: 48px;
    color: #FFFFFF;
    padding-left: 35px;
    padding-right: 35px;
}
.button:hover
{
    opacity: 0.8;
}











.viewed
{
    padding-top: 51px;
    padding-bottom: 60px;
    background: #eff6fa;
}
.bbb_viewed_title_container
{
    border-bottom: solid 1px #dadada;
}
.bbb_viewed_title
{
    margin-bottom: 14px;
}
.bbb_viewed_nav_container
{
    position: absolute;
    right: -5px;
    bottom: 14px;
}
.bbb_viewed_nav
{
    display: inline-block;
    cursor: pointer;
}
.bbb_viewed_nav i
{
    color: #dadada;
    font-size: 18px;
    padding: 5px;
    -webkit-transition: all 200ms ease;
    -moz-transition: all 200ms ease;
    -ms-transition: all 200ms ease;
    -o-transition: all 200ms ease;
    transition: all 200ms ease;
}
.bbb_viewed_nav:hover i
{
    color: #606264;
}
.bbb_viewed_prev
{
    margin-right: 15px;
}
.bbb_viewed_slider_container
{
    padding-top: 50px;
}
.bbb_viewed_item
{
    width: 100%;
    background: #FFFFFF;
    border-radius: 2px;
    padding-top: 25px;
    padding-bottom: 25px;
    padding-left: 30px;
    padding-right: 30px;
}
.bbb_viewed_image
{
    width: 110px;
    height: 125px;
}
.bbb_viewed_image img
{
    display: block;
    max-width: 100%;
}
.bbb_viewed_content
{
    width: 100%;
    margin-top: 25px;
}
.bbb_viewed_price
{
    font-size: 16px;
    color: #000000;
    font-weight: 500;
}
.bbb_viewed_item.discount .bbb_viewed_price
{
    color: #df3b3b;
}
.bbb_viewed_price span
{
    position: relative;
    font-size: 12px;
    font-weight: 400;
    color: rgba(0,0,0,0.6);
    margin-left: 8px;
}
.bbb_viewed_price span::after
{
    display: block;
    position: absolute;
    top: 6px;
    left: -2px;
    width: calc(100% + 4px);
    height: 1px;
    background: #8d8d8d;
    content: '';
}
.bbb_viewed_name
{
    margin-top: 3px;
}
.bbb_viewed_name a
{
    font-size: 14px;
    color: #000000;
    -webkit-transition: all 200ms ease;
    -moz-transition: all 200ms ease;
    -ms-transition: all 200ms ease;
    -o-transition: all 200ms ease;
    transition: all 200ms ease;
}
.bbb_viewed_name a:hover
{
    color: #0e8ce4;
}
.item_marks
{
    position: absolute;
    top: 18px;
    left: 18px;
}
.item_mark
{
    display: none;
    width: 36px;
    height: 36px;
    border-radius: 50%;
    color: #FFFFFF;
    font-size: 10px;
    font-weight: 500;
    line-height: 36px;
    text-align: center;
}
.item_discount
{
    background: #df3b3b;
    margin-right: 5px; 
}
.item_new 
{
    background: #0e8ce4;
}
.bbb_viewed_item.discount .item_discount
{
    display: inline-block;
}
.bbb_viewed_item.is_new .item_new
{
    display: inline-block;
}

    </style>
@endsection