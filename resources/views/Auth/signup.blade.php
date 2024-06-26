@extends('layouts.master')
@section('title', 'Sign up')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/Auth/auth.css') }}">
@endsection

@section('content')
    <div class="container-fluid overflow-hidden">
        <div class="logo-txt container d-flex justify-content-center align-items-center">
            <div class="col col-lg-5 d-flex flex-column d-flex justify-content-center align-items-center bg-white">
                <img src="{{ asset('images/sign-in.png') }}" class="image-fluid mx-auto d-block" alt="login-logo">
                <p class="fs-2 fw-medium text-center">Sign up</p>
                <p class="fs-6 text-center">Please enter your credentials in the input.</p>
                <p class="fs-6 text-center">Already have an account? <a href="{{ route('signin') }}"
                        class="fw-semibold text-info">Sign in</a></p>
            </div>
            <div class="sign-up-cont  col col-lg-7 bg-info rounded-end-4 p-3">
                <form action="{{ route('storeData') }}" method="POST" id="signupForm">
                    @csrf
                    <div class="input-container">
                        <div class="d-flex justify-content-center align-items-center">
                            <div class="main-cred col-lg-6">
                                <div class="input-item mb-1">
                                    <label for="" class="form-label text-white">Firstname</label>
                                    <div class="input-icon d-flex align-items-center">
                                        <input type="text" name="firstname" id="firstname" class="form-control me-2"
                                            placeholder="Firstname">
                                    </div>
                                    @error('firstname')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="main-cred col-lg-6">
                                <div class="input-item mb-1">
                                    <label for="" class="form-label text-white">Lastname</label>
                                    <div class="input-icon d-flex align-items-center">
                                        <input type="text" name="lastname" id="lastname" class="form-control"
                                            placeholder="Lastname">
                                    </div>
                                    @error('lastname')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="input-item mb-1">
                            <label for="" class="form-label text-white mb-1">Home Address</label>
                            <div class="input-icon d-flex align-items-center">
                                <input type="text" name="home_address" id="home_address" class="form-control"
                                    placeholder="Complete Home Address">
                            </div>
                            @error('home_address')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="input-item mb-1">
                            <label for="" class="form-label text-white mb-1">Phone Number</label>
                            <div class="input-icon d-flex align-items-center">
                                <input type="text" name="phone_number" id="phone_number" class="form-control"
                                    placeholder="09123456789">
                            </div>
                            @error('phone_number')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="input-item mb-1 me-2" style="width: 50%">
                                <label for="age" class="form-label text-white mb-1">Age</label>
                                <div class="input-icon d-flex align-items-center">
                                    <input type="text" name="age" id="age" class="form-control" placeholder="Enter your age">
                                </div>
                                @error('age')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="input-item mb-1" style="width: 50%">
                                <label for="sex" class="form-label text-white mb-1">Gender</label>
                                <select class="form-select" name="sex" id="sex" aria-label="sex">
                                    <option selected>Choose</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="prefer_not_to_say">Prefer not to say</option>
                                </select>
                            </div>
                            @error('sex')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="input-item mb-1 me-2" style="width: 50%">
                                <label for="occupation" class="form-label text-white mb-1">Occupation(Optional)</label>
                                <div class="input-icon d-flex align-items-center">
                                    <input type="text" name="occupation" id="occupation" class="form-control" placeholder="Enter your occupation">
                                </div>
                                @error('occupation')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="input-item mb-1" style="width: 50%">
                                <label for="marital_status" class="form-label text-white mb-1">Marital Status</label>
                                <select class="form-select" name="marital_status" id="marital_status" aria-label="Gender">
                                    <option selected>Choose</option>
                                    <option value="single">Single</option>
                                    <option value="single">Married</option>
                                    <option value="widow">Widow</option>
                                    <option value="prefer_not_to_say">Prefer not to say</option>
                                </select>
                            </div>
                            @error('marital_status')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="input-item mb-1">
                            <label for="" class="form-label text-white mb-1">Email</label>
                            <div class="input-icon d-flex align-items-center">
                                <input type="email" name="email" id="email" class="form-control" placeholder="Email@gmail.com">
                            </div>
                            @error('email')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="input-item mb-1">
                            <label for="" class="form-label text-white mb-1">Password</label>
                            <div class="input-icon d-flex align-items-center">
                                <input type="password" name="password" id="password" class="form-control"
                                    placeholder="Password">
                                <i class="fa-regular fa-eye text-black-50" id="togglePassword"></i>
                            </div>
                            @error('password')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="input-item mb-1">
                            <label for="" class="form-label text-white mb-1">Confirm Password</label>
                            <div class="input-icon d-flex align-items-center">
                                <input type="password" name="password_confirmation" id="password_confirmation"
                                    class="form-control" placeholder="Confirm password">
                            </div>
                            @error('password_confirmation')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="sign-in-btn mb-2">
                            <button type="submit" class="btn btn-primary w-100 text-white fs-5 mt-2">Sign up</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <script>
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#password');
    
        togglePassword.addEventListener('click', function(e) {
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            this.classList.toggle('fa-eye');
            this.classList.toggle('fa-eye-slash');
        });
    </script>
@endsection
