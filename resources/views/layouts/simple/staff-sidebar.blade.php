<div class="col-md-3 staff-pane scroll-content">
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
                <img src="{{asset('public/assets/images/uploads/'.$staff->photo_name)}}" alt="{{$staff->full_name}}">
                <div class="staff-status-sm on-duty"></div>
             </div>
             <div class="staff-text">
                <h5>{{$staff->full_name}}</h5>
                <p>{{$staff->role}}</p>
             </div>
          </a>
 @endforeach
</div>