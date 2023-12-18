@extends('layouts.backend.index')
@section('content')
<div class="page-header">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
    <li class="breadcrumb-item active">Profile</li>
  </ol>
  <h1 class="page-title">Profile User</h1>
</div>

<div class="page-content">

<div class="panel">
        
        <div class="panel-body">
          <table class="table table-hover table-striped w-full">
            <thead>
              <tr>
                <!-- <th>Sl.no</th> -->
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email ID</th>
                <!-- <th>Roles</th> -->
                <!-- <th>Status</th> -->
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              
              <tr>
                <!-- <td>{{ Auth::user()->id }}</td> -->
                <td>{{ Auth::user()->first_name }}</td>
                <td>{{ Auth::user()->last_name }}</td>
                <td>{{ Auth::user()->email }}</td>
               
              
                <td>
                  <a href="{{ url('student/user-form/'.Auth::user()->id) }}" class="btn btn-xs btn-icon btn-inverse btn-round" data-toggle="tooltip" data-original-title="Edit">
                    <i class="icon wb-pencil" aria-hidden="true"></i>
                  </a>
                </td>
              </tr>
              
            </tbody>
          </table>
          
          <div class="float-right">
            {{ $users->appends(['search' => Request::input('search')])->links() }}
          </div>
          
          
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