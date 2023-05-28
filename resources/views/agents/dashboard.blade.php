@extends('layouts.agent')
@section('title' , 'Dashboard')
@section('user_name')
    @auth
        {{ Auth::user()->name }}
    @endauth
@endsection

@section('content')
<section class="gray-simple pt-5 pb-5">
    <div class="container-fluid">
                    
        <div class="row">
            
            <div class="col-xl-3 col-lg-3 col-md-12">
                <div class="property_dashboard_navbar">
                    
                    <div class="dash_user_avater">
                        <img src="assets/img/team-3.jpg" class="img-fluid avater" alt="">
                        <h4>{{ Auth::user()->name }}</h4>
                        {{-- <span class="font--medium small"><i class="fa-solid fa-location-dot me-2"></i>Liverpool, USA</span> --}}
                    </div>

                    <div class="adgt-wriop-footer py-3 px-3">
                        <div class="single-button d-flex align-items-center justify-content-between">
                            <button type="button" class="btn btn-md font--bold btn-light-primary me-2 full-width"><i class="fa-solid fa-phone me-2"></i>856 742 672</button>
                            <button type="button" data-bs-toggle="modal" data-bs-target="#message" class="btn btn-md font--bold btn-light-success full-width"><i class="fa-solid fa-paper-plane me-2"></i>Send Message</button>
                        </div>
                    </div>
                    
                    <div class="dash_user_menues">
                        <ul>
                            <li class="active"><a href="dashboard.html"><i class="fa fa-tachometer-alt"></i>Dashboard<span class="notti_coun style-1">4</span></a></li>
                            {{-- <li><a href="my-profile.html"><i class="fa fa-user-tie"></i>My Profile</a></li> --}}
                            @if (Auth::user()->role == 'admin')
                                <li><a href="{{ route('newAgent') }}"><i class="fa fa-user-plus"></i>New Agent</a></li>
                                <li><a href="{{ route('manageAgent') }}"><i class="fa fa-users"></i>Manage Agents</a></li>
                            @endif
                            <li><a href="#"><i class="fa fa-tasks"></i>My Properties</a></li>
                            <li><a href="{{ route('newProperty') }}"><i class="fa fa-pen-nib"></i>Submit New Property</a></li>
                            <li><a href="{{ route('resetPassword') }}"><i class="fa fa-unlock-alt"></i>Change Password</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="col-xl-9 col-lg-9 col-md-12">
                <div class="dashboard-body">
                    
                    <div class="row">
            
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="veshm-dash-wrapper widget-1">
                                <div class="veshm-dash-icon">
                                    <div class="vsm-icon-lio bg-light-success text-success"><i class="fa-solid fa-sack-dollar"></i></div>
                                </div>
                                <div class="veshm-dash-block">
                                    <div class="veshm-dash-block_content"><h4>$872M<span class="label font--medium label-purple me-2"><i class="fa-solid fa-arrow-trend-down"></i>07%</span></h4><h6>Total Income</h6></div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="veshm-dash-wrapper widget-2">
                                <div class="veshm-dash-icon">
                                    <div class="vsm-icon-lio bg-light-danger text-danger"><i class="fa-brands fa-gg-circle"></i></div>
                                </div>
                                <div class="veshm-dash-block">
                                    <div class="veshm-dash-block_content"><h4>2415</h4><h6>Total Property</h6></div>
                                </div>
                            </div>	
                        </div>
                        
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="veshm-dash-wrapper widget-3">
                                <div class="veshm-dash-icon">
                                    <div class="vsm-icon-lio bg-light-warning text-warning"><i class="fa-solid fa-chart-line"></i></div>
                                </div>
                                <div class="veshm-dash-block">
                                    <div class="veshm-dash-block_content"><h4>$.68M<span class="label font--medium label-success me-2"><i class="fa-solid fa-arrow-trend-up"></i>12%</span></h4><h6>Total Revenue</h6></div>
                                </div>
                            </div>	
                        </div>

                    </div>
                    <!--  row -->
                    @if (Auth::user()->role == 'admin')
                        <div class="row">
                            <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="mb-0">Extra Area Chart</h4>
                                    </div>
                                    <div class="card-body">
                                        <ul class="list-inline text-center m-t-40">
                                            <li>
                                                <h5><i class="fa fa-circle me-1 text-warning"></i>Total Revenue</h5>
                                            </li>
                                            <li>
                                                <h5><i class="fa fa-circle me-1 text-danger"></i>Total Property</h5>
                                            </li>
                                            <li>
                                                <h5><i class="fa fa-circle me-1 text-success"></i>Total income</h5>
                                            </li>
                                        </ul>
                                        <div class="chart" id="line-chart" style="height:300px;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h6>Notifications</h6>
                                    </div>
                                    <div class="ground-list ground-list-hove">
                                        {{-- if there is no notifiation put a text instead --}}
                                        <div class="ground ground-single-list">
                                            <div class="ground-content">
                                                <h6>There is <strong>No notification</strong></h6>
                                                <span class="small">Just Now</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @elseif (Auth::user()->role =='agent')
                    
                    <!-- row -->
                    
                    <div class="row">
                        <div class="col-xl-8 col-lg-12 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="mb-0">Sold Property</h4>
                                </div>
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table table-lg">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Status</th>
                                                    <th>Price</th>
                                                    <th>Date Created</th>
                                                </tr>
                                            </thead>
                                            
                                            <tbody>
                                                {{-- put here a text if there is no data to put on the table --}}
                                                <tr>
                                                    <td colspan="4" class="text-center">No Property Available</td>
                                                </tr>
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h6>Notifications</h6>
                                </div>
                                <div class="ground-list ground-list-hove">
                                    {{-- if there is no notifiation put a text instead --}}
                                    <div class="ground ground-single-list">
                                        <div class="ground-content">
                                            <h6>There is <strong>No notification</strong></h6>
                                            <span class="small">Just Now</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    @endif
                    <!-- row -->
                    
                </div>
            </div>
            
        </div>
    </div>
</section>
@endsection