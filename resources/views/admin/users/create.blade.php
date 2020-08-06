@extends('admin.layouts.app')

@section('main-content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Create User</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Create User</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        
        @include('includes.messages')
        
        <div class="card-body">         
            <form role="form" action="{{route('user.store')}}" method="POST">
              @csrf
                <div class="row">
                  <div class="form-group col-sm-6">
                    <label for="name">User Name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Enter User Name" value="{{old('name')}}">
                  </div>
                  <div class="form-group col-sm-6">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Enter Email" value="{{old('email')}}">
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-sm-6">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Enter Password" value="{{old('password')}}">
                  </div>
                  <div class="form-group col-sm-6">
                    <label for="password_confirmation">Confirm Password</label>
                    <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Confirm Password">
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-sm-6">
                    <label for="slug">Phone</label>
                    <input type="text" name="phone" class="form-control" id="phone" placeholder="Enter Phone" value="{{old('phone')}}">
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-sm-6">
                    <label for="role">Assign Roles</label>
                    @foreach($roles as $role)
                      <div class="">
                        <input class="" type="checkbox" name="role[]" id="{{$role->id}}" value="{{$role->id}}">
                        <label for="{{$role->id}}" class="">{{$role->name}}</label>
                      </div>
                    @endforeach
                  </div>
                  <div class="form-group col-sm-6">
                    <input class="" type="checkbox" name="status" id="status" value="1"
                    @if(old('status') == 1) checked @endif>
                    <label for="status" class="">Status</label>
                    </div>
                </div>
                <div class="">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a href="{{route('user.index')}}" class="btn btn-warning">Back</a>
                </div>
            </form>
        </div>
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection