@extends('layouts.simple.master')
@section('title', 'User Cards')

@section('css')
@endsection

@section('style')
@endsection

{{-- @section('breadcrumb-items')
<li class="breadcrumb-item">Apps</li>
<li class="breadcrumb-item">Users</li>
@endsection --}}

@section('breadcrumb-title')
<h3>Staff Cards</h3>
@endsection

@section('quick-tools')

   <div class="col-lg-6">
      <!-- Bookmark Start-->
      <div class="bookmark pull-right">
         <ul>
             <li>
               <a href="{{ route('add-staff')}}" data-container="body" data-toggle="popover" data-placement="top" title="" data-original-title="Add Staff">
                  <i data-feather="user-plus"></i>
               </a>
            </li>
            <li>
               <a href="#" data-container="body" data-toggle="popover" data-placement="top" title="" data-original-title="Tables">
                  <i data-feather="inbox"></i>
               </a>
            </li>
            <li>
               <a href="#" data-container="body" data-toggle="popover" data-placement="top" title="" data-original-title="Chat">
                  <i data-feather="message-square"></i>
               </a>
            </li>
            <li>
               <a href="#" data-container="body" data-toggle="popover" data-placement="top" title="" data-original-title="Learning">
                  <i data-feather="layers"></i>
               </a>
            </li>
            <li>
               <a href="#"><i class="bookmark-search" data-feather="star"></i></a>
                  <form class="form-inline search-form">
                     <div class="form-group form-control-search">
                           <input type="text" placeholder="Search..">
                     </div>
                  </form>
            </li>
         </ul>
      </div>
      <!-- Bookmark Ends-->
   </div>
@endsection
@section('content')
<div class="container-fluid">
   @include('flash_msg')
   <div class="row staff-card-holder">
      @foreach($staffs as $staff)
      <a href="{{route('profile', $staff->id)}}" class="staff-card-1">
         <div class="card staff-card-2">
            <div class="staff-img">
               <img class="img-thumbnail" src="{{asset('assets/images/uploads/'.$staff->photo_name)}}" alt="{{$staff->full_name}}">
            </div>
            <div class="text-center profile-details">
               <h4>{{$staff->full_name}}</h4>
               <h6>{{$staff->role}} - {{$staff->employment_type}}</h6>
            </div>
         </div>
      </a>
      @endforeach
   </div>
</div>
@endsection

@section('script')
@endsection
