@extends('client.master')
@section('title' ,'register')
@section('content')
    
            <div class="login">
                <img src="{{asset('blog/files/login-bg.png')}}" alt="login image" class="login__img">
       
                <form action="{{route('client.sign-in.store')}}" method="post" enctype="multipart/form-data" class="login__form">
                    @csrf
                   <h1 class="login__title">Register</h1>
                   <div class="login__content">
                      <div class="login__box">
                        <i class="fa-solid fa-envelope"></i>
                         <div class="login__box-input">
                            <input type="email" required class="login__input" id="email" name="email" placeholder=" ">
                            <label for="login-email" class="login__label">Email</label>
                            @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                         </div>
                      </div>
                      <div class="login__box">
                        <i class="fa-solid fa-key"></i>
                         <div class="login__box-input">
                            <input type="password" required class="login__input" id="password" name="password" placeholder=" ">
                            <label for="login-pass" class="login__label">Password</label>
                            <i class="ri-eye-off-line login__eye" id="login-eye"></i>
                            @if ($errors->has('password'))
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                         </div>
                      </div>
                   </div>
                          <div class="login__box">
                           <i class="fa-solid fa-key"></i>
                 <div class="login__box-input">
                    <input type="password" required class="login__input" id="password.confirm" name="password-confirmation"placeholder=" ">
                    <label for="login-pass" class="login__label">Password-confirm</label>
                    <i class="ri-eye-off-line login__eye" id="login-eye"></i>
                 </div>
                </div>
                <br>
                <div class="login__box">
                    <i class="fa-solid fa-phone"></i>
                                  <div class="login__box-input">
                                  <input type="text" required class="login__input" id="phone" name="phone" placeholder=" ">
                                 <label for="login-pass" class="login__label">Phone</label>
                               </div>
                        </div>
                    <br>
                    <div class="login__box">
                     <i class="fa-solid fa-address-card"></i>
                                      <div class="login__box-input">
                                      <input type="text" required class="login__input" id="fullname" name="fullname" placeholder=" ">
                                     <label for="login-pass" class="login__label">Fullname</label>
                                   </div>
                                </div>
                        <br>
                   <div class="login__check">
                      <div class="login__check-group">
                         <input type="checkbox" class="login__check-input" id="login-check">
                         <label for="login-check" class="login__check-label">Remember me</label>
                      </div>
       
                      <a href="#" class="login__forgot">Forgot Password?</a>
                   </div>
                   <div id="hiddenElement" style="visibility: hidden;">
                    <label>Level</label>
                    <select class="form-control" name="level">
                        <option value="2" selected >Member</option>
                    </select>     
                    <label>Status</label>
                    <select class="form-control" name="status">
                        <option value="1" selected >show</option>
                    </select>
                    
                </div>
       
                   <button type="submit" class="login__button">Register</button>
       
                   <p class="login__register">
                      Don't have an account? <a href="{{route('client.sign-in.login')}}">Login</a>
                   </p>
                </form>
             </div>
        <!-- Footer -->
@endsection