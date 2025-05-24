@extends('auth.layout.app')
@section('title', 'Register')
@section('content')
    <div class="login-wrapper">
        <div class="container">
            <div class="loginbox">
                <div class="login-left">
                    <img class="img-fluid" src="{{ asset('admin/assets/img/login.png') }}" alt="Logo">
                </div>
                <div class="login-right">
                    <div class="login-right-wrap">
                        <h1>Sign Up</h1>
                        <p class="account-subtitle">Enter details to create your account</p>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('register') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>Name <span class="login-danger">*</span></label>
                                <input name="name" class="form-control" type="text">
                                <span class="profile-views"><i class="fas fa-user-circle"></i></span>
                            </div>
                            <div class="form-group">
                                <label>Email <span class="login-danger">*</span></label>
                                <input name="email" class="form-control" type="text">
                                <span class="profile-views"><i class="fas fa-envelope"></i></span>
                            </div>
                            <div class="form-group">
                                <label>Phone Number <span class="login-danger">*</span></label>
                                <input name="phone" class="form-control" type="text">
                                <span class="profile-views"><i class="fas fa-envelope"></i></span>
                            </div>
                            <div class="form-group ">
                                <label>Date Of Birth <span class="login-danger">*</span></label>
                                <input name="date_of_birth" class="form-control datetimepicker" type="text"
                                    placeholder="DD-MM-YYYY">
                                <span class="profile-views"><i class="fas fa-calendar"></i></span>

                            </div>

                            <div class="form-group">
                                <label>Region <span class="login-danger">*</span></label>
                                <select name="region" class="form-control select">
                                    <option>Please Select Region </option>
                                    <option>Hindu</option>
                                    <option>Christian</option>
                                    <option>Others</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Gender <span class="login-danger">*</span></label>
                                <select class="form-control select">
                                    <option>Select Gender</option>
                                    <option>Female</option>
                                    <option>Male</option>
                                    <option>Others</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Township <span class="login-danger">*</span></label>
                                <select name="township" class="form-control select">
                                    <option>Please Select Section </option>
                                    <option>B</option>
                                    <option>A</option>
                                    <option>C</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Password <span class="login-danger">*</span></label>
                                <input name="password" class="form-control pass-input" type="text">
                                <span class="profile-views feather-eye toggle-password"></span>
                            </div>
                            <div class="form-group">
                                <label>Confirm password <span class="login-danger">*</span></label>
                                <input class="form-control pass-confirm" type="text">
                                <span class="profile-views feather-eye reg-toggle-password"></span>
                            </div>
                            <div class=" dont-have">Already Registered? <a href="{{ route('login') }}">Login</a></div>
                            <div class="mb-0 form-group">
                                <button class="btn btn-primary btn-block" type="submit">Register</button>
                            </div>
                        </form>

                        <div class="login-or">
                            <span class="or-line"></span>
                            <span class="span-or">or</span>
                        </div>

                        <div class="social-login">
                            <a href="#"><i class="fab fa-google-plus-g"></i></a>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
