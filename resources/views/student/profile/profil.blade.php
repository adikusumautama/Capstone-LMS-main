@extends('layouts.backend.my')
@section('content')
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
            <div class="panel-title">
              <a href="{{ route('std.profile') }}" class="btn btn-success btn-sm"><i class="icon wb-plus" aria-hidden="true"></i> Add User</a>
            </div>
          
          <div class="panel-actions">
          <form method="GET" action="{{ route('std.profile') }}">
              <div class="input-group">
                <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ Request::input('search') }}">
                <span class="input-group-btn">
                  <button type="submit" class="btn btn-primary" data-toggle="tooltip" data-original-title="Search"><i class="icon wb-search" aria-hidden="true"></i></button>
                  <a href="{{ route('admin.users') }}" class="btn btn-danger" data-toggle="tooltip" data-original-title="Clear Search"><i class="icon wb-close" aria-hidden="true"></i></a>
                </span>
              </div>
          </form>
          </div>
        </div>
        
        <div class="panel-body">
          <table class="table table-hover table-striped w-full">
            <thead>
              <tr>
                <th>Sl.no</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email ID</th>
                <th>Roles</th>
                <!-- <th>Status</th> -->
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              {{-- @foreach($users as $user) --}}
              <tr>
                <td>{{ Auth::user()->id }}</td>
                <td>{{ Auth::user()->first_name }}</td>
                <td>{{ Auth::user()->last_name }}</td>
                <td>{{ Auth::user()->email }}</td>
                <td>
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
                </td> 
                <!-- <td>
                  {{-- @if($user->is_active) --}}
                  <span class="badge badge-success">Active</span>
                  {{-- @else --}}
                  <span class="badge badge-danger">Inactive</span>
                  {{-- @endif --}}
                </td> -->
                <td>
                  <a href="{{ url('admin/user-form/'.Auth::user()->id) }}" class="btn btn-xs btn-icon btn-inverse btn-round" data-toggle="tooltip" data-original-title="Edit">
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
      </div>
      <!-- End Panel Basic -->
</div>

@endsection

@section('javascript')
<script type="text/javascript">
    $(document).ready(function()
    { 
        
    });
</script>
@endsection