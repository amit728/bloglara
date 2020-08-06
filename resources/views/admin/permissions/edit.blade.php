@extends('admin.layouts.app')

@section('main-content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Permission</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Edit Permission</li>
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
            <form role="form" action="{{route('permission.update',$permission->id)}}" method="POST">
              @csrf
              @method('PUT')
              	<div class="row">
                  <div class="form-group col-sm-6">
                    <label for="name">Permission Name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Enter Role Name" value="{{$permission->name}}">
                  </div>
                  <div class="form-group col-sm-6">
                    <label for="name">Permission For</label>
                    <select class="form-control" name="for">
                      <option value="post">Post</option>
                      <option value="user">User</option>
                      <option value="other">Other</option>
                    </select>
                  </div>
                </div>
                <div class="">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a href="{{route('permission.index')}}" class="btn btn-warning">Back</a>
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