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
                            <li><a href="{{ route('dashboard') }}"><i class="fa fa-tachometer-alt"></i>Dashboard<span class="notti_coun style-1">4</span></a></li>
                            {{-- <li><a href="my-profile.html"><i class="fa fa-user-tie"></i>My Profile</a></li> --}}
                            @if (Auth::user()->role == 'admin')
                                <li class="active"><a href="{{ route('newAgent') }}"><i class="fa fa-user-plus"></i>New Agent</a></li>
                                <li><a href="{{ route('manageAgent') }}"><i class="fa fa-users"></i>Manage Agents</a></li>
                            @endif
                            <li><a href="#"><i class="fa fa-tasks"></i>My Properties</a></li>
                            <li><a href="{{ route('newProperty') }}"><i class="fa fa-pen-nib"></i>Submit New Property</a></li>
                            <li><a href="change-password.html"><i class="fa fa-unlock-alt"></i>Change Password</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="col-xl-9 col-lg-9 col-md-12">
                <div class="dashboard-body">
                
                    <div class="dashboard-wraper">
                    
                        <!-- Basic Information -->
                        <div class="frm_submit_block">	
                            <h4>New Agent</h4>
                            <p>Fill the form below to create a new agent</p>
                            @if(session('message'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('message') }}
                                </div>
                            @elseif (session('error'))
                                <div class="alert alert-danger" role="alert">
                                    {{ session('error') }}
                                </div>
                            @endif
                            <form method="post" action="{{ route('addAgent') }}">
                                @csrf
                                    <div class="frm_submit_wrap">
                                        <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label>Name</label>
                                                    <input type="text" class="form-control" name="name" placeholder="Amine root">
                                                </div>
                                                
                                                <div class="form-group col-md-6">
                                                    <label>Email</label>
                                                    <input type="email" class="form-control" name="email" placeholder="roote_1@gmail.com">
                                                </div>
                                                
                                                <div class="form-group col-md-6">
                                                    <label>Role</label>
                                                    <input type="text" class="form-control" name="user_type" placeholder="Admin">
                                                </div>
                                                
                                                <div class="form-group col-md-6">
                                                    <label>Phone</label>
                                                    <input type="text" class="form-control" name="phone" placeholder="+1 12345 98">
                                                </div>
                                                
                                                <div class="form-group col-md-6">
                                                    <label>Address</label>
                                                    <input type="text" class="form-control" name="address" placeholder="Doha al khair, 106">
                                                </div>
                                                
                                                <div class="form-group col-md-6">
                                                    <label>City</label>
                                                    <input type="text" class="form-control" name="city" placeholder="Rabat">
                                                </div>
                                                
                                                <div class="form-group col-md-6">
                                                    <label>State</label>
                                                    <input type="text" class="form-control" name="state" placeholder="Morocco">
                                                </div>
                                                
                                                <div class="form-group col-md-6">
                                                    <label>Password</label>
                                                    <input type="password" class="form-control" placeholder="password" name="password">
                                                </div>
                                                
                                                <div class="form-group col-lg-12 col-md-12 mt-4">
                                                    <button class="btn btn-theme btn-lg" type="submit">Create Agent</button>
                                                </div>
                                        </div>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection