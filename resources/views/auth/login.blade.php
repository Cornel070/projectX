@extends('layouts.authentication.master')
@section('title', 'Admin login')

@section('css')
@endsection

@section('style')
@endsection

@section('content')
<div class="page-wrapper">
   <div class="container-fluid p-0">
      <!-- login page start-->
      <div class="authentication-main mt-0">
         <div class="row">
            <div class="col-md-12">
               <div class="auth-innerright auth-bg">
                  <div class="authentication-box">
                     <div class="mt-4">
                        <div class="card-body p-0">
                           <div class="cont text-center">
                              <div>
                                 <form class="theme-form" method="post">
                                    @csrf
                                    <h4>LOGIN</h4>
                                    {{-- <h6>Enter your Username and Password</h6> --}}
                                    @include('flash_msg')
                                    <div class="form-group">
                                       <label class="col-form-label pt-0">Email</label>
                                       <input name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" type="email" required="" value="{{old('email')}}">
                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                       <label class="col-form-label">Password</label>
                                       <input name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" required="" value="{{old('password')}}">
                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="checkbox p-0">
                                       <input id="checkbox1" type="checkbox">
                                       <label for="checkbox1">Remember me</label>
                                    </div>
                                    <div class="form-group form-row mt-3 mb-0">
                                       <button class="btn btn-primary btn-block" type="submit">LOGIN</button>
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
      </div>
      <!-- login page end-->
   </div>
</div>
@endsection

@section('script')
<script src="{{asset('assets/js/login.js')}}"></script>
@endsection