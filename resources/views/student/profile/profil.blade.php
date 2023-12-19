@extends('layouts.backend.my')
@section('content')
<style>
  .padding {
    padding: 3rem !important
}

.user-card-full {
    overflow: hidden;
}

.card {
    border-radius: 5px;
    -webkit-box-shadow: 0 1px 20px 0 rgba(69,90,100,0.08);
    box-shadow: 0 1px 20px 0 rgba(69,90,100,0.08);
    border: none;
    margin-bottom: 30px;
}

.m-r-0 {
    margin-right: 0px;
}

.m-l-0 {
    margin-left: 0px;
}

.user-card-full .user-profile {
    border-radius: 5px 0 0 5px;
}

.bg-c-lite-green {
        background: -webkit-gradient(linear, left top, right top, from(#f29263), to(#ee5a6f));
    background: linear-gradient(to right, #ee5a6f, #f29263);
}

.user-profile {
    padding: 20px 0;
}

.card-block {
    padding: 1.25rem;
}

.m-b-25 {
    margin-bottom: 25px;
}

.img-radius {
    border-radius: 5px;
}


 
h6 {
    font-size: 14px;
}

.card .card-block p {
    line-height: 25px;
}

@media only screen and (min-width: 1400px){
p {
    font-size: 14px;
}
}

.card-block {
    padding: 1.25rem;
}

.b-b-default {
    border-bottom: 1px solid #e0e0e0;
}

.m-b-20 {
    margin-bottom: 20px;
}

.p-b-5 {
    padding-bottom: 5px !important;
}

.card .card-block p {
    line-height: 25px;
}

.m-b-10 {
    margin-bottom: 10px;
}

.text-muted {
    color: #919aa3 !important;
}

.b-b-default {
    border-bottom: 1px solid #e0e0e0;
}

.f-w-600 {
    font-weight: 600;
}

.m-b-20 {
    margin-bottom: 20px;
}

.m-t-40 {
    margin-top: 20px;
}

.p-b-5 {
    padding-bottom: 5px !important;
}

.m-b-10 {
    margin-bottom: 10px;
}

.m-t-40 {
    margin-top: 20px;
}

.user-card-full .social-link li {
    display: inline-block;
}

.user-card-full .social-link li a {
    font-size: 20px;
    margin: 0 10px 0 0;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}
</style>
<div class="page-header">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('student.dashboard') }}">Dashboard</a></li>
    <li class="breadcrumb-item active">Users Management</li>
  </ol>
  <h1 class="page-title">Users Management</h1>
</div>

<div class="page-content">

<div class="panel">
        <div class="panel-heading">
            <!-- <div class="panel-title">
              <a href="{{ route('std.profile') }}" class="btn btn-success btn-sm"><i class="icon wb-plus" aria-hidden="true"></i> Add User</a>
            </div> -->
          
          <div class="panel-actions">
          <!-- <form method="GET" action="{{ route('std.profile') }}">
              <div class="input-group">
                <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ Request::input('search') }}">
                <span class="input-group-btn">
                  <button type="submit" class="btn btn-primary" data-toggle="tooltip" data-original-title="Search"><i class="icon wb-search" aria-hidden="true"></i></button>
                  <a href="{{ route('admin.users') }}" class="btn btn-danger" data-toggle="tooltip" data-original-title="Clear Search"><i class="icon wb-close" aria-hidden="true"></i></a>
                </span>
              </div>
          </form> -->
          </div>
        </div>
        
        <!-- <div class="panel-body">
          <table class="table table-hover table-striped w-full">
            <thead>
              <tr> -->
                <!-- <th>Sl.no</th> -->
                <!-- <th>First Name</th>
                <th>Last Name</th>
                <th>Email ID</th> -->
                <!-- <th>Roles</th> -->
                <!-- <th>Status</th> -->
                <!-- <th>Action</th>
              </tr>
            </thead>
            <tbody> -->
              <!-- {{-- @foreach($users as $user) --}} -->
              <!-- <tr> -->
                <!-- <td>{{ Auth::user()->id }}</td> -->
                <!-- <td>{{ Auth::user()->first_name }}</td>
                <td>{{ Auth::user()->last_name }}</td>
                <td>{{ Auth::user()->email }}</td> -->
                <!-- <td>
                  {{-- @foreach(Auth::user()->roles as $role) --}}
                    @if(Auth::user()->name == 'student')
                        <span class="badge badge-primary">{{ ucfirst(Auth::user()->name) }}</span>
                    @elseif(Auth::user()->name == 'instructor')
                        <span class="badge badge-warning">{{ ucfirst(Auth::user()->name) }}</span>
                    @endif
                    {{-- @if(!$loop->last)
                    <br>
                    @endif --}}
                  {{-- @endforeach --}}
                </td>  -->
                <!-- <td>
                  {{-- @if($user->is_active) --}}
                  <span class="badge badge-success">Active</span>
                  {{-- @else --}}
                  <span class="badge badge-danger">Inactive</span>
                  {{-- @endif --}}
                </td> -->
                <!-- <td>
                  <a href="{{ url('student/user-form/'.Auth::user()->id) }}" class="btn btn-xs btn-icon btn-inverse btn-round" data-toggle="tooltip" data-original-title="Edit">
                    <i class="icon wb-pencil" aria-hidden="true"></i>
                  </a>
                </td>
              </tr>
              {{-- @endforeach --}}
            </tbody>
          </table>
          
          {{-- <div class="float-right">
            {{ Auth::user()->appends(['search' => Request::input('search')])->links() }}
          </div> --}}
          
          
        </div>
      </div> -->
      <!-- End Panel Basic -->
</div>
<div class="page-content page-container" id="page-content">
  <div class="padding">
    <div class="row container d-flex justify-content-center">
      <div class="col-xl-6 col-md-12">
        <div class="card user-card-full">
          <div class="row m-l-0 m-r-0">
            <div class="col-sm-4 bg-c-lite-green user-profile">
              <div class="card-block text-center text-white">
                <div class="m-b-25">
                  <img src="https://img.icons8.com/bubbles/100/000000/user.png" class="img-radius"
                    alt="User-Profile-Image">
                </div>
                <h6 class="f-w-600">Student in <br> <b>Universe Learning</b></h6>
                <a href="{{ url('student/user-form/'.Auth::user()->id) }}" class="btn btn-xs btn-icon btn-inverse btn-round mt-1" data-toggle="tooltip" data-original-title="Edit">
                    <i class="icon wb-pencil" aria-hidden="true"></i>
                </a>
              </div>
            </div>
            <div class="col-sm-8">
              <div class="card-block">
                <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information</h6>
                <div class="row">
                  <div class="col-sm-6">
                    <p class="m-b-10 f-w-600">First Name</p>
                    <h6 class="text-muted f-w-400">{{ Auth::user()->first_name }}</h6>
                  </div>
                  <div class="col-sm-6">
                    <p class="m-b-10 f-w-600">Last Name</p>
                    <h6 class="text-muted f-w-400">{{ Auth::user()->last_name }}</h6>
                  </div>
                  <div class="col-sm-6 mt-4">
                    <p class="m-b-10 f-w-600">Email</p>
                    <h6 class="text-muted f-w-400">{{ Auth::user()->email }}</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection

@section('javascript')
<script type="text/javascript">
    $(document).ready(function()
    { 
        
    });
</script>
@endsection