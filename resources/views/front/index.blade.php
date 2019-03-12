@extends('layouts.fmain')

@section('content')
    <!-- about -->
    <section class="about py-sm-5 py-4" id="about">
        <div class="container py-lg-5">
            <div class="row about-grids">
                <div class="col-lg-5">
                    <h6 class="mt-4">Best cabs available for you</h6>
                    <h4 class="mt-3">Trusted Cab Services In Your City</h4>
                    <p class="mt-sm-4 mt-3">Sed ut perspiciatis unde omnis iste natus error ipsum voluptatem ut accusa ntium dolo remque laudantium, totam rem aperiam, eaque ipsa quae ab illo quasi sed architecto beatae vitae dicta	sut dolor etr explicabo. Morbi a luctus magna, eu rutrum turpis.</p>
                    <p class="mt-sm-4 mt-3">Sed ut perspiciatis unde omnis iste natus error ipsum voluptatem ut accusantium dolo remque laudantium, totam rem aperiam, eaque ipsa quae ab illo.</p>
                </div>
                <div class="col-lg-4 col-md-6 mt-lg-0 mt-4">
                    <div class="padding">
                        @if(session('message'))
                            <div class="alert alert-info">
                                {{ session('message') }}
                            </div>
                        @endif
                        {!! Form::open(['route'=>'join.sucs']) !!}
                            <h5 class="mb-3">Book A Cab</h5>
                            <div class="form-style-agile">
                                <div class="form-group required {{ $errors->has('name') ? 'has-error' : '' }}">
                                    {!! Form::text('name', null, ['class' => 'form-control','placeholder'=>'Name']) !!}
                                    @if($errors->has('name'))
                                        <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                                    @endif
                                </div>
                                <div class="form-group required {{ $errors->has('phn') ? 'has-error' : '' }}">
                                    {!! Form::text('phn', null, ['class' => 'form-control','placeholder'=>'Phone Number']) !!}
                                    @if($errors->has('phn'))
                                        <span class="help-block">
                        <strong>{{ $errors->first('phn') }}</strong>
                    </span>
                                    @endif
                                </div>
                                <div class="form-group required {{ $errors->has('source') ? 'has-error' : '' }}">
                                    {!! Form::text('source', null, ['class' => 'form-control','placeholder'=>'Source(Form)']) !!}
                                    @if($errors->has('source'))
                                        <span class="help-block">
                        <strong>{{ $errors->first('source') }}</strong>
                    </span>
                                    @endif
                                </div>
                                <div class="form-group required {{ $errors->has('destination') ? 'has-error' : '' }}">
                                    {!! Form::text('destination', null, ['class' => 'form-control','placeholder'=>'Destination(To)']) !!}
                                    @if($errors->has('destination'))
                                        <span class="help-block">
                        <strong>{{ $errors->first('destination') }}</strong>
                    </span>
                                    @endif
                                </div>


                                <div class="form-group required {{ $errors->has('vehicle_id') ? 'has-error' : '' }}">

                                    {!! Form::select('vehicle_id', \App\Vehicle::pluck('name','id'),null, ['placeholder' => 'Choose Vehicle']) !!}
                                    @if($errors->has('vehicle_id'))
                                        <span class="help-block">
                        <strong>{{ $errors->first('vehicle_id') }}</strong>
                    </span>
                                    @endif
                                </div>
                                <!--<input placeholder="Password" name="password" type="password" required=""> -->
                                <button type="submit" class="book-btn btn">Book Now</button>
                            </div>
                            {!! Form::close() !!}
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-4">
                    <img src="{{asset('frontend/images/about.jpg')}}" alt="" class="img-fluid"/>
                </div>
            </div>
        </div>
    </section>
    <!-- //about -->

    <!-- //what we do -->
    <section class="services py-5" id="services">
        <div class="container py-lg-5 py-3">
            <div class="row service-grid-grids text-center">
                <div class="col-lg-4 col-md-6 service-grid service-grid1">
                    <div class="service-icon">
                        <span class="fa fa-car"></span>
                    </div>
                    <h4 class="mt-3">Fast and Safe</h4>
                    <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                </div>
                <div class="col-lg-4 col-md-6 service-grid service-grid2 mt-md-0 mt-5">
                    <div class="service-icon">
                        <span class="fa fa-user"></span>
                    </div>
                    <h4 class="mt-3">Experienced Drivers</h4>
                    <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                </div>

                <div class="col-lg-4 col-md-6 service-grid service-grid3 mt-lg-0 mt-5">
                    <div class="service-icon">
                        <span class="fa fa-paper-plane"></span>
                    </div>
                    <h4 class="mt-3">Online Booking</h4>
                    <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                </div>
                <div class="col-lg-4 col-md-6 service-grid service-grid4 mt-5">
                    <div class="service-icon">
                        <span class="fa fa-search"></span>
                    </div>
                    <h4 class="mt-3">GPS Searching</h4>
                    <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                </div>
                <div class="col-lg-4 col-md-6 service-grid service-grid4 mt-5">
                    <div class="service-icon">
                        <span class="fa fa-car"></span>
                    </div>
                    <h4 class="mt-3">Safe Journey</h4>
                    <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                </div>
                <div class="col-lg-4 col-md-6 service-grid service-grid6 mt-5">
                    <div class="service-icon">
                        <span class="fa fa-cogs"></span>
                    </div>
                    <h4 class="mt-3">24/7 Cab Service</h4>
                    <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                </div>

            </div>
        </div>
    </section>
    <!-- what we do -->

    <!-- tarrifs -->
    <section class="tarrifs py-5" id="tarrifs">
        <div class="container py-md-5">
            <div class="row tarrifs-grid">
                @foreach ($tarifs as $tarif)
                    <div class="col-lg-4 col-md-6 text-center">
                        <img src="{{asset('frontend/images/'.$tarif->image)}}" alt="" class="img-fluid"/>
                        <div class="tarrif-info">
                            <h4 class="my-3">{{$tarif->class}}</h4>
                            <p class="para_vl">{{$tarif->sub_text}}</p>
                            <h5 class="mt-sm-3 mt-2">{{$tarif->distance}}</h5>
                        </div>
                    </div>
                @endforeach



            </div>
        </div>
    </section>
    <!-- //tarrifs -->

    <!-- stats -->
    <section class="stats py-5" id="stats">
        <div class="container py-sm-3">
            <div class="row">
                <div class="col-sm-4 col-6 text-center">
                    <span class="fa mr-1 fa-users"></span>
                    <h4>10,000+</h4>
                    <p>Passengers</p>
                </div>
                <div class="col-sm-4 col-6 text-center">
                    <span class="fa mr-1 fa-car"></span>
                    <h4>1200</h4>
                    <p>Cab Drivers</p>
                </div>
                <div class="col-sm-4 col-6 mt-sm-0 mt-4 text-center">
                    <span class="fa mr-1 fa-map"></span>
                    <h4>500</h4>
                    <p>Cab Routes</p>
                </div>
            </div>
        </div>
    </section>
    <!-- //stats -->

    <!-- call us -->
    <section class="customer-call">
        <div class="container">
            <div class="row">
                <div class="col-md-8 py-sm-5 py-4 mt-3">
                    <h4 class="mt-2">24 Hours 7 Days a Week</h4>
                    <p>Call Us Now</p>
                    <h2><span class="fa mr-1 fa-phone"></span> +1(12) 366 411 4999</h2>
                    <p class="mt-4">Nam arcu mauris, tincidunt sed convallis non, egestas ut lacus. Cras sapien urna, varius malesuada ut varius consequat, hendrerit nisl. Aliquam vestibulum, odio non ullamcorper malesuada totam rem aperiam, eaque ipsa quae.</p>
                </div>
                <div class="col-lg-3 offset-lg-1 col-md-4 col-sm-6 col-8 pt-md-5 mt-lg-3">
                    <img src="{{asset('frontend/images/agent-18762.png')}}" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- //call us -->

    <!--/app-->
    <section class="mobile-app-sec py-5" id="app">
        <div class="container py-sm-3">
            <!--/mobile-app -->
            <div class="row inner-sec-wthree-agileits">
                <div class="col-lg-7 pt-lg-5 app-info text-left">
                    <h3 class="tittle mob pb-sm-4">Download the Mobile App for free <br>Get More Exciting Offers</h3>
                    <p class="para_vl">Nam arcu mauris, tincidunt sed convallis non, egestas ut lacus. Cras sapien urna, malesuada ut varius consequat, hendrerit nisl. Aliquam vestibulum, odio non ullamcorper malesuada totam rem aperiam, eaque ipsa quae.</p>
                    <div class="app-devices">
                        <a href="#" class="mr-3">
                            <img src="{{asset('frontend/images/app.png')}}" alt="">
                        </a>
                        <a href="#">
                            <img src="{{asset('frontend/images/app1.png')}}" alt="">
                        </a>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-2 col-md-4 col-sm-6 col-8 app-img text-right">
                    <img src="{{asset('frontend/images/mobile.png')}}" alt=" " class="img-fluid">
                </div>
                <!--//mobile-app -->
            </div>
        </div>
    </section>
    <!--//app-->

@stop