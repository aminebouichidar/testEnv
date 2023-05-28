@extends('layouts.app')

@section('content')
<section class="gray-simple">
    <div class="container">
        <!-- row Start -->
        <div class="row justify-content-center">
        
            <!-- Single blog Grid -->
            <div class="col-xl-6 col-lg-8 col-md-12">
                <div class="vesh-detail-bloc">
                    <div class="vesh-detail-bloc-body pt-3">
                        <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <button class="nav-link active" id="signin-tab" data-bs-toggle="pill" data-bs-target="#signin" type="button" role="tab" aria-controls="signin" aria-selected="true">Sign In</button>
                            </li>
                            <li class="nav-item">
                            <button class="nav-link" id="register-tab" data-bs-toggle="pill" data-bs-target="#register" type="button" role="tab" aria-controls="register" aria-selected="false" tabindex="-1">Register</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="signin" role="tabpanel" aria-labelledby="signin-tab" tabindex="0">
                                <div class="row gx-3 gy-4">
                                    <div class="modal-login-form">
                                        <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                            <div class="form-floating mb-4">
                                                <input type="email" class="form-control @error('email') border-red-500 @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="name@example.com" autofocus>
                                                <label>User Name</label>
                                                @error('email')
                                                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            
                                            <div class="form-floating mb-4">
                                                <input type="password" class="form-control @error('password') border-red-500 @enderror" name="password" required autocomplete="current-password">
                                                <label>Password</label>
                                                @error('password')
                                                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary full-width font--bold btn-lg">Log In</button>
                                            </div>
                                            
                                            <div class="modal-flex-item mb-3">
                                                <div class="modal-flex-first">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="savepassword1" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="savepassword1">Save Password</label>
                                                    </div>
                                                </div>
                                                @if (Route::has('password.request'))
                                                    <div class="modal-flex-last">
                                                        <a href="{{ route('password.request') }}">Forget Password?</a>
                                                    </div>
                                                @endif
                                            </div>
                                        </form>
                                    </div>
                                    <div class="social-login">
                                        <ul>
                                            <li><a href="JavaScript:Void(0);" class="btn connect-fb"><i class="fa-brands fa-facebook"></i>Facebook</a></li>
                                            <li><a href="JavaScript:Void(0);" class="btn connect-google"><i class="fa-brands fa-google"></i>Google+</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab" tabindex="0">
                                <div class="row gx-3 gy-4">
                                    <div class="modal-login-form">
                                        <form method="POST" action="{{ route('register') }}">
                                        @csrf
                                            <div class="form-floating mb-4">
                                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Anthony James">
                                                <label>Full Name</label>
                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-floating mb-4">
                                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="james.anthony@domain.com">
                                                <label>Email</label>
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            {{-- <div class="form-floating mb-4">
                                                <input type="email" class="form-control" placeholder="example123">
                                                <label>User ID</label>
                                            </div> --}}
                                            <div class="form-floating mb-4">
                                                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">
                                                <label>Password</label>
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-floating mb-4">
                                                <input type="password" class="form-control" placeholder="Password" name="password_confirmation" required autocomplete="new-password">
                                                <label>Confirm Password</label>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary full-width font--bold btn-lg">Create An Account</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <!-- /row -->					
    </div>	
</section>
@endsection
