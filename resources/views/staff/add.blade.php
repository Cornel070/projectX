@extends('layouts.simple.master')
@section('title', 'Add Staff')

@section('css')
@endsection

@section('style')
@endsection

{{-- @section('breadcrumb-items')
<li class="breadcrumb-item">Forms</li>
<li class="breadcrumb-item">Form Layout</li>
@endsection --}}

@section('breadcrumb-title')
<h3>Add staff</h3>
@endsection

@section('quick-tools')

@section('content')
<div class="container-fluid">
   <div class="row">
      <div class="col-sm-12">
         <div class="card">
            <div class="card-header">
               <h5>Staff registration form</h5>
            </div>
            <div class="card-body">
               <!-- Smart Wizard start-->
               <form id="staff-reg-form" method="post" enctype="multipart/form-data">
                  @csrf
                  <div class="wizard-4" id="wizard">
                     <ul>
                        <li><a href="#step-1">Step 1<small>Personnal Details</small></a></li>
                        <li><a href="#step-2">Step 2<small>Emergency Details</small></a></li>
                        <li><a href="#step-3">Step 3<small>Employment Details</small></a></li>
                        <li class="pb-0"><a href="#step-4">Step 4<small>Competences</small></a></li>
                     </ul>
                     <div id="step-1">
                        <div class="col-sm-12 pl-0">
                           <div class="form-group">
                              <label for="name">Full Name</label>
                              <input name="full_name" class="form-control{{ $errors->has('full_name') ? ' is-invalid' : '' }}" id="name" type="text" placeholder="Johan" value="{{old('full_name')}}" >
                              @if ($errors->has('full_name'))
                                 <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('full_name') }}</strong>
                                 </span>
                              @endif
                           </div>
                           <div class="form-group">
                              <label for="gender">Gender</label>
                              <select name="gender" class="form-control{{ $errors->has('gender') ? ' is-invalid' : '' }}" id="gender">
                                 <option>--Select gender--</option>
                                 <option value="Male" {{old('gender') === 'Male' ? 'selected':''}}>Male</option>
                                 <option value="Female" {{old('gender') === 'Female' ? 'selected':''}}>Female</option>
                                 <option value="Others" {{old('gender') === 'Others' ? 'selected':''}}>Others</option>
                              </select>
                              @if ($errors->has('gender'))
                                 <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('gender') }}</strong>
                                 </span>
                              @endif
                           </div>
                           <div class="form-group">
                              <label for="email">Email Address</label>
                              <input name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" type="email" placeholder="doe@example" value="{{old('email')}}">
                              @if ($errors->has('email'))
                                 <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                 </span>
                              @endif
                           </div>
                           <div class="form-group">
                              <label for="contact">Phone No.</label>
                              <input name="phone_no" class="form-control{{ $errors->has('phone_no') ? ' is-invalid' : '' }} digits" type="number" placeholder="+610889878" value="{{old('phone')}}">
                              @if ($errors->has('phone_no'))
                                 <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('phone_no') }}</strong>
                                 </span>
                              @endif
                           </div>
                           <div class="form-group">
                              <label for="contact">Home Address</label>
                              <input name="address" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" type="text" value="{{old('address')}}">
                              @if ($errors->has('address'))
                                 <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('address') }}</strong>
                                 </span>
                              @endif
                           </div>
                            <div class="form-group">
                              <label for="contact">Date of Birth</label>
                              <input name="dob" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" type="date" value="{{old('dob')}}">
                              @if ($errors->has('dob'))
                                 <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('dob') }}</strong>
                                 </span>
                              @endif
                           </div>
                           <div class="form-group">
                              <label for="Photo">Staff Photo</label>
                              <input name="photo_name" class="form-control{{ $errors->has('photo_name') ? ' is-invalid' : '' }}" type="file">
                              @if ($errors->has('photo_name'))
                                 <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('photo_name') }}</strong>
                                 </span>
                              @endif
                           </div>
                           <div class="form-group">
                              <label for="contact">Next of Kin</label>
                              <input name="next_of_kin" class="form-control{{ $errors->has('next_of_kin') ? ' is-invalid' : '' }}" type="text" value="{{old('next_of_kin')}}">
                              @if ($errors->has('next_of_kin'))
                                 <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('next_of_kin') }}</strong>
                                 </span>
                              @endif
                           </div>
                           <div class="form-group">
                              <label for="contact">Relationship with next of Kin</label>
                              <input name="rela_next_of_kin" class="form-control{{ $errors->has('rela_next_of_kin') ? ' is-invalid' : '' }}"
                              type="text" value="{{old('rela_next_of_kin')}}">
                              @if ($errors->has('rela_next_of_kin'))
                                 <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('rela_next_of_kin') }}</strong>
                                 </span>
                              @endif
                           </div>
                           <div class="form-group">
                              <label for="contact">Next of Kin Phone No.</label>
                              <input name="next_of_kin_phn" class="form-control{{ $errors->has('next_of_kin_phn') ? ' is-invalid' : '' }} digits" type="text" value="{{old('next_of_kin_phn')}}">
                              @if ($errors->has('next_of_kin_phn'))
                                 <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('next_of_kin_phn') }}</strong>
                                 </span>
                              @endif
                           </div>
                            <div class="form-group">
                              <label for="contact">Next of Kin Email</label>
                              <input name="next_of_kin_email" class="form-control{{ $errors->has('next_of_kin_email') ? ' is-invalid' : '' }}" type="text" value="{{old('next_of_kin_email')}}">
                              @if ($errors->has('next_of_kin_email'))
                                 <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('next_of_kin_email') }}</strong>
                                 </span>
                              @endif
                           </div>
                        </div>
                     </div>
                     <div id="step-2">
                        <div class="col-sm-12 pl-0">
                           <div class="form-group m-t-15">
                              <label class="d-block" for="chk-ani">
                              <input class="checkbox_animated" id="chk-ani" type="checkbox" name="same" {{old('same')==='on'?'checked':''}}>
                                 Same as Next of Kin
                              </label>
                           </div>
                           <div class="form-group">
                              <label for="contact">Emergency Name</label>
                              <input name="emergency_name" class="form-control{{ $errors->has('emergency_name') ? ' is-invalid' : '' }}" type="text" value="{{old('emergency_name')}}">
                              @if ($errors->has('emergency_name'))
                                 <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('emergency_name') }}</strong>
                                 </span>
                              @endif
                           </div>
                           <div class="form-group">
                              <label for="contact">Relationship</label>
                              <input name="emergency_rela" class="form-control{{ $errors->has('emergency_rela') ? ' is-invalid' : '' }}" type="text" placeholder="Wife, Father, Mother .." value="{{old('emergency_rela')}}">
                              @if ($errors->has('emergency_rela'))
                                 <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('emergency_rela') }}</strong>
                                 </span>
                              @endif
                           </div>
                           <div class="form-group">
                              <label for="contact">Emergency Phone No.</label>
                              <input name="emergency_phn" class="form-control{{ $errors->has('emergency_phn') ? ' is-invalid' : '' }} digits" type="text" placeholder="+610889878" value="{{old('emergency_phn')}}">
                              @if ($errors->has('emergency_phn'))
                                 <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('emergency_phn') }}</strong>
                                 </span>
                              @endif
                           </div>
                           <div class="form-group">
                              <label for="email">Emergency Email</label>
                              <input name="emergency_email" class="form-control{{ $errors->has('emergency_email') ? ' is-invalid' : '' }}" type="text" placeholder="doe@example" value="{{old('emergency_email')}}">
                              @if ($errors->has('emergency_email'))
                                 <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('emergency_email') }}</strong>
                                 </span>
                              @endif
                           </div>
                        </div>
                     </div>
                     <div id="step-3">
                        <div class="col-sm-12 pl-0">
                           <div class="form-group">
                              <label for="em_no">Employment No.</label>
                              <input name="id" class="form-control{{ $errors->has('id') ? ' is-invalid' : '' }} digits" type="text" value="{{old('id')}}">
                               @if ($errors->has('id'))
                                 <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('id') }}</strong>
                                 </span>
                              @endif
                           </div>
                           <div class="form-group">
                              <label class="control-label">Date of joining</label>
                              <input name="join_date" class="form-control{{ $errors->has('join_date') ? ' is-invalid' : '' }}" type="date" value="{{old('join_date')}}">
                               @if ($errors->has('join_date'))
                                 <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('join_date') }}</strong>
                                 </span>
                              @endif
                           </div>
                           <div class="form-group">
                              <label for="status">Employee Status</label>
                              <select name="employment_type" class="form-control{{ $errors->has('employment_type') ? ' is-invalid' : '' }}" id="employment_type">
                                 <option>--Select status--</option>
                                 <option value="Full Time" {{old('employment_type') === 'Full Time' ? 'selected':''}}>Full Time</option>
                                 <option value="Permanent Part Time" {{old('employment_type') === 'Permanent Part Time' ? 'selected':''}}>Permanent Part Time</option>
                                 <option value="Casual" {{old('employment_type') === 'Casual' ? 'selected':''}}>Casual</option>
                              </select>
                           </div>
                            <div class="form-group">
                              <label for="status">Role</label>
                              <select name="role" class="form-control{{ $errors->has('role') ? ' is-invalid' : '' }}" id="role">
                                 <option>--Select role--</option>
                                 <option value="Super Admin" {{old('role') === 'super_admin' ? 'selected':''}}>Admin</option>
                                 <option value="Human Resource" {{old('role') === 'Human Resource' ? 'selected':''}}>Human Resource</option>
                                 <option value="Finance" {{old('role') === 'Finance' ? 'selected':''}}>Finance</option>
                                 <option value="House Manager" {{old('role') === 'House Manager' ? 'selected':''}}>House Manager</option>
                                 <option value="Caregiver" {{old('role') === 'Caregiver' ? 'selected':''}}>Caregiver</option>
                              </select>
                           </div>
                        </div>
                     </div>
                     <div id="step-4">
                        <div class="col-sm-12 pl-0" id="comp-area">
                           <div class="form-group">
                              <div class="col-sm-12">
                                 <div class="row">
                                    <div class="col-md-4">
                                       <label class="control-label">Title</label>
                                       <input name="comp_name[]" class="form-control" type="text" value="First Aid Certificate" readonly="">
                                    </div>
                                    <div class="col-md-4">
                                       <label class="control-label{{ $errors->has('comp_doc') ? ' is-invalid' : '' }}">File Upload</label>
                                       <input name="comp_doc[]" class="form-control" type="file" required="" accept="image/*">
                                       @if ($errors->has('comp_doc'))
                                          <span class="invalid-feedback" role="alert">
                                             <strong>{{ $errors->first('comp_doc') }}</strong>
                                          </span>
                                       @endif
                                    </div>
                                    <div class="col-md-4">
                                       <label class="control-label">Expiry Date</label>
                                       <input type="date" name="exp_date[]" class="form-control" required="">
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="form-group">
                              <div class="col-sm-12">
                                 <div class="row">
                                    <div class="col-md-4">
                                       <label class="control-label">Name</label>
                                       <input name="comp_name[]" class="form-control" type="text" value="Working with Children" readonly="">
                                    </div>
                                    <div class="col-md-4">
                                       <label class="control-label{{ $errors->has('comp_doc') ? ' is-invalid' : '' }}">File Upload</label>
                                       <input name="comp_doc[]" class="form-control" type="file" required="" accept="image/*">
                                       @if ($errors->has('comp_doc'))
                                          <span class="invalid-feedback" role="alert">
                                             <strong>{{ $errors->first('comp_doc') }}</strong>
                                          </span>
                                       @endif
                                    </div>
                                    <div class="col-md-4">
                                       <label class="control-label">Expiry Date</label>
                                       <input type="date" name="exp_date[]" class="form-control" required="">
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="form-group">
                              <div class="col-sm-12">
                                 <div class="row">
                                    <div class="col-md-4">
                                       <label class="control-label">Name</label>
                                       <input name="comp_name[]" class="form-control" type="text" value="Police Clearance" readonly="">
                                    </div>
                                    <div class="col-md-4">
                                       <label class="control-label">File Upload</label>
                                       <input name="comp_doc[]" class="form-control" type="file" required="" accept="image/*">
                                    </div>
                                    <div class="col-md-4">
                                       <label class="control-label">Expiry Date</label>
                                       <input type="date" name="exp_date[]" class="form-control">
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="form-group">
                              <div class="col-sm-12">
                                 <div class="row">
                                    <div class="col-md-4">
                                       <label class="control-label">Name</label>
                                       <input name="comp_name[]" class="form-control" type="text" value="Driver's License" readonly="">
                                    </div>
                                    <div class="col-md-4">
                                       <label class="control-label">File Upload</label>
                                       <input name="comp_doc[]" class="form-control" type="file" required="" accept="image/*">
                                    </div>
                                    <div class="col-md-4">
                                       <label class="control-label">Expiry Date</label>
                                       <input type="date" name="exp_date[]" class="form-control">
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div>
                              <button type="button" class="btn btn-pill btn-light" id="more-competences">
                                 <i class="fa fa-plus-circle"></i> Add more
                              </button>
                           </div>
                        </div>
                     </div>
                  </div>
               </form>
               <!-- Smart Wizard Ends-->
            </div>
         </div>
      </div>
   </div>
</div>
@endsection

@section('script')
<script src="{{asset('assets/js/form-wizard/form-wizard-five.js')}}"></script>
@endsection
