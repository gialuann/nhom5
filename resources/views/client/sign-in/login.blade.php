@extends('client.master')
@section('title' ,'register')
@section('content')
		<div class="login">
			<img src="{{asset('blog/files/login-bg.png')}}" alt="login image" class="login__img" enctype="multipart/form-data">
			<form action="{{route('login')}}" class="login__form" method="post">
				@csrf
			   <h1 class="login__title">Login</h1>
			   <div class="login__content">
				  <div class="login__box">
					 <i class="ri-user-3-line login__icon"></i>
					 <div class="login__box-input">
						<input type="email" required class="login__input" id="email" placeholder=" " name="email">
						<label for="login-email" class="login__label">Email</label>
					 </div>
				  </div>
				  <div class="login__box">
					 <i class="ri-lock-2-line login__icon"></i>
					 <div class="login__box-input">
						<input type="password" required class="login__input" id="password" placeholder="" name="password">
						<label for="login-pass" class="login__label">Password</label>
						<i class="ri-eye-off-line login__eye" id="login-eye"></i>
					 </div>
				  </div>
			   </div>
			   <div class="login__check">
				  <div class="login__check-group">
					 <input type="checkbox" class="login__check-input" id="login-check">
					 <label for="login-check" class="login__check-label">Remember me</label>
				  </div>
   
				  <a href="#" class="login__forgot">Forgot Password?</a>
			   </div>
   
			   <button type="submit" class="login__button">Login</button>
   
			   <p class="login__register">
				  Don't have an account? <a href="{{route('client.sign-in.register')}}">Register</a>
			   </p>
			</form>
		 </div>

{{-- <script src="{{ asset ('login/login.js') }}"></script> --}}



@endsection