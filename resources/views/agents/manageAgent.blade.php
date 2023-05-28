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
                                <li><a href="{{ route('newAgent') }}"><i class="fa fa-user-plus"></i>New Agent</a></li>
                                <li class="active"><a href="{{ route('manageAgent') }}"><i class="fa fa-users"></i>Manage Agents</a></li>
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
                            <h4>Manage your Agents</h4>
                            <p>You can simply manage agents</p>
                            @if(session('message'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('message') }}
                                </div>
                            @elseif (session('error'))
                                <div class="alert alert-danger" role="alert">
                                    {{ session('error') }}
                                </div>
                            @endif
                            {{-- @foreach($users as $user)
                                <p>{{ $user->name }}</p>
                                <p>{{ $user->email }}</p>
                            @endforeach --}}
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-lg">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Status</th>
                                                <th>Date Created</th>
                                                {{-- <th>Actions</th> --}}
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                            @foreach ($users as $user)
                                                <tr>
                                                    <td>{{ $user->name }}</td>
                                                    <td>{{ $user->email }}</td>
                                                    @if ($user->status == 'inactive')
                                                        <td><div class="d-inline-flex label text-danger bg-light-danger">{{ $user->status }}</div></td>
                                                    @elseif ($user->status == 'active')
                                                        <td><div class="d-inline-flex label text-success bg-light-success">{{ $user->status }}</div></td>
                                                    @endif
                                                    {{-- <td><div class="d-inline-flex label text-success bg-light-success">{{ $user->status }}</div></td>                 --}}
                                                    <td class="prt-fgi">{{ $user->created_at }}</td>
                                                    {{-- action buttons --}}
                                                    <td>
                                                        <form action="{{ route('revokeAgent', $user->id) }}" method="POST">
                                                            @csrf
                                                            @method('PUT')
                                                            {{-- icon of a key in the button --}}
                                                            @if ($user->status == 'inactive')
                                                                <button type="submit" class="btn btn-sm btn-light-success"><i class="fa-solid fa-key"></i></button>
                                                            @elseif ($user->status == 'active')
                                                                <button type="submit" class="btn btn-sm btn-light-danger"><i class="fa-solid fa-key"></i></button>
                                                            @endif
                                                        </form>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex">
                                                            {{-- <a href="{{ route('editAgent', $user->id) }}" class="btn btn-sm btn-light-primary me-2">Edit</a> --}}
                                                            {{-- show a modal where i can change informations  --}}
                                                            {{-- <button type="button" class="btn btn-sm btn-light-info me-2" data-bs-toggle="modal" data-bs-target="#exampleModal">Change Status</button> --}}
                                                            {{-- delete button --}}
                                                            <form action="{{ route('deleteAgent', $user->id) }}" method="DELETE">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-sm btn-light-danger">Delete</button>
                                                            </form>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        {{-- button for reset password of users --}}
                                                        <form action="{{ route('resetPassword', $user->id) }}" method="POST">
                                                            @csrf
                                                            @method('PUT')
                                                            <button type="submit" class="btn btn-sm btn-light-warning">Reset Password</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                                
                                            @endforeach
                                            {{-- <tr>
                                                <td><a href="#" class="font--medium"><img src="assets/img/prt-1.png" class="img-fluid rounded mr-2" width="60" alt="Avatar">Luxury House</a></td>
                                                <td><div class="d-inline-flex label text-success bg-light-success">Paid</div></td>                
                                                <td class="prt-fgi">$120M</td>
                                                <td>04/10/2013</td>  
                                            </tr> --}}
                                            
                                            {{-- <tr>
                                                <td><a href="#" class="font--medium"><img src="assets/img/prt-2.png" class="img-fluid rounded mr-2" width="60" alt="Avatar">Sargun Apartment</a></td>
                                                <td><div class="d-inline-flex label text-warning bg-light-warning">Pending</div></td>							
                                                <td class="prt-fgi">$210M</td>
                                                <td>05/08/2014</td> 
                                            </tr>
                                            
                                            <tr>
                                                <td><a href="#" class="font--medium"><img src="assets/img/prt-3.png" class="img-fluid rounded mr-2" width="60" alt="Avatar">Preet Silver City</a></td>
                                                <td><div class="d-inline-flex label text-danger bg-light-danger">Cancel</div></td>  
                                                <td class="prt-fgi">$850M</td>
                                                <td>11/05/2015</td>                                          
                                            </tr>
                                            
                                            <tr>
                                                <td><a href="#" class="font--medium"><img src="assets/img/prt-4.png" class="img-fluid rounded mr-2" width="60" alt="Avatar">Mount See Villa</a></td>
                                                <td><div class="d-inline-flex label text-success bg-light-success">Paid</div></td>
                                                <td class="prt-fgi">$144M</td>
                                                <td>06/09/2016</td>
                                            </tr>
                                            
                                            <tr>
                                                <td><a href="#" class="font--medium"><img src="assets/img/prt-5.png" class="img-fluid rounded mr-2" width="60" alt="Avatar">Mount See Villa</a></td>
                                                <td><div class="d-inline-flex label text-info bg-light-info">On Hold</div></td>
                                                <td class="prt-fgi">$410M</td>
                                                <td>06/09/2016</td>
                                            </tr>
                                            
                                            <tr>
                                                <td><a href="#" class="font--medium"><img src="assets/img/prt-6.png" class="img-fluid rounded mr-2" width="60" alt="Avatar">Mount See Villa</a></td>
                                                <td><div class="d-inline-flex label text-success bg-light-success">Paid</div></td>
                                                <td class="prt-fgi">$317M</td>
                                                <td>06/09/2016</td>
                                            </tr>
                                            
                                            <tr>
                                                <td><a href="#"><img src="assets/img/prt-7.png" class="img-fluid rounded mr-2" width="60" alt="Avatar">Mount See Villa</a></td>
                                                <td><div class="d-inline-flex label text-danger bg-light-danger">Cancel</div></td>
                                                <td class="prt-fgi">$115M</td>
                                                <td>06/09/2016</td>
                                            </tr> --}}
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>
@endsection