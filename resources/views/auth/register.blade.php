@extends('layouts.app_register')

@section('content')

	<div class="limiter">
		<div class="container-register100" style="background-image: url('app_rab/login_style/images/bg-01.jpg');">
			<div class="body-register"> 
                <div class="title"> {{ __('REGISTER') }} </div>
                <form method="POST" action="{{ route('register') }}" class="" >
                    @csrf 
                    <div class="form-register">
                        <div class="input-field">
                            <label for="">name</label>
                            <div class="input">
                                <input type="text" placeholder="name" name="name"/>
                                @error('name')
                                    <label for="" class="msg-error">{{ $message }}</label> 
                                @enderror 
                            </div>
                        </div>
                    </div>
                    <div class="form-register">
                        <div class="input-field">
                            <label for="">email</label>
                            <div class="input">
                                <input type="text" placeholder="email" name="email"/>
                                @error('email')
                                    <label for="" class="msg-error">{{ $message }}</label> 
                                @enderror 
                            </div>
                        </div>
                    </div>
                    <div class="form-register">
                        <div class="input-field">
                            <label for="">password</label>
                            <div class="input">
                                <input type="password" placeholder="password" name="password"/>
                                @error('password')
                                <label for="" class="msg-error">{{ $message }}</label> 
                                @enderror 
                            </div>
                        </div>
                    </div>
                    <div class="form-register">
                        <div class="input-field">
                            <label for="">{{ __('Confirm Password') }}</label>
                            <div class="input">
                                <input type="password" placeholder="password" name="password_confirmation"/> 
                            </div>
                        </div> 
                    </div> 
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
					<!-- <div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="username" placeholder="User name">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div> -->
            </div>
        </div>
    </div>
 
@endsection
