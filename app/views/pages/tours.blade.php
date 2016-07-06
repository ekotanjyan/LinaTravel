@extends('layout.master')
@section('content')
@include('layout.slidebar')
<section id="content">
	<div class="section">
		<div class="container">
		    <div class="section white-bg">
		        <div class="container">
		            <div class="text-center description block">
		                <h1>Most Popular Tour Packages</h1>
		                <p>Nunc cursus libero purus ac congue ar lorem cursus ut sed pulvinar massa idend porta nequetiam</p>
		            </div>
		            <div class="tour-packages row add-clearfix image-box">
		            @foreach($tours as $value)
		                <div class="col-sm-6 col-md-4">
		                    <article class="box animated fadeInLeft" data-animation-type="fadeInLeft" style="animation-duration: 1s; visibility: visible;">
		                        <figure>
		                            <a href="http://www.soaptheme.net/html/travelo/tour-index.html#"><img src="{{URL::to($value->imgurl)}}"></a>
		                            <figcaption>
		                                <span class="price">{{$value->price}}</span>
		                                <h2 class="caption-title">{{$value->name}}</h2>
		                            </figcaption>
		                        </figure>
		                    </article>
		                </div>
		            @endforeach
		            </div>
		            {{ Form::open(array('url' => 'tours_upload','files' => true)) }}
		            {{ Form::label('NAME')}}
		            {{ Form::text('name')}}
		            {{ Form::label('PRICE')}}
		            {{ Form::text('price')}}
		            {{ Form::label('IMAGE')}}
		            {{ Form::file('file')}}
		            {{ Form::submit('Upload') }}
		            {{ Form::close() }}
		        </div>
		    </div>
		    <div class="section">
		        <div class="container">
		            <h2>Travel Guide and Tips</h2>
		            <div class="tour-guide image-carousel style2 flexslider animated" data-animation="slide" data-item-width="270" data-item-margin="30" data-animation-type="fadeInUp">
		                
		            <div class="flex-viewport" style="overflow: hidden; position: relative;"><ul class="slides image-box" style="width: 1000%; transition-duration: 0s; transform: translate3d(-300px, 0px, 0px);">
		                    <li style="width: 270px; float: left; display: block;">
		                        <article class="box">
		                            <figure>
		                                <img src="{{URL::asset('asset/images/tours/1(1).jpg')}}" alt="" draggable="false">
		                            </figure>
		                            <div class="details">
		                                <h4>Baggage Information</h4>
		                                <p>Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massa idporta nequetiam elerisque mi id faucibus iaculis vitae pulvinar.</p>
		                            </div>
		                        </article>
		                    </li>
		                    <li style="width: 270px; float: left; display: block;">
		                        <article class="box">
		                            <figure>
		                                <img src="{{URL::asset('asset/images/tours/2(1).jpg')}}" alt="" draggable="false">
		                            </figure>
		                            <div class="details">
		                                <h4>Airport Check-in</h4>
		                                <p>Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massa idporta nequetiam elerisque mi id faucibus iaculis vitae pulvinar.</p>
		                            </div>
		                        </article>
		                    </li>
		                    <li style="width: 270px; float: left; display: block;">
		                        <article class="box">
		                            <figure>
		                                <img src="{{URL::asset('asset/images/tours/3(1).jpg')}}" alt="" draggable="false">
		                            </figure>
		                            <div class="details">
		                                <h4>Traveling with Kids</h4>
		                                <p>Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massa idporta nequetiam elerisque mi id faucibus iaculis vitae pulvinar.</p>
		                            </div>
		                        </article>
		                    </li>
		                    <li style="width: 270px; float: left; display: block;">
		                        <article class="box">
		                            <figure>
		                                <img src="{{URL::asset('asset/images/tours/4(1).jpg')}}" alt="" draggable="false">
		                            </figure>
		                            <div class="details">
		                                <h4>Special Assistance</h4>
		                                <p>Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massa idporta nequetiam elerisque mi id faucibus iaculis vitae pulvinar.</p>
		                            </div>
		                        </article>
		                    </li>
		                    <li style="width: 270px; float: left; display: block;">
		                        <article class="box">
		                            <figure>
		                                <img src="{{URL::asset('asset/images/tours/1(1).jpg')}}" alt="" draggable="false">
		                            </figure>
		                            <div class="details">
		                                <h4>Baggage Information</h4>
		                                <p>Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massa idporta nequetiam elerisque mi id faucibus iaculis vitae pulvinar.</p>
		                            </div>
		                        </article>
		                    </li>
		                </ul></div><ol class="flex-control-nav flex-control-paging"><li><a class="">1</a></li><li><a class="flex-active">2</a></li></ol><ul class="flex-direction-nav"><li><a class="flex-prev" href="http://www.soaptheme.net/html/travelo/tour-index.html#">Previous</a></li><li><a class="flex-next" href="http://www.soaptheme.net/html/travelo/tour-index.html#">Next</a></li></ul></div>
		        </div>
		    </div>
		    <div class="section white-bg">
		        <div class="container">
		            <div class="investor-slideshow image-carousel style2 investor-list animated" data-animation-type="fadeInUp" data-animation="slide" data-item-width="170" data-item-margin="30">
		                
		            <div class="flex-viewport" style="overflow: hidden; position: relative;"><ul class="slides" style="width: 1200%; transition-duration: 0s; transform: translate3d(0px, 0px, 0px);">
		                    @foreach($partners as $value)
		                    <li style="width: 170px; float: left; display: block;">
		                        <div class="travelo-box">
		                            <a href="http://www.soaptheme.net/html/travelo/tour-index.html#"><img src="{{URL::asset($value->imgurl)}}" alt="" draggable="false"></a>
		                        </div>
		                    </li>
		                    @endforeach
		                </ul></div><ol class="flex-control-nav flex-control-paging"><li><a class="">1</a></li><li><a class="flex-active">2</a></li></ol><ul class="flex-direction-nav"><li><a class="flex-prev" href="http://www.soaptheme.net/html/travelo/tour-index.html#">Previous</a></li><li><a class="flex-next" href="http://www.soaptheme.net/html/travelo/tour-index.html#">Next</a></li></ul></div>
		        </div>
		    </div>
		    <div class="section">
		        <div class="container">
		            <div class="row">
		                <div class="col-sm-6 animated" data-animation-type="fadeInLeft">
		                    <h2>Limited Time Offers</h2>
		                    <div class="toggle-container box" id="accordion1">
		                        <div class="panel style1">
		                            <h5 class="panel-title">
		                                <a href="http://www.soaptheme.net/html/travelo/tour-index.html#acc1" data-toggle="collapse" data-parent="#accordion1"><span class="price"><small>From</small>$30</span>Travel Insurance Single Person</a>
		                            </h5>
		                            <div class="panel-collapse collapse in" id="acc1">
		                                <div class="panel-content">
		                                    <p>Nunc cursus libero purus ac congue ar lorem cursus ut sed pulvinar massa iden porta nequetiam elerisque mi id habitant morbi tristique senectus.</p>
		                                </div><!-- end content -->
		                            </div>
		                        </div>
		                        
		                        <div class="panel style1">
		                            <h5 class="panel-title">
		                                <a class="collapsed" href="http://www.soaptheme.net/html/travelo/tour-index.html#acc2" data-toggle="collapse" data-parent="#accordion1"><span class="price"><small>From</small>$126</span>Inflight Dinner/ Lunch Deal</a>
		                            </h5>
		                            <div class="panel-collapse collapse" id="acc2">
		                                <div class="panel-content">
		                                    <p>Nunc cursus libero purus ac congue ar lorem cursus ut sed pulvinar massa iden porta nequetiam elerisque mi id habitant morbi tristique senectus.</p>
		                                </div><!-- end content -->
		                            </div>
		                        </div>
		                        
		                        <div class="panel style1">
		                            <h5 class="panel-title">
		                                <a class="collapsed" href="http://www.soaptheme.net/html/travelo/tour-index.html#acc3" data-toggle="collapse" data-parent="#accordion1"><span class="price"><small>From</small>$360</span>Luxury Appartment for Family</a>
		                            </h5>
		                            <div class="panel-collapse collapse" id="acc3">
		                                <div class="panel-content">
		                                    <p>Nunc cursus libero purus ac congue ar lorem cursus ut sed pulvinar massa iden porta nequetiam elerisque mi id habitant morbi tristique senectus.</p>
		                                </div><!-- end content -->
		                            </div>
		                        </div>
		                    </div>
		                </div>
		                <div class="col-sm-6 animated" data-animation-type="fadeInRight">
		                    <h2>What Travelers Say?</h2>
		                    <div class="testimonial style1 box">
		                        
		                    <div class="testimonial-viewport" style="overflow: hidden; position: relative;"><ul class="slides " style="width: 600%; transition-duration: 0s; transform: translate3d(0px, 0px, 0px);">
		                            <li class="testimonial-active-slide" style="width: 520px; float: left; display: block; height: 199px;">
		                                <p class="description">This is the 3rd time I’ve used Travelo website and telling you the truth their services are always realiable and it only takes few minutes to plan and finalize your entire trip using their extremely fast website and up to date listings. I’m super excited about my next trip to Paris.</p>
		                                <div class="author clearfix">
		                                    <a href="http://www.soaptheme.net/html/travelo/tour-index.html#"><img src="{{URL::asset('asset/images/tours/author1.png')}}" alt="" width="74" height="74" draggable="false"></a>
		                                    <h5 class="name">Jessica Brown<small>guest</small></h5>
		                                </div>
		                            </li>
		                            <li style="width: 520px; float: left; display: block; height: 199px;">
		                                <p class="description">This is the 3rd time I’ve used Travelo website and telling you the truth their services are always realiable and it only takes few minutes to plan and finalize your entire trip using their extremely fast website and up to date listings. I’m super excited about my next trip to Paris.</p>
		                                <div class="author clearfix">
		                                    <a href="http://www.soaptheme.net/html/travelo/tour-index.html#"><img src="{{URL::asset('asset/images/tours/author2.png')}}" alt="" width="74" height="74" draggable="false"></a>
		                                    <h5 class="name">Lisa Kimberly<small>guest</small></h5>
		                                </div>
		                            </li>
		                            <li style="width: 520px; float: left; display: block; height: 199px;">
		                                <p class="description">This is the 3rd time I’ve used Travelo website and telling you the truth their services are always realiable and it only takes few minutes to plan and finalize your entire trip using their extremely fast website and up to date listings. I’m super excited about my next trip to Paris.</p>
		                                <div class="author clearfix">
		                                    <a href="http://www.soaptheme.net/html/travelo/tour-index.html#"><img src="{{URL::asset('asset/images/tours/author1.png')}}" alt="" width="74" height="74" draggable="false"></a>
		                                    <h5 class="name">Jessica Brown<small>guest</small></h5>
		                                </div>
		                            </li>
		                        </ul></div></div>
		                </div>
		            </div>
		        </div>
		    </div>
		    <div class="global-map-area promo-box parallax" data-stellar-background-ratio="0.5" style="background-position: 50% 1081.5px;">
		        <div class="container">
		            <div class="content-section description pull-right col-sm-9" style="height: 210px;">
		                <div class="table-wrapper hidden-table-sm" style="height: 100%;">
		                    <div class="table-cell">
		                        <h2 class="m-title">
		                            Welcome to World’s No. 1<br><em>Travel Based Theme <i>Ever Created!</i></em>
		                        </h2>
		                    </div>
		                    <div class="action-section table-cell">
		                        <button class="btn-large">Book With Us Now</button>
		                    </div>
		                </div>
		            </div>
		            <div class="image-container col-sm-4" style="height: 210px; margin-left: -5%; position: relative;">
		                <img src="{{URL::asset('asset/images/tours/promo-image2.png')}}" alt="" width="312" height="195" style="position: absolute; bottom: 0px; left: 0px; visibility: visible;">
		            </div>
		        </div>
		    </div>
		    <div class="section">
		        <div class="container">
		            <h2>Last Minute Packages</h2>
		            <div class="image-carousel style2 flexslider" data-animation="slide" data-item-width="270" data-item-margin="30">
		                
		            <div class="flex-viewport" style="overflow: hidden; position: relative;"><ul class="slides tour-locations" style="width: 1000%; transition-duration: 0s; transform: translate3d(-300px, 0px, 0px);">
		                    <li style="width: 270px; float: left; display: block;">
		                        <article class="box">
		                            <figure>
		                                <a href="http://www.soaptheme.net/html/travelo/tour-index.html#" class="hover-effect">
		                                    <img src="{{URL::asset('asset/images/tours/1(2).jpg')}}" alt="" draggable="false">
		                                </a>
		                            </figure>
		                            <div class="details">
		                                <span class="price">$620</span>
		                                <h4 class="box-title">Hawaii City Tour</h4>
		                                <hr>
		                                <ul class="features check">
		                                    <li>City Tour In 3 Hours</li>
		                                    <li>Enjoy World Famous Restaurant</li>
		                                    <li>Wine Tester Trips</li>
		                                    <li>Night Street Life in Downtown </li>
		                                </ul>
		                                <hr>
		                                <div class="text-center">
		                                    <div class="time">
		                                        <i class="soap-icon-clock yellow-color"></i>
		                                        <span>01 Nov 2014 - 08 Nov 2014</span>
		                                    </div>
		                                </div>
		                                <a href="http://www.soaptheme.net/html/travelo/tour-index.html#" class="button btn-small full-width">BOOK NOW</a>
		                            </div>
		                        </article>
		                    </li>
		                    <li style="width: 270px; float: left; display: block;">
		                        <article class="box">
		                            <figure>
		                                <a href="http://www.soaptheme.net/html/travelo/tour-index.html#" class="hover-effect">
		                                    <img src="{{URL::asset('asset/images/tours/2(2).jpg')}}" alt="" draggable="false">
		                                </a>
		                            </figure>
		                            <div class="details">
		                                <span class="price">$534</span>
		                                <h4 class="box-title">Italy Family Tour</h4>
		                                <hr>
		                                <ul class="features check">
		                                    <li>City Tour In 3 Hours</li>
		                                    <li>Enjoy World Famous Restaurant</li>
		                                    <li>Wine Tester Trips</li>
		                                    <li>Night Street Life in Downtown </li>
		                                </ul>
		                                <hr>
		                                <div class="text-center">
		                                    <div class="time">
		                                        <i class="soap-icon-clock yellow-color"></i>
		                                        <span>01 Nov 2014 - 08 Nov 2014</span>
		                                    </div>
		                                </div>
		                                <a href="http://www.soaptheme.net/html/travelo/tour-index.html#" class="button btn-small full-width">BOOK NOW</a>
		                            </div>
		                        </article>
		                    </li>
		                    <li style="width: 270px; float: left; display: block;">
		                        <article class="box">
		                            <figure>
		                                <a href="http://www.soaptheme.net/html/travelo/tour-index.html#" class="hover-effect">
		                                    <img src="{{URL::asset('asset/images/tours/3(2).jpg')}}" alt="" draggable="false">
		                                </a>
		                            </figure>
		                            <div class="details">
		                                <span class="price">$718</span>
		                                <h4 class="box-title">Chicago Long Tour</h4>
		                                <hr>
		                                <ul class="features check">
		                                    <li>City Tour In 3 Hours</li>
		                                    <li>Enjoy World Famous Restaurant</li>
		                                    <li>Wine Tester Trips</li>
		                                    <li>Night Street Life in Downtown </li>
		                                </ul>
		                                <hr>
		                                <div class="text-center">
		                                    <div class="time">
		                                        <i class="soap-icon-clock yellow-color"></i>
		                                        <span>01 Nov 2014 - 08 Nov 2014</span>
		                                    </div>
		                                </div>
		                                <a href="http://www.soaptheme.net/html/travelo/tour-index.html#" class="button btn-small full-width">BOOK NOW</a>
		                            </div>
		                        </article>
		                    </li>
		                    <li style="width: 270px; float: left; display: block;">
		                        <article class="box">
		                            <figure>
		                                <a href="http://www.soaptheme.net/html/travelo/tour-index.html#" class="hover-effect">
		                                    <img src="{{URL::asset('asset/images/tours/4(2).jpg')}}" alt="" draggable="false">
		                                </a>
		                            </figure>
		                            <div class="details">
		                                <span class="price">$426</span>
		                                <h4 class="box-title">Sydney Tour</h4>
		                                <hr>
		                                <ul class="features check">
		                                    <li>City Tour In 3 Hours</li>
		                                    <li>Enjoy World Famous Restaurant</li>
		                                    <li>Wine Tester Trips</li>
		                                    <li>Night Street Life in Downtown </li>
		                                </ul>
		                                <hr>
		                                <div class="text-center">
		                                    <div class="time">
		                                        <i class="soap-icon-clock yellow-color"></i>
		                                        <span>01 Nov 2014 - 08 Nov 2014</span>
		                                    </div>
		                                </div>
		                                <a href="http://www.soaptheme.net/html/travelo/tour-index.html#" class="button btn-small full-width">BOOK NOW</a>
		                            </div>
		                        </article>
		                    </li>
		                    <li style="width: 270px; float: left; display: block;">
		                        <article class="box">
		                            <figure>
		                                <a href="http://www.soaptheme.net/html/travelo/tour-index.html#" class="hover-effect">
		                                    <img src="{{URL::asset('asset/images/tours/5(1).jpg')}}" alt="" draggable="false">
		                                </a>
		                            </figure>
		                            <div class="details">
		                                <span class="price">$620</span>
		                                <h4 class="box-title">Florida Tour</h4>
		                                <hr>
		                                <ul class="features check">
		                                    <li>City Tour In 3 Hours</li>
		                                    <li>Enjoy World Famous Restaurant</li>
		                                    <li>Wine Tester Trips</li>
		                                    <li>Night Street Life in Downtown </li>
		                                </ul>
		                                <hr>
		                                <div class="text-center">
		                                    <div class="time">
		                                        <i class="soap-icon-clock yellow-color"></i>
		                                        <span>01 Nov 2014 - 08 Nov 2014</span>
		                                    </div>
		                                </div>
		                                <a href="http://www.soaptheme.net/html/travelo/tour-index.html#" class="button btn-small full-width">BOOK NOW</a>
		                            </div>
		                        </article>
		                    </li>
		                </ul></div><ol class="flex-control-nav flex-control-paging"><li><a class="">1</a></li><li><a class="flex-active">2</a></li></ol><ul class="flex-direction-nav"><li><a class="flex-prev" href="http://www.soaptheme.net/html/travelo/tour-index.html#">Previous</a></li><li><a class="flex-next" href="http://www.soaptheme.net/html/travelo/tour-index.html#">Next</a></li></ul></div>
		        </div>
		    </div>
		    <div class="section global-map-area">
		        <div class="container">
		            <div class="row add-clearfix">
		                <div class="col-sm-6 col-md-3">
		                    <div class="icon-box style6 animated small-box" data-animation-type="slideInUp">
		                        <i class="soap-icon-friends"></i>
		                        <div class="description">
		                            <h4>Plan Your Tours</h4>
		                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
		                        </div>
		                    </div>
		                </div>
		                <div class="col-sm-6 col-md-3">
		                    <div class="icon-box style6 animated small-box" data-animation-type="slideInUp" data-animation-delay="0.3">
		                        <i class="soap-icon-insurance"></i>
		                        <div class="description">
		                            <h4>Low Rate Packages</h4>
		                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
		                        </div>
		                    </div>
		                </div>
		                <div class="col-sm-6 col-md-3">
		                    <div class="icon-box style6 animated small-box" data-animation-type="slideInUp" data-animation-delay="0.6">
		                        <i class="soap-icon-insurance"></i>
		                        <div class="description">
		                            <h4>Travel Insurance</h4>
		                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
		                        </div>
		                    </div>
		                </div>
		                <div class="col-sm-6 col-md-3">
		                    <div class="icon-box style6 animated small-box" data-animation-type="slideInUp" data-animation-delay="0.9">
		                        <i class="soap-icon-guideline"></i>
		                        <div class="description">
		                            <h4>Travel Guidelines</h4>
		                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
		                        </div>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </div>
	    </div>
    </div>
</section>
@stop