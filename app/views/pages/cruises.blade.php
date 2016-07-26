@extends('layout.master')
@section('content')
@include('layout.slidebar')
	<section id="content">            
	            <div class="section">
	                <div class="container">
	                    <div id="main">
	                        <h2>Last Minute Cruise Deals</h2>
	                        <div class="row image-box style3 cruise listing-style1">
@foreach($lastminutecruisedeals as $value)
									<div class="col-sm-6 col-md-3">
										<article class="box">
											<figure class="animated" data-animation-type="fadeInDown" data-animation-delay="0">
												<a href="info/Cruises/{{$value->id}}" style="height: 270px;" class="hover-effect popup-gallery"><img src="{{URL::to($value->imgurl)}}"></a>
											</figure>
											<div class="details">
												<span class="price"><small>from</small>{{$value->price}}֏</span>
												<h4 class="box-title">{{$value->name}}<small>{{$value->days}} nights</small></h4>
												{{--<div class="feedback">--}}
													{{--<div data-placement="bottom" data-toggle="tooltip" class="five-stars-container" title="3 stars"><span style="width: 60%;" class="five-stars"></span></div>--}}
													{{--<span class="review">27 reviews</span>--}}
												{{--</div>--}}
												<div class="row time">
													<div class="date col-xs-6">
														<i class="soap-icon-clock yellow-color"></i>
														<div>
															<span class="skin-color">Date</span><br />{{date("d M Y",strtotime($value->start_date))}}
															{{--{{date("d M Y",strtotime($value->start_date. " + $value->days days"))}}--}}
														</div>
													</div>
													{{--<div class="departure col-xs-6">--}}
														{{--<i class="soap-icon-departure yellow-color"></i>--}}
														{{--<div>--}}
															{{--<span class="skin-color">Departure</span><br />{{$value->place}}--}}
														{{--</div>--}}
													{{--</div>--}}
												{{--</div>--}}
												<p class="description fourty-space">Save up to <span class="skin-color">20%</span> in grand suite</p>
												<div class="action">
													<a class="button btn-small full-width" href="cruise-detailed.html">SELECT NOW</a>
												</div>
											</div>
										</article>
									</div>
	@endforeach

	                        </div>
	                    </div>

	                    <div class="row">
	                        <div class="col-md-6">
	                            <h2>Top Cruise Destinations</h2>
	                            <div class="top-cruise-destinations image-box box">
	                                <figure class="animated" data-animation-type="fadeInDown">
	                                    <img src="http://placehold.it/578x173" alt="">
	                                </figure>
	                                <div class="details">
	                                    <div class="row">
	                                        <div class="col-xs-4">
	                                            <h5 class="box-title">Top Destinations</h5>
	                                            <ul class="triangle hover">
	                                                <li>Alaska</li>
	                                                <li>Bermuda</li>
	                                                <li>Caribbean</li>
	                                                <li>Mexico</li>
	                                            </ul>
	                                        </div>
	                                        <div class="col-xs-4">
	                                            <h5 class="box-title">Top Interests</h5>
	                                            <ul class="triangle hover">
	                                                <li>Last Minute Cruises</li>
	                                                <li>Sail from Nearby Ports</li>
	                                                <li>Holiday Cruises</li>
	                                                <li>Weekend Cruises</li>
	                                            </ul>
	                                        </div>
	                                        <div class="col-xs-4">
	                                            <h5 class="box-title">Top Luxury</h5>
	                                            <ul class="triangle hover">
	                                                <li>Azamara Cruises</li>
	                                                <li>Crystal Cruises</li>
	                                                <li>Oceania Cruises</li>
	                                                <li>Regent Cruises</li>
	                                            </ul>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="col-md-6">
	                            <h2>Top Cruise Line Deals</h2>
	                            <div class="travelo-box image-box style1">
	                                <div class="overflow-hidden">
	                                    <div class="row">
											@foreach($topcruiselinedeals as $value)
	                                        <div class="col-xs-4">
	                                            <div class="box">
													<figure class="animated" data-animation-type="fadeInDown" data-animation-delay="0">
														<a href="info/Cruises/{{$value->id}}" style="height: 189px;" class="hover-effect yellow popup-gallery"><img style="width: auto;height: 100%;" src="{{URL::to($value->imgurl)}}"></a>
													</figure>
	                                                <div class="details">
	                                                    <span class="price"><small>{{$value->days}} nights</small>{{$value->price}}֏</span>
	                                                    <h5 class="box-title"><a href="#">{{$value->name}}</a><small>Up to $400 OFF!</small></h5>
	                                                </div>
	                                            </div>
	                                        </div>
											@endforeach
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                    <h2>Hot Cruises Deals</h2>
	                    <div class="image-carousel style2" data-animation="slide" data-item-width="270" data-item-margin="30">
	                        <ul class="slides image-box style3">
								@foreach($hotcruisesdeals as $value)
	                            <li class="box">
	                                <figure>
	                                    <a class="hover-effect popup-gallery" href="info/Cruises/{{$value->id}}" title="">{{ HTML::image($value->imgurl) }}</a>
	                                </figure>
	                                <div class="details text-center">
	                                    <h4 class="box-title">{{$value->name}}</h4>
	                                    <p class="offers-content">(15 deal offers)</p>
	                                    <div title="4 stars" class="five-stars-container" data-toggle="tooltip" data-placement="bottom">
	                                        <span class="five-stars" style="width: 80%;"></span>
	                                    </div>
	                                    <a href="cruise-detailed.html" class="button">SEE ALL</a>
	                                </div>
	                            </li>
								@endforeach
	                        </ul>
	                    </div>

	                </div>
	            </div>
	            
	            <div class="global-map-area promo-box no-margin parallax" data-stellar-background-ratio="0.5">
	                <div class="container">
	                    <div class="content-section description pull-right col-sm-9">
	                        <div class="table-wrapper hidden-table-sm">
	                            <div class="table-cell">
	                                <h2 class="m-title">
	                                    Tell us where you would like to go.<br /><em>3,000+ Amazing Places to Visit!</em>
	                                </h2>
	                            </div>
	                            <div class="table-cell action-section col-md-4 no-float">
	                                <form method="post" action="cruise-list-view.html">
	                                    <div class="row">
	                                        <div class="col-xs-6 col-md-12">
	                                            <input type="text" class="input-text input-large full-width" value="" placeholder="Enter destination or hotel name" />
	                                        </div>
	                                        <div class="col-xs-6 col-md-12">
	                                            <button class="full-width btn-large">search cruises</button>
	                                        </div>
	                                    </div>
	                                </form>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="image-container col-sm-4">
	                        <img src="http://placehold.it/235x235" alt="" class="animated" data-animation-type="fadeInUp" />
	                    </div>
	                </div>
	            </div>
	        </section>
@stop