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
                            <li><a href="dashboard.html"><i class="fa fa-tachometer-alt"></i>Dashboard<span class="notti_coun style-1">4</span></a></li>
                            {{-- <li><a href="my-profile.html"><i class="fa fa-user-tie"></i>My Profile</a></li> --}}
                            @if (Auth::user()->role == 'admin')
                                <li><a href="{{ route('newAgent') }}"><i class="fa fa-user-plus"></i>New Agent</a></li>
                                <li><a href="#"><i class="fa fa-users"></i>Manage Agents</a></li>
                            @endif
                            <li><a href="{{ route('propertiesList') }}"><i class="fa fa-tasks"></i>My Properties</a></li>
                            <li><a href="{{ route('newProperty') }}"><i class="fa fa-pen-nib"></i>Submit New Property</a></li>
                            <li class="active"><a href="{{ route('resetPassword') }}"><i class="fa fa-unlock-alt"></i>Change Password</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="col-xl-9 col-lg-9 col-md-12">
                <div class="dashboard-body">
                
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="_prt_filt_dash">
                                <div class="_prt_filt_dash_flex">
                                    <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                        <input type="radio" class="btn-check" name="chooselists" id="alllist" checked>
                                        <label class="btn btn-md btn-outline-primary font--medium" for="alllist">All</label>

                                        <input type="radio" class="btn-check" name="chooselists" id="activelist">
                                        <label class="btn btn-md btn-outline-primary font--medium" for="activelist">Active</label>

                                        <input type="radio" class="btn-check" name="chooselists" id="expiredlist">
                                        <label class="btn btn-md btn-outline-primary font--medium" for="expiredlist">Expired</label>
                                        
                                        <input type="radio" class="btn-check" name="chooselists" id="draftlist">
                                        <label class="btn btn-md btn-outline-primary font--medium" for="draftlist">Draft</label>
                                    </div>
                                </div>
                                <div class="_prt_filt_dash_last m2_hide">
                                    <div class="_prt_filt_radius">
                                        
                                    </div>
                                    <div class="_prt_filt_add_new">
                                        <a href="submit-property-dashboard.html" class="prt_submit_link"><i class="fas fa-plus-circle"></i><span class="d-none d-lg-block d-md-block">List New Property</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="dashboard_property">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="thead-dark">
                                            <tr>
                                              <th scope="col">Property</th>
                                              <th scope="col" class="m2_hide">Leads</th>
                                              <th scope="col" class="m2_hide">Stats</th>
                                              <th scope="col" class="m2_hide">Posted On</th>
                                              <th scope="col">Status</th>
                                              <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- tr block -->
                                            <tr>
                                                <td>
                                                    <div class="dash_prt_wrap">
                                                        <div class="dash_prt_thumb">
                                                            <img src="assets/img/prt-1.png" class="img-fluid" alt="">
                                                        </div>
                                                        <div class="dash_prt_caption">
                                                            <h5>340/15 Jannat Enclave</h5>
                                                            <div class="prt_dashb_lot">5682 Brown River Suit 18</div>
                                                            <div class="prt_dash_rate"><span>$410.20M</span></div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="m2_hide">
                                                    <div class="prt_leads"><span>27 till now</span></div>
                                                    <div class="prt_leads_list">
                                                        <ul>
                                                            <li><a href="#"><img src="assets/img/team-1.jpg" class="img-fluid circle" alt=""></a></li>
                                                            <li><a href="#"><img src="assets/img/team-2.jpg" class="img-fluid circle" alt=""></a></li>
                                                            <li><a href="#" class="_leads_name style-1">K</a></li>
                                                            <li><a href="#"><img src="assets/img/team-3.jpg" class="img-fluid circle" alt=""></a></li>
                                                            <li><a href="#" class="leades_more">14+</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td class="m2_hide">
                                                    <div class="_leads_view"><h5 class="up">145</h5></div>
                                                    <div class="_leads_view_title"><span>Total Views</span></div>
                                                </td>
                                                <td class="m2_hide">
                                                    <div class="_leads_posted"><h5>15 Aug - 12:40</h5></div>
                                                    <div class="_leads_view_title"><span>12 Days ago</span></div>
                                                </td>
                                                <td>
                                                    <div class="_leads_status"><span class="active">Active</span></div>
                                                    <div class="_leads_view_title"><span>Till 12 Oct</span></div>
                                                </td>
                                                <td>
                                                    <div class="_leads_action">
                                                        <a href="#"><i class="fas fa-edit"></i></a>
                                                        <a href="#"><i class="fas fa-trash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            
                                            <!-- tr block -->
                                            <tr>
                                                <td>
                                                    <div class="dash_prt_wrap">
                                                        <div class="dash_prt_thumb">
                                                            <img src="assets/img/prt-2.png" class="img-fluid" alt="">
                                                        </div>
                                                        <div class="dash_prt_caption">
                                                            <h5>Premiere Property Group</h5>
                                                            <div class="prt_dashb_lot">5682 Brown River Suit 18</div>
                                                            <div class="prt_dash_rate"><span>$275.45M</span></div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="m2_hide">
                                                    <div class="prt_leads"><span>27 till now</span></div>
                                                    <div class="prt_leads_list">
                                                        <ul>
                                                            <li><a href="#"><img src="assets/img/team-1.jpg" class="img-fluid circle" alt=""></a></li>
                                                            <li><a href="#"><img src="assets/img/team-2.jpg" class="img-fluid circle" alt=""></a></li>
                                                            <li><a href="#" class="_leads_name style-1">K</a></li>
                                                            <li><a href="#"><img src="assets/img/team-3.jpg" class="img-fluid circle" alt=""></a></li>
                                                            <li><a href="#" class="leades_more">14+</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td class="m2_hide">
                                                    <div class="_leads_view"><h5 class="up">2164</h5></div>
                                                    <div class="_leads_view_title"><span>Total Views</span></div>
                                                </td>
                                                <td class="m2_hide">
                                                    <div class="_leads_posted"><h5>10 Jan - 10:10</h5></div>
                                                    <div class="_leads_view_title"><span>12 Days ago</span></div>
                                                </td>
                                                <td>
                                                    <div class="_leads_status"><span class="expire">Expired</span></div>
                                                    <div class="_leads_view_title"><span>Till 18 Dec</span></div>
                                                </td>
                                                <td>
                                                    <div class="_leads_action">
                                                        <a href="#"><i class="fas fa-edit"></i></a>
                                                        <a href="#"><i class="fas fa-trash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            
                                            <!-- tr block -->
                                            <tr>
                                                <td>
                                                    <div class="dash_prt_wrap">
                                                        <div class="dash_prt_thumb">
                                                            <img src="assets/img/prt-3.png" class="img-fluid" alt="">
                                                        </div>
                                                        <div class="dash_prt_caption">
                                                            <h5>Equity Point Real Estate</h5>
                                                            <div class="prt_dashb_lot">5682 Brown River Suit 18</div>
                                                            <div class="prt_dash_rate"><span>$580.40M</span></div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="m2_hide">
                                                    <div class="prt_leads"><span>15 till now</span></div>
                                                    <div class="prt_leads_list">
                                                        <ul>
                                                            <li><a href="#"><img src="assets/img/team-1.jpg" class="img-fluid circle" alt=""></a></li>
                                                            <li><a href="#"><img src="assets/img/team-2.jpg" class="img-fluid circle" alt=""></a></li>
                                                            <li><a href="#" class="_leads_name style-1">K</a></li>
                                                            <li><a href="#"><img src="assets/img/team-3.jpg" class="img-fluid circle" alt=""></a></li>
                                                            <li><a href="#" class="leades_more">14+</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td class="m2_hide">
                                                    <div class="_leads_view"><h5 class="up">3125</h5></div>
                                                    <div class="_leads_view_title"><span>Total Views</span></div>
                                                </td>
                                                <td class="m2_hide">
                                                    <div class="_leads_posted"><h5>07 Jun - 11:15</h5></div>
                                                    <div class="_leads_view_title"><span>20 Days ago</span></div>
                                                </td>
                                                <td>
                                                    <div class="_leads_status"><span class="active">Active</span></div>
                                                    <div class="_leads_view_title"><span>Till 12 Oct</span></div>
                                                </td>
                                                <td>
                                                    <div class="_leads_action">
                                                        <a href="#"><i class="fas fa-edit"></i></a>
                                                        <a href="#"><i class="fas fa-trash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            
                                            <!-- tr block -->
                                            <tr>
                                                <td>
                                                    <div class="dash_prt_wrap">
                                                        <div class="dash_prt_thumb">
                                                            <img src="assets/img/prt-4.png" class="img-fluid" alt="">
                                                        </div>
                                                        <div class="dash_prt_caption">
                                                            <h5>Urban Pacific Real Estate</h5>
                                                            <div class="prt_dashb_lot">5682 Brown River Suit 18</div>
                                                            <div class="prt_dash_rate"><span>$260.50M</span></div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="m2_hide">
                                                    <div class="prt_leads"><span>27 till now</span></div>
                                                    <div class="prt_leads_list">
                                                        <ul>
                                                            <li><a href="#"><img src="assets/img/team-1.jpg" class="img-fluid circle" alt=""></a></li>
                                                            <li><a href="#"><img src="assets/img/team-2.jpg" class="img-fluid circle" alt=""></a></li>
                                                            <li><a href="#" class="_leads_name style-1">K</a></li>
                                                            <li><a href="#"><img src="assets/img/team-3.jpg" class="img-fluid circle" alt=""></a></li>
                                                            <li><a href="#" class="leades_more">14+</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td class="m2_hide">
                                                    <div class="_leads_view"><h5 class="up">3210</h5></div>
                                                    <div class="_leads_view_title"><span>Total Views</span></div>
                                                </td>
                                                <td class="m2_hide">
                                                    <div class="_leads_posted"><h5>22 Sep - 08:40</h5></div>
                                                    <div class="_leads_view_title"><span>23 Days ago</span></div>
                                                </td>
                                                <td>
                                                    <div class="_leads_status"><span class="expire">Expired</span></div>
                                                    <div class="_leads_view_title"><span>Till 06 Dec</span></div>
                                                </td>
                                                <td>
                                                    <div class="_leads_action">
                                                        <a href="#"><i class="fas fa-edit"></i></a>
                                                        <a href="#"><i class="fas fa-trash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            
                                            <!-- tr block -->
                                            <tr>
                                                <td>
                                                    <div class="dash_prt_wrap">
                                                        <div class="dash_prt_thumb">
                                                            <img src="assets/img/prt-5.png" class="img-fluid" alt="">
                                                        </div>
                                                        <div class="dash_prt_caption">
                                                            <h5>Infiniti Real Estate</h5>
                                                            <div class="prt_dashb_lot">5682 Brown River Suit 18</div>
                                                            <div class="prt_dash_rate"><span>$425.30M</span></div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="m2_hide">
                                                    <div class="prt_leads"><span>10 till now</span></div>
                                                    <div class="prt_leads_list">
                                                        <ul>
                                                            <li><a href="#"><img src="assets/img/team-1.jpg" class="img-fluid circle" alt=""></a></li>
                                                            <li><a href="#"><img src="assets/img/team-2.jpg" class="img-fluid circle" alt=""></a></li>
                                                            <li><a href="#" class="_leads_name style-1">K</a></li>
                                                            <li><a href="#"><img src="assets/img/team-3.jpg" class="img-fluid circle" alt=""></a></li>
                                                            <li><a href="#" class="leades_more">14+</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td class="m2_hide">
                                                    <div class="_leads_view"><h5 class="up">4526</h5></div>
                                                    <div class="_leads_view_title"><span>Total Views</span></div>
                                                </td>
                                                <td class="m2_hide">
                                                    <div class="_leads_posted"><h5>08 Jul - 11:05</h5></div>
                                                    <div class="_leads_view_title"><span>11 Days ago</span></div>
                                                </td>
                                                <td>
                                                    <div class="_leads_status"><span class="active">Active</span></div>
                                                    <div class="_leads_view_title"><span>Till 12 Oct</span></div>
                                                </td>
                                                <td>
                                                    <div class="_leads_action">
                                                        <a href="#"><i class="fas fa-edit"></i></a>
                                                        <a href="#"><i class="fas fa-trash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            
                                            <!-- tr block -->
                                            <tr>
                                                <td>
                                                    <div class="dash_prt_wrap">
                                                        <div class="dash_prt_thumb">
                                                            <img src="assets/img/prt-6.png" class="img-fluid" alt="">
                                                        </div>
                                                        <div class="dash_prt_caption">
                                                            <h5>Pace Realty Corporation</h5>
                                                            <div class="prt_dashb_lot">5682 Brown River Suit 18</div>
                                                            <div class="prt_dash_rate"><span>$170.50M</span></div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="m2_hide">
                                                    <div class="prt_leads"><span>16 till now</span></div>
                                                    <div class="prt_leads_list">
                                                        <ul>
                                                            <li><a href="#"><img src="assets/img/team-1.jpg" class="img-fluid circle" alt=""></a></li>
                                                            <li><a href="#"><img src="assets/img/team-2.jpg" class="img-fluid circle" alt=""></a></li>
                                                            <li><a href="#" class="_leads_name style-1">K</a></li>
                                                            <li><a href="#"><img src="assets/img/team-3.jpg" class="img-fluid circle" alt=""></a></li>
                                                            <li><a href="#" class="leades_more">14+</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td class="m2_hide">
                                                    <div class="_leads_view"><h5 class="up">6235</h5></div>
                                                    <div class="_leads_view_title"><span>Total Views</span></div>
                                                </td>
                                                <td class="m2_hide">
                                                    <div class="_leads_posted"><h5>17 May - 10:30</h5></div>
                                                    <div class="_leads_view_title"><span>16 Days ago</span></div>
                                                </td>
                                                <td>
                                                    <div class="_leads_status"><span class="active">Active</span></div>
                                                    <div class="_leads_view_title"><span>Till 12 Oct</span></div>
                                                </td>
                                                <td>
                                                    <div class="_leads_action">
                                                        <a href="#"><i class="fas fa-edit"></i></a>
                                                        <a href="#"><i class="fas fa-trash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            
                                            <!-- tr block -->
                                            <tr>
                                                <td>
                                                    <div class="dash_prt_wrap">
                                                        <div class="dash_prt_thumb">
                                                            <img src="assets/img/prt-7.png" class="img-fluid" alt="">
                                                        </div>
                                                        <div class="dash_prt_caption">
                                                            <h5>Red Wagon Properties</h5>
                                                            <div class="prt_dashb_lot">5682 Brown River Suit 18</div>
                                                            <div class="prt_dash_rate"><span>$245.20M</span></div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="m2_hide">
                                                    <div class="prt_leads"><span>27 till now</span></div>
                                                    <div class="prt_leads_list">
                                                        <ul>
                                                            <li><a href="#"><img src="assets/img/team-1.jpg" class="img-fluid circle" alt=""></a></li>
                                                            <li><a href="#"><img src="assets/img/team-2.jpg" class="img-fluid circle" alt=""></a></li>
                                                            <li><a href="#" class="_leads_name style-1">K</a></li>
                                                            <li><a href="#"><img src="assets/img/team-3.jpg" class="img-fluid circle" alt=""></a></li>
                                                            <li><a href="#" class="leades_more">14+</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td class="m2_hide">
                                                    <div class="_leads_view"><h5 class="up">4562</h5></div>
                                                    <div class="_leads_view_title"><span>Total Views</span></div>
                                                </td>
                                                <td class="m2_hide">
                                                    <div class="_leads_posted"><h5>12 Apr - 10:15</h5></div>
                                                    <div class="_leads_view_title"><span>10 Days ago</span></div>
                                                </td>
                                                <td>
                                                    <div class="_leads_status"><span class="expire">Expired</span></div>
                                                    <div class="_leads_view_title"><span>Till 12 Oct</span></div>
                                                </td>
                                                <td>
                                                    <div class="_leads_action">
                                                        <a href="#"><i class="fas fa-edit"></i></a>
                                                        <a href="#"><i class="fas fa-trash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            
                                            <!-- tr block -->
                                            <tr>
                                                <td>
                                                    <div class="dash_prt_wrap">
                                                        <div class="dash_prt_thumb">
                                                            <img src="assets/img/prt-8.png" class="img-fluid" alt="">
                                                        </div>
                                                        <div class="dash_prt_caption">
                                                            <h5>Stream Realty Partners</h5>
                                                            <div class="prt_dashb_lot">5682 Brown River Suit 18</div>
                                                            <div class="prt_dash_rate"><span>$260.40M</span></div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="m2_hide">
                                                    <div class="prt_leads"><span>27 till now</span></div>
                                                    <div class="prt_leads_list">
                                                        <ul>
                                                            <li><a href="#"><img src="assets/img/team-1.jpg" class="img-fluid circle" alt=""></a></li>
                                                            <li><a href="#"><img src="assets/img/team-2.jpg" class="img-fluid circle" alt=""></a></li>
                                                            <li><a href="#" class="_leads_name style-1">K</a></li>
                                                            <li><a href="#"><img src="assets/img/team-3.jpg" class="img-fluid circle" alt=""></a></li>
                                                            <li><a href="#" class="leades_more">14+</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td class="m2_hide">
                                                    <div class="_leads_view"><h5 class="up">1254</h5></div>
                                                    <div class="_leads_view_title"><span>Total Views</span></div>
                                                </td>
                                                <td class="m2_hide">
                                                    <div class="_leads_posted"><h5>12 Sep - 09:25</h5></div>
                                                    <div class="_leads_view_title"><span>16 Days ago</span></div>
                                                </td>
                                                <td>
                                                    <div class="_leads_status"><span class="active">Active</span></div>
                                                    <div class="_leads_view_title"><span>Till 12 Oct</span></div>
                                                </td>
                                                <td>
                                                    <div class="_leads_action">
                                                        <a href="#"><i class="fas fa-edit"></i></a>
                                                        <a href="#"><i class="fas fa-trash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            
                                            <!-- tr block -->
                                            <tr>
                                                <td>
                                                    <div class="dash_prt_wrap">
                                                        <div class="dash_prt_thumb">
                                                            <img src="assets/img/prt-9.png" class="img-fluid" alt="">
                                                        </div>
                                                        <div class="dash_prt_caption">
                                                            <h5>Coastal Premier Properties</h5>
                                                            <div class="prt_dashb_lot">5682 Brown River Suit 18</div>
                                                            <div class="prt_dash_rate"><span>$242.70M</span></div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="m2_hide">
                                                    <div class="prt_leads"><span>27 till now</span></div>
                                                    <div class="prt_leads_list">
                                                        <ul>
                                                            <li><a href="#"><img src="assets/img/team-1.jpg" class="img-fluid circle" alt=""></a></li>
                                                            <li><a href="#"><img src="assets/img/team-2.jpg" class="img-fluid circle" alt=""></a></li>
                                                            <li><a href="#" class="_leads_name style-1">K</a></li>
                                                            <li><a href="#"><img src="assets/img/team-3.jpg" class="img-fluid circle" alt=""></a></li>
                                                            <li><a href="#" class="leades_more">14+</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td class="m2_hide">
                                                    <div class="_leads_view"><h5 class="up">2740</h5></div>
                                                    <div class="_leads_view_title"><span>Total Views</span></div>
                                                </td>
                                                <td class="m2_hide">
                                                    <div class="_leads_posted"><h5>16 Oct - 11:35</h5></div>
                                                    <div class="_leads_view_title"><span>18 Days ago</span></div>
                                                </td>
                                                <td>
                                                    <div class="_leads_status"><span class="expire">Expired</span></div>
                                                    <div class="_leads_view_title"><span>Till 12 Nov</span></div>
                                                </td>
                                                <td>
                                                    <div class="_leads_action">
                                                        <a href="#"><i class="fas fa-edit"></i></a>
                                                        <a href="#"><i class="fas fa-trash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- row -->
                
                    
                </div>
                    
            </div>
            
        </div>
    </div>
</section>
@endsection