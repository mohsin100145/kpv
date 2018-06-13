@extends('layouts.app')

@section('content')
<div class="container">
<style type="text/css">
    
  </style>
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-primary">
                <div class="panel-heading">Dashboard</div>

                <!-- <div class="panel-body" style="background-color: #ecf0f5"> -->
                <!-- <div class="panel-body" style="background-color: rebeccapurple"> -->
                <!-- <div class="panel-body" style="background-color: #c3bdca"> -->
                <div class="panel-body" style="background: url(assets/images/cox-bazar-dec-o7.jpg) no-repeat center center fixed; 
                    -webkit-background-size: cover;
                    -moz-background-size: cover;
                    -o-background-size: cover;
                    background-size: cover;">
                    <div class="container1">
                        <div id="carousel">
                            <figure><img src="{{ asset('assets/images/rotate_img1.jpg') }}" alt=""></figure>
                            <figure><img src="{{ asset('assets/images/rotate_img02.jpg') }}" alt=""></figure>
                            <figure><img src="{{ asset('assets/images/rotate_img03.jpg') }}" alt=""></figure>
                            <figure><img src="{{ asset('assets/images/rotate_img04.jpg') }}" alt=""></figure>
                            <figure><img src="{{ asset('assets/images/rotate_img05.jpg') }}" alt=""></figure>
                            <figure><img src="{{ asset('assets/images/rotate_img06.jpg') }}" alt=""></figure>
                            <figure><img src="{{ asset('assets/images/rotate_img07.jpg') }}" alt=""></figure>
                            <figure><img src="{{ asset('assets/images/rotate_img08.jpg') }}" alt=""></figure>
                            <figure><img src="{{ asset('assets/images/rotate_img09.jpg') }}" alt=""></figure>
                        </div>
                    </div>


                    <div class="row">
                      <div class="col-md-4">
                          <!-- begin panel group -->
                          <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                              
                              <!-- panel 1 -->
                              <div class="panel panel-default">
                                  <!--wrap panel heading in span to trigger image change as well as collapse -->
                                  <span class="side-tab" data-target="#tab1" data-toggle="tab" role="tab" aria-expanded="false">
                                      <div class="panel-heading panel-heading1" role="tab" id="headingOne"data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                          <h4 class="panel-title panel-title1"><b>Introduction of the RESORT</b></h4>
                                      </div>
                                  </span>
                                  
                                  <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                      <div class="panel-body panel-body1">
                                      <!-- Tab content goes here -->
                                      <!-- Some contents about school. -->
                                      <p>Grand Beach Reasort is a Sister of Concern Worldview International Ltd. Grand Beach Resort was newly management on 1st September 2017 under <span style="color: red">Worldview International Ltd. Narayanganj.</span> Grand Beach Resort desires and virtually aims at playing a major role in international tourism domain to promote ecomomic to perform as manpower at large to help materilize Degital Bangladesh tourism sector.</p>
                                      </div>
                                  </div>
                              </div> 
                              <!-- / panel 1 -->
                              
                              <!-- panel 2 -->
                              <div class="panel panel-default">
                                  <!--wrap panel heading in span to trigger image change as well as collapse -->
                                  <span class="side-tab" data-target="#tab2" data-toggle="tab" role="tab" aria-expanded="false">
                                      <div class="panel-heading panel-heading1" role="tab" id="headingTwo" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                          <h4 class="panel-title panel-title1 collapsed"><b>Room of Grand Beach Reasort</b></h4>
                                      </div>
                                  </span>

                                  <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                      <div class="panel-body panel-body1">
                                      <!-- Tab content goes here -->
                                      Some contents about room.
                                      </div>
                                  </div>
                              </div>
                              <!-- / panel 2 -->
                              
                              <!--  panel 3 -->
                              <div class="panel panel-default">
                                  <!--wrap panel heading in span to trigger image change as well as collapse -->
                                  <span class="side-tab" data-target="#tab3" data-toggle="tab" role="tab" aria-expanded="false">
                                      <div class="panel-heading panel-heading1" role="tab" id="headingThree"  class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                          <h4 class="panel-title panel-title1"><b>Grand Beach Reasort</b></h4>
                                      </div>
                                  </span>

                                      <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                        <div class="panel-body panel-body1">
                                        <!-- tab content goes here -->
                                         Some contents about something.
                                        </div>
                                      </div>
                                    </div>
                          </div> <!-- / panel-group -->
                           
                      </div> <!-- /col-md-4 -->
                      
                      <div class="col-md-8">
                          <!-- begin macbook pro mockup -->
                          <div class="md-macbook-pro md-glare">
                              <div class="md-lid">
                                  <div class="md-camera"></div>
                                  <div class="md-screen">
                                  <!-- content goes here -->                
                                      <div class="tab-featured-image">
                                          <div class="tab-content">
                                              <div class="tab-pane  in active" id="tab1">
                                                      <img src="{{ asset('assets/images/Grand-Beach-Hotel0.jpg') }}" alt="tab1" class="img img-responsive">
                                              </div>
                                              <div class="tab-pane " id="tab2">
                                                  
                                                      <img src="{{ asset('assets/images/Couple-Bed-1.jpg') }}">
                                                  
                                              </div>
                                              <div class="tab-pane fade" id="tab3">
                                                  
                                                      <img src="{{ asset('assets/images/Twin-Bed-1.jpg') }}" alt="tab1" class="img img-responsive">
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="md-base"></div>
                          </div> <!-- end macbook pro mockup -->



                      </div> <!-- / .col-md-8 -->
                  </div> <!--/ .row -->

                  <!-- =========================================================== -->
                    
                      <div class="row">
                        <div class="col-md-3 col-sm-6 col-xs-12">
                          <div class="circle-tile ">
                            <div class="circle-tile-heading green"><i class="fa fa-bar-chart fa-fw fa-3x"></i></div>
                            <div class="circle-tile-content green">
                                <div class="circle-tile-description text-faded"> <h3 style="margin-top: 0; margin-bottom: 0;"> Room Category </h3> </div>
                                <div class="circle-tile-number text-faded" id="new_total">{{ $roomCategoryCount }}</div>
                                
                            </div>
                          </div>
                        </div>
                     
                        <div class="col-md-3 col-sm-6 col-xs-12">
                          <div class="circle-tile ">
                            <div class="circle-tile-heading green"><i class="fa fa-outdent fa-fw fa-3x"></i></div>
                            <div class="circle-tile-content green">
                                  <div class="circle-tile-description text-faded"> <h3 style="margin-top: 0px; margin-bottom: 0px;"> Room </h3> </div>
                                  <div class="circle-tile-number text-faded" id="pending_total">{{ $roomCount }}</div>
                                  
                              </div>
                            </div>
                        </div> 

                        <div class="col-md-3 col-sm-6 col-xs-12">
                          <div class="circle-tile ">
                            <div class="circle-tile-heading green"><i class="fa fa-calendar fa-fw fa-3x"></i></div>
                                <div class="circle-tile-content green">
                                  <div class="circle-tile-description text-faded"> <h3 style="margin-top: 0; margin-bottom: 0;"> Customer </h3></div>
                                  <div class="circle-tile-number text-faded" id="answered_total">{{ $customerCount }}</div>
                                  
                              </div>
                          </div>
                        </div>

                        <div class="col-md-3 col-sm-6 col-xs-12">
                          <div class="circle-tile ">
                            <div class="circle-tile-heading green"><i class="fa fa-files-o fa-fw fa-3x"></i></div>
                            <div class="circle-tile-content green">
                                <div class="circle-tile-description text-faded"> <h3 style="margin-top: 0; margin-bottom: 0;"> Room Reservation </h3> </div>
                                <div class="circle-tile-number text-faded" id="new_total">{{ $roomReservationCount }}</div>
                                
                            </div>
                          </div>
                        </div>
                                <!-- /.col -->
                      </div> 
                                 <!-- /.row -->

                      <!-- =========================================================== -->
                    

                      <div class="row">
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="info-box">
                                <span class="info-box-icon bg-aqua"><i class="fa fa-user"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text" style="font-size: 18px;">Payable by Customer</span>
                                    <span class="info-box-number" style="font-size: 33px;">{{ $payableByCustomerCount }}</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="info-box">
                                <span class="info-box-icon bg-aqua"><i class="fa fa-user-circle"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text" style="font-size: 18px;">Room</span>
                                    <span class="info-box-number" style="font-size: 33px;">22</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="info-box">
                                <span class="info-box-icon bg-aqua"><i class="fa fa-user-o"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text" style="font-size: 18px;">Room</span>
                                    <span class="info-box-number" style="font-size: 33px;">33</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                          <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="info-box">
                                <span class="info-box-icon bg-aqua"><i class="fa fa-user-circle-o"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text" style="font-size: 18px;">Room</span>
                                    <span class="info-box-number" style="font-size: 33px;">44</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->

                    <!-- =========================================================== -->

                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-xs-12">
                          <div class="info-box bg-green">
                            <span class="info-box-icon"><i class="fa fa-user-plus"></i></span>

                            <div class="info-box-content">
                              <span class="info-box-text" style="font-size: 18px;">Room</span>
                              <span class="info-box-number" style="font-size: 33px;">55</span>
                            </div>
                            <!-- /.info-box-content -->
                          </div>
                          <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-3 col-sm-6 col-xs-12">
                          <div class="info-box bg-green">
                            <span class="info-box-icon"><i class="fa fa-user-secret"></i></span>

                            <div class="info-box-content">
                              <span class="info-box-text" style="font-size: 16px;">Room</span>
                              <span class="info-box-number" style="font-size: 33px;">66</span>
                            </div>
                            <!-- /.info-box-content -->
                          </div>
                          <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-3 col-sm-6 col-xs-12">
                          <div class="info-box bg-green">
                            <span class="info-box-icon"><i class="fa fa-area-chart"></i></span>

                            <div class="info-box-content">
                              <span class="info-box-text" style="font-size: 18px;">Room</span>
                              <span class="info-box-number" style="font-size: 33px;">77</span>
                            </div>
                            <!-- /.info-box-content -->
                          </div>
                          <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-3 col-sm-6 col-xs-12">
                          <div class="info-box bg-green">
                            <span class="info-box-icon"><i class="fa fa-bar-chart"></i></span>

                            <div class="info-box-content">
                              <span class="info-box-text" style="font-size: 18px;">Room</span>
                              <span class="info-box-number" style="font-size: 33px;">88</span>
                            </div>
                            <!-- /.info-box-content -->
                          </div>
                          <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->

                      <!-- =========================================================== -->

                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-xs-12">
                          <div class="info-box">
                            <span class="info-box-icon bg-yellow"><i class="fa fa-bar-chart"></i></span>

                            <div class="info-box-content">
                              <span class="info-box-text" style="font-size: 18px;">Room</span>
                              <span class="info-box-number" style="font-size: 33px;">99</span>
                            </div>
                            <!-- /.info-box-content -->
                          </div>
                          <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-3 col-sm-6 col-xs-12">
                          <div class="info-box">
                            <span class="info-box-icon bg-yellow"><i class="fa fa-file-text"></i></span>

                            <div class="info-box-content">
                              <span class="info-box-text" style="font-size: 18px;">Room</span>
                              <span class="info-box-number" style="font-size: 33px;">00</span>
                            </div>
                            <!-- /.info-box-content -->
                          </div>
                          <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-3 col-sm-6 col-xs-12">
                          <div class="info-box">
                            <span class="info-box-icon bg-yellow"><i class="fa fa-files-o"></i></span>

                            <div class="info-box-content">
                              <span class="info-box-text" style="font-size: 18px;">Room</span>
                              <span class="info-box-number" style="font-size: 33px;">11</span>
                            </div>
                            <!-- /.info-box-content -->
                          </div>
                          <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-3 col-sm-6 col-xs-12">
                          <div class="info-box">
                            <span class="info-box-icon bg-yellow"><i class="fa fa-clipboard"></i></span>

                            <div class="info-box-content">
                              <span class="info-box-text" style="font-size: 18px;">Room</span>
                              <span class="info-box-number" style="font-size: 33px;">22</span>
                            </div>
                            <!-- /.info-box-content -->
                          </div>
                          <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->

                      <!-- =========================================================== -->

                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-xs-12">
                          <div class="info-box bg-red">
                            <span class="info-box-icon"><i class="fa fa-share"></i></span>

                            <div class="info-box-content">
                              <span class="info-box-text" style="font-size: 18px;">Room</span>
                              <span class="info-box-number" style="font-size: 33px;">33</span>
                            </div>
                            <!-- /.info-box-content -->
                          </div>
                          <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-3 col-sm-6 col-xs-12">
                          <div class="info-box bg-red">
                            <span class="info-box-icon"><i class="fa fa-clock-o"></i></span>

                            <div class="info-box-content">
                              <span class="info-box-text" style="font-size: 18px;">Room</span>
                              <span class="info-box-number" style="font-size: 33px;">44</span>
                            </div>
                            <!-- /.info-box-content -->
                          </div>
                          <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-3 col-sm-6 col-xs-12">
                          <div class="info-box bg-red">
                            <span class="info-box-icon"><i class="fa fa-reply"></i></span>

                            <div class="info-box-content">
                              <span class="info-box-text" style="font-size: 18px;">Room</span>
                              <span class="info-box-number" style="font-size: 33px;">55</span>
                            </div>
                            <!-- /.info-box-content -->
                          </div>
                          <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-3 col-sm-6 col-xs-12">
                          <div class="info-box bg-red">
                            <span class="info-box-icon"><i class="fa fa-share"></i></span>

                            <div class="info-box-content">
                              <span class="info-box-text" style="font-size: 18px;">Room</span>
                              <span class="info-box-number" style="font-size: 33px;">66</span>
                            </div>
                            <!-- /.info-box-content -->
                          </div>
                          <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->

                      <!-- =========================================================== -->

                      <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-xs-12">
                          <!-- small box -->
                          <div class="small-box bg-aqua" style="background-color: gray !important;">
                            <div class="inner">
                              <h3>11</h3>

                              <p><b>Room Room Room</b></p>
                            </div>
                            <div class="icon">
                              <i class="fa fa-pencil"></i>
                            </div>
                            
                          </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-md-3 col-sm-6 col-xs-12">
                          <!-- small box -->
                          <div class="small-box bg-aqua" style="background-color: gray !important;">
                            <div class="inner">
                              <!-- <h3>00<sup style="font-size: 20px">%</sup></h3> -->
                              <h3>$22</h3>

                              <p><b>Room Room Room</b></p>
                            </div>
                            <div class="icon">
                              <i class="fa fa-area-chart"></i>
                            </div>
                            
                          </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-md-3 col-sm-6 col-xs-12">
                          <!-- small box -->
                          <div class="small-box bg-aqua" style="background-color: gray !important;">
                            <div class="inner">
                              <h3>33</h3>

                              <p><b>Room Room Room</b></p>
                            </div>
                            <div class="icon">
                              <i class="fa fa-edit"></i>
                            </div>
                            
                          </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-md-3 col-sm-6 col-xs-12">
                          <!-- small box -->
                          <div class="small-box bg-aqua" style="background-color: gray !important;">
                            <div class="inner">
                              <h3>44</h3>

                              <p><b>Room Room Room</b></p>
                            </div>
                            <div class="icon">
                              <i class="fa fa-bar-chart"></i>
                            </div>
                            
                          </div>
                        </div>
                        <!-- ./col -->
                      </div>
                      <!-- /.row -->

                      <!-- =========================================================== -->
                    
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-xs-12">
                          <!-- small box -->
                          <div class="small-box bg-aqua">
                            <div class="inner">
                              <h3>77</h3>

                              <p><b>Room Room Room</b></p>
                            </div>
                            <div class="icon">
                              <i class="fa fa-hand-o-right"></i>
                            </div>
                            
                          </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-md-3 col-sm-6 col-xs-12">
                          <!-- small box -->
                          <div class="small-box bg-aqua">
                            <div class="inner">
                              <!-- <h3>00<sup style="font-size: 20px">%</sup></h3> -->
                              <h3>88</h3>

                              <p><b>Room Room Room</b></p>
                            </div>
                            <div class="icon">
                              <i class="fa fa-address-card"></i>
                            </div>
                            
                          </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-md-3 col-sm-6 col-xs-12">
                          <!-- small box -->
                          <div class="small-box bg-aqua">
                            <div class="inner">
                              <h3>99</h3>

                              <p><b>Room Room Room</b></p>
                            </div>
                            <div class="icon">
                              <i class="fa fa-address-card-o"></i>
                            </div>
                            
                          </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-md-3 col-sm-6 col-xs-12">
                          <!-- small box -->
                          <div class="small-box bg-aqua">
                            <div class="inner">
                              <h3>00</h3>

                              <p><b>Room Room Room</b></p>
                            </div>
                            <div class="icon">
                              <i class="fa fa-users"></i>
                            </div>
                            
                          </div>
                        </div>
                        <!-- ./col -->
                      </div>
                      <!-- /.row -->

                      <!-- =========================================================== -->

                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-xs-12">
                          <!-- small box -->
                          <div class="small-box bg-aqua" style="background-color: #008080 !important;">
                            <div class="inner">
                              <h3>55</h3>

                              <p><b>Room Room Room</b></p>
                            </div>
                            <div class="icon">
                              <i class="fa fa-file-text"></i>
                            </div>
                            
                          </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-md-3 col-sm-6 col-xs-12">
                          <!-- small box -->
                          <div class="small-box bg-aqua" style="background-color: #008080 !important;">
                            <div class="inner">
                              <!-- <h3>00<sup style="font-size: 20px">%</sup></h3> -->
                              <h3>66</h3>

                              <p><b>Room Room Room</b></p>
                            </div>
                            <div class="icon">
                              <i class="fa fa-files-o"></i>
                            </div>
                            
                          </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-md-3 col-sm-6 col-xs-12">
                          <!-- small box -->
                          <div class="small-box bg-aqua" style="background-color: #008080 !important;">
                            <div class="inner">
                              <h3>{{ date('Y') }}</h3>

                              <p>All information are shown for <b>{{ date('Y') }}</b></p>
                            </div>
                            <div class="icon">
                              <i class="fa fa-clipboard"></i>
                            </div>
                            
                          </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-md-3 col-sm-6 col-xs-12">
                          <!-- small box -->
                          <div class="small-box bg-aqua" style="background-color: #008080 !important;">
                            <div class="inner">
                              <h3>{{ date('d/m/Y') }}</h3>

                              <p><b>Date of Today</b></p>
                            </div>
                            <div class="icon">
                              <i class="fa fa-calendar"></i>
                            </div>
                            
                          </div>
                        </div>
                        <!-- ./col -->
                      </div>
                      <!-- /.row -->

                      <!-- =========================================================== -->

                </div>
            </div>
        </div>
    </div>
</div>
<!-- <div class="">
    <iframe src="{{ asset('/') }}" height="382" width="100%"></iframe>
</div> -->
@endsection

@section('style')
<link href="{{ asset('assets/css/rotate_img.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/AdminLTE.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/style_dash.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/mac_slider.css') }}" rel="stylesheet">
@endsection
