@extends('layouts.simple.master')
@section('title', 'User Profile')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/photoswipe.css')}}">
@endsection

@section('style')
@endsection

{{-- @section('breadcrumb-items')
<li class="breadcrumb-item">Apps</li>
<li class="breadcrumb-item">Users</li>
@endsection --}}

{{-- @section('breadcrumb-title')
<h3>Staff Profile</h3>
@endsection

@section('quick-tools') --}}

@section('content')
<div class="container-fluid">
   <div class="user-profile">
      <div class="row">
         <div class="col-md-9">
            <div class="col-xl-6 xl-100 col-lg-12 box-col-12">
               <div class="card">
                  <div class="card-header">
                     {{-- <h5 class="pull-left">Material tab with color</h5> --}}
                  </div>
                  <div class="card-body">
                     <div class="tabbed-card">
                        <ul class="pull-right nav nav-tabs border-tab nav-secondary" id="top-tabsecondary" role="tablist">
                           <li class="nav-item">
                              <a class="nav-link active" id="top-home-secondary" data-toggle="tab" href="#top-homesecondary" role="tab" aria-controls="top-home" aria-selected="false"><i class="icofont icofont-user"></i>Profile</a>
                              <div class="material-border"></div>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link " id="profile-top-secondary" data-toggle="tab" href="#top-profilesecondary" role="tab" aria-controls="top-profilesecondary" aria-selected="true"><i class="icofont icofont-chart-line"></i>Staff Stats </a>
                              <div class="material-border"></div>
                           </li>
                        </ul>
                        <div class="tab-content" id="top-tabContentsecondary">
                           <div class="tab-pane fade active show" id="top-homesecondary" role="tabpanel" aria-labelledby="top-home-tab">
                              <div class="staff-profile-cont">
                                 <div class="staff-profile-img">
                                    <div>
                                       <img src="{{asset('assets/images/uploads/'.$staff->photo_name)}}" alt="{{$staff->full_name}}">
                                       <div class="staff-status on-duty"></div>
                                    </div>
                                    <div class="user-indicators">
                                       <button type="button" class="btn btn-pill btn-danger btn-air-danger btn-xs">
                                          <i class="icofont icofont-ui-delete"></i> Delete Info
                                       </button>
                                       <button type="button" class="btn btn-pill btn-secondary btn-air-secondary btn-xs">
                                          <i class="icofont icofont-ui-edit"></i> Edit Info 
                                       </button>
                                    </div>
                                 </div>
                                 <div class="staff-profile-info">
                                    <h4 class="staff-name">{{$staff->full_name}}</h4>
                                    <h6 class="staff-role">{{$staff->role}}</h6>
                                    <div class="other-details">
                                          <span class="icofont icofont-ui-touch-phone"></span> {{$staff->phone_no}}<br/>
                                          <span class="icofont icofont-ui-email"></span> {{$staff->email}}<br/>
                                          <span  class="icofont icofont-birthday-cake"></span> 
                                          {{Carbon\Carbon::parse($staff->dob)->format('l jS \of F Y') }} ({{age($staff->dob)}} years)
                                          <br/>
                                          <span class="icofont icofont-location-arrow"></span> {{$staff->address}}
                                    </div>
                                    <hr>
                                    <div class="staff-stat">
                                       <div class="stat">
                                          <span>Stat 1</span>
                                          <h5>250</h5>
                                       </div>
                                       <div class="stat">
                                          <span>Stat 1</span>
                                          <h5>480</h5>
                                       </div>
                                       <div class="stat">
                                          <span>Stat 1</span>
                                          <h5>180</h5>
                                       </div>
                                       <div class="stat">
                                          <span>Stat 1</span>
                                          <h5>110</h5>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              {{-- STAFF OTHER DETAILS --}}

                              {{-- Next of Kin --}}
                              <div class="staff-contact-cont">
                                 <div class="card contact-card">
                                    <div class="card-header b-t-secondary">
                                      <h5><i class="icofont icofont-user"></i> Next of Kin</h5>
                                    </div>
                                    <div class="card-body">
                                       <div class="cont-details">
                                          <div><span>Name: </span> {{$staff->next_of_kin}}</div><br/>
                                          <div><span>Phone: </span> {{$staff->next_of_kin_phn}}</div><br/>
                                          <div><span>Email: </span> {{$staff->next_of_kin_email}}</div><br/>
                                          <div><span>Relationship: </span> {{$staff->rela_next_of_kin}}</div>
                                       </div>
                                    </div>
                                 </div>
                                 {{-- Emergency Contact --}}
                                 <div class="card contact-card">
                                    <div class="card-header b-t-secondary">
                                      <h5><i class="icofont icofont-address-book"></i> Emergency Contact</h5>
                                    </div>
                                    <div class="card-body">
                                       <div class="cont-details">
                                          <div><span>Name:</span> {{$staff->emergency_name}}</div><br/>
                                          <div><span>Phone:</span> {{$staff->emergency_phn}}</div><br/>
                                          <div><span>Email:</span> {{$staff->emergency_email}}</div><br/>
                                          <div><span>Relationship:</span> {{$staff->emergency_rela}}</div>
                                       </div>
                                    </div>
                                 </div>

                                 {{-- Employment Details --}}
                                 <div class="card contact-card">
                                    <div class="card-header b-t-secondary">
                                      <h5><i class="icofont icofont-id-card"></i> Employment Details</h5>
                                    </div>
                                    <div class="card-body">
                                       <div class="cont-details">
                                          <div><span>Staff ID: </span> {{$staff->id}}</div><br/>
                                          <div><span>Role: </span> {{$staff->role}}</div><br/>
                                          <div><span>Employment status:</span> {{$staff->employment_type}}</div><br/>
                                          <div><span>Joined: </span> {{Carbon\Carbon::parse($staff->join_date)->format('l jS \of F Y') }}</div><br/>
                                       </div>
                                    </div>
                                 </div>

                                  {{-- Competences --}}
                                 <div class="card contact-card">
                                    <div class="card-header b-t-secondary">
                                      <h5><i class="icofont icofont-certificate-alt-1"></i> Competences</h5>
                                    </div>
                                    <div class="card-body">
                                       <div class="comp-details">
                                          @foreach($staff->competences as $comp)
                                             <div class="shadow shadow-showcase p-25 text-center comp-box" id="competence-tab" data-toggle="tooltip" title="Click to view document" data-img="{{asset('/assets/images/uploads/comp_docs/'.$comp->comp_doc)}}">
                                                <h5 class="m-0 f-18">
                                                   {!! competenceIcon($comp->comp_name) !!}
                                                   <div class="comp-name">
                                                      {{$comp->comp_name}}<br/>
                                                   </div>
                                                   <div class="exp_date">
                                                      Exp: {{Carbon\Carbon::parse($comp->exp_date)->format('l jS \of F Y') }}
                                                   </div>
                                                </h5>
                                             </div>
                                          @endforeach
                                          <div class="shadow shadow-showcase p-25 text-center add-more comp-box" id="add-competence">
                                             <h5 class="m-0 f-18"><i class="icofont icofont-plus-circle"></i></h5>
                                             <div class="exp_date">
                                                Add competence
                                             </div>
                                          </div>
                                          {{-- Add competence form --}}
                                          <div class="shadow shadow-showcase p-25 text-center add-more add-comp-form hide">
                                             <form id="competence-form" enctype="multipart/form-data" method="post">
                                                @csrf
                                                <div class="form-group">
                                                   <div class="col-sm-12">
                                                      <div class="row">
                                                         <div class="col-md-4">
                                                            <label class="control-label">Title</label>
                                                            <input name="comp_name" class="form-control" type="text">
                                                            <small class="error hide" id="title-error">Enter title</small>
                                                         </div>
                                                         <div class="col-md-4">
                                                            <label class="control-label">File Upload</label>
                                                            <input name="comp_doc" class="form-control" type="file" accept="image/*">
                                                            <small class="error hide" id="doc-error">Upload document</small>
                                                         </div>
                                                         <div class="col-md-4">
                                                            <label class="control-label">Expiry Date</label>
                                                            <input type="date" name="exp_date" class="form-control">
                                                            <small class="error hide" id="exp-error">Enter expiry date</small>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <input type="hidden" name="staffID" value="{{$staff->id}}">
                                                <div class="form-group">
                                                   <button class="btn btn-secondary btn-sm" id="save-comp"> Save</button>
                                                   <button class="btn btn-secondary btn-sm loader-ico hide" disabled>
                                                      <i class="fa fa-spin fa-spinner"></i> Saving..</button>
                                                </div>
                                             </form>
                                             <a class="close-comp-form" id="close-comp-ico"><i class="fa fa-times-circle"></i></a>
                                          </div>
                                          {{-- Form ends --}}
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              {{-- OTHER DETAILS ENDS --}}
                           </div>
                           <div class="tab-pane fade" id="top-profilesecondary" role="tabpanel" aria-labelledby="profile-top-tab">
                              <div class="competences-cont">
                                <h1>STAFF PERFORMANCE STATISTICS AREA...</h1>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         {{-- Users display sidebar --}}
         <div class="col-md-3 staff-pane scrollable">
            <div class="card-header">
               <form class="search-form">
                  <div class="form-group m-0">
                     <label class="sr-only">Email</label>
                     <input class="form-control-plaintext" id="search-staff" type="search" placeholder="Search..">
                  </div>
               </form>
            </div>
          @foreach( getStaff() as $staff)
                  <a href="{{route('profile', $staff->id)}}" class="staff-aside">
                     {{-- <img class="" src="{{asset('assets/images/uploads/'.$staff->photo_name)}}" alt="{{$staff->full_name}}"> --}}
                     <div>
                        <img src="{{asset('assets/images/uploads/'.$staff->photo_name)}}" alt="{{$staff->full_name}}">
                        <div class="staff-status-sm on-duty"></div>
                     </div>
                     <div class="staff-text">
                        <h5>{{$staff->full_name}}</h5>
                        <p>{{$staff->role}}</p>
                     </div>
                  </a>
            @endforeach
         </div>
         
         <!-- user profile fifth-style end-->
         <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="pswp__bg"></div>
            <div class="pswp__scroll-wrap">
               <div class="pswp__container">
                  <div class="pswp__item"></div>
                  <div class="pswp__item"></div>
                  <div class="pswp__item"></div>
               </div>
               <div class="pswp__ui pswp__ui--hidden">
                  <div class="pswp__top-bar">
                     <div class="pswp__counter"></div>
                     <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                     <button class="pswp__button pswp__button--share" title="Share"></button>
                     <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                     <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                     <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                           <div class="pswp__preloader__cut">
                              <div class="pswp__preloader__donut"></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                     <div class="pswp__share-tooltip"></div>
                  </div>
                  <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
                  <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
                  <div class="pswp__caption">
                     <div class="pswp__caption__center"></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
                    <!-- Modal-->
                    <div class="modal fade" id="comp_modal" tabindex="-1" role="dialog">
                      <div class="modal-dialog" role="document">
                        <div>
                          <button class="close theme-close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                          <div class="modal-body">
                            <div class="card">
                              <div class="animate-widget">
                                <div><img class="img-fluid img-thumbnail" src="" alt="" id="comp-document"></div>
                                <div class="text-center p-25">
                                  <p class="text-muted mb-0">Denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
@endsection

@section('script')
<script src="{{asset('assets/js/counter/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('assets/js/photoswipe/photoswipe-ui-default.min.js')}}"></script>
@endsection