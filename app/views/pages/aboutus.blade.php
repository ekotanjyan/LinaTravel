@extends('layout.master')
@section('content')
        <section id="content">
            <div class="container">
                <div id="main">
                    <div class="large-block image-box style6">
                        @foreach($aboutus as $value)
                        <article class="box">
                            <figure class="col-md-5">
                                <a href="#" title="" class="middle-block"><img class="middle-item" src="{{URL::asset($value->imgurl)}}" width="476" height="318" /></a>
                            </figure>
                            <div class="details col-md-offset-5">
                                <h4 class="box-title">{{$value->name}}</h4>
                                <p>{{$value->description}}</p>
                            </div>
                        </article>
                            @endforeach
                    </div>

                    <div class="row large-block">
                        <div class="col-md-6">
                            <h2>Know More About Us</h2>
                            <div class="toggle-container box" id="accordion1">
                                <div class="panel style1">
                                    <h4 class="panel-title">
                                        <a href="#acc1" data-toggle="collapse" data-parent="#accordion1">Travel Insurance Single Person</a>
                                    </h4>
                                    <div class="panel-collapse collapse in" id="acc1">
                                        <div class="panel-content">
                                            <p>Nunc cursus libero purus ac congue ar lorem cursus ut sed pulvinar massa idend porta nequetiam elerisque mi id habitant morbi isnot possible nowadays tristique senectus et netus et malesuada fames. </p>
                                        </div><!-- end content -->
                                    </div>
                                </div>
                                
                                <div class="panel style1">
                                    <h4 class="panel-title">
                                        <a class="collapsed" href="#acc2" data-toggle="collapse" data-parent="#accordion1">Inflight Dinner/ Lunch Deal</a>
                                    </h4>
                                    <div class="panel-collapse collapse" id="acc2">
                                        <div class="panel-content">
                                            <p>Nunc cursus libero purus ac congue ar lorem cursus ut sed pulvinar massa iden porta nequetiam elerisque mi id habitant morbi tristique senectus.</p>
                                        </div><!-- end content -->
                                    </div>
                                </div>
                                
                                <div class="panel style1">
                                    <h4 class="panel-title">
                                        <a class="collapsed" href="#acc3" data-toggle="collapse" data-parent="#accordion1">Luxury Appartment for Family</a>
                                    </h4>
                                    <div class="panel-collapse collapse" id="acc3">
                                        <div class="panel-content">
                                            <p>Nunc cursus libero purus ac congue ar lorem cursus ut sed pulvinar massa iden porta nequetiam elerisque mi id habitant morbi tristique senectus.</p>
                                        </div><!-- end content -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h2>Our Core Values</h2>
                            <div class="tab-container">
                                <ul class="tabs">
                                    <li><a href="#satisfied-customers" data-toggle="tab">Satisfied customers</a></li>
                                    <li class="active"><a href="#tours-suggestions" data-toggle="tab">tours suggestions</a></li>
                                    <li><a href="#careers" data-toggle="tab">Careers</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade" id="satisfied-customers">
                                        <img src="http://placehold.it/140x140" alt="" class="pull-left" />
                                        <h4>Ocean Park Tour</h4>
                                        <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Vivamus elementum, ligula vehicula enenatis semper, magna lorem aliquet lacus, in euismod sem lectus. ligula vehicula enenatis semper, magna lorem aliquet lacus euismod sem velit ve.
<br /><br />
Ligula vehicula enenatis semper, magna lorem aliquet lacusin ante dapibus dictum. fugats vitaes nemo minima rerums unsers sadips amets.</p>
                                    </div>
                                    <div class="tab-pane fade in active" id="tours-suggestions">
                                        <img src="http://placehold.it/140x140" alt="" class="pull-left" />
                                        <h4>Ocean Park Tour</h4>
                                        <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Vivamus elementum, ligula vehicula enenatis semper, magna lorem aliquet lacus, in euismod sem lectus. ligula vehicula enenatis semper, magna lorem aliquet lacus euismod sem velit ve.
<br /><br />
Ligula vehicula enenatis semper, magna lorem aliquet lacusin ante dapibus dictum. fugats vitaes nemo minima rerums unsers sadips amets.</p>
                                    </div>
                                    <div class="tab-pane fade" id="careers">
                                        <h4>Careers</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="large-block">
                        <h2>Travelo Dedicated Team</h2>
                        <div class="row image-box style1 team">
                            @foreach($travelodedicatedteam as $value)
                            <div class="col-sm-6 col-md-3">
                                <article class="box">
                                    <figure>
                                        <a href="#"><img src="{{URL::asset($value->imgurl)}}" alt="" width="270" height="263" /></a>
                                    </figure>
                                    <div class="details">
                                        <h4 class="box-title"><a href="#">{{$value->name}}</a></h4>
                                        <p class="description">{{$value->description}}</p>
                                        <ul class="social-icons clearfix">
                                            <li class="twitter"><a title="twitter" target="_blank" href="{{URL::asset($value->twitter)}}" data-toggle="tooltip"><i class="soap-icon-twitter"></i></a></li>
                                            <li class="facebook"><a title="facebook" target="_blank" href="{{URL::asset($value->facebook)}}" data-toggle="tooltip"><i class="soap-icon-facebook"></i></a></li>
                                            <li class="linkedin"><a title="linkedin" target="_blank" href="{{URL::asset($value->linkedin)}}" data-toggle="tooltip"><i class="soap-icon-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </article>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="large-block text-center">
                        <h2>Check our Investors Relations</h2>
                        <p>Nunc cursus libero purus ac congue ar lorem cursus ut sed pulvinar massa idend porta nequetiam</p>
                        <div class="investor-list row">
                            @foreach($checkourinvestorsrelations as $value)
                            <div class="col-xs-6 col-sm-4 col-lg-2">
                                <div class="travelo-box">
                                    <a href="#"><img src="{{URL::asset($value->imgurl)}}" title="{{$value->name}}"></a>
                                </div>
                            </div>
                        @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
@stop