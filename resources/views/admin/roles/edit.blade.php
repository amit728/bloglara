@extends('admin.layouts.app')

@section('main-content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Role</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Edit Role</li>
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
            <form role="form" action="{{route('role.update',$role->id)}}" method="POST">
              @csrf
              @method('PUT')
              	<div class="row">
                  <div class="form-group col-sm-6">
                    <label for="name">Role Name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Enter Role Name" value="{{$role->name}}">
                  </div>
              	</div>
                <div class="row">
                  <div class="form-group col-lg-2 col-sm-12">
                    <label for="role">Posts Permission</label>
                    <div class="form-group">
                      @foreach($permissions as $permission)
                        @if($permission->for == 'post')
                          <div class="form-check">
                            <input class="form-check-input" name="permission[]"  id="{{$permission->id}}" type="checkbox" value="{{$permission->id}}"
                            @foreach($role->permissions as $role_permission)
                              @if($role_permission->id == $permission->id)
                                checked
                              @endif
                            @endforeach>
                            <label class="form-check-label" for="{{$permission->id}}">{{$permission->name}}</label>
                          </div>
                        @endif
                      @endforeach
                    </div>
                  </div>
                  <div class="form-group col-lg-2 col-sm-12">
                    <label for="name">User Permission</label>
                    <div class="form-group">
                      @foreach($permissions as $permission)
                        @if($permission->for == 'user')
                          <div class="form-check">
                            <input class="form-check-input" name="permission[]"  id="{{$permission->id}}" type="checkbox" value="{{$permission->id}}"
                            @foreach($role->permissions as $role_permission)
                              @if($role_permission->id == $permission->id)
                                checked
                              @endif
                            @endforeach>
                            <label class="form-check-label" for="{{$permission->id}}">{{$permission->name}}</label>
                          </div>
                        @endif
                      @endforeach
                    </div>
                  </div>
                  <div class="form-group col-lg-2 col-sm-12">
                    <label for="name">Other Permission</label>
                    <div class="form-group">
                      @foreach($permissions as $permission)
                        @if($permission->for == 'other')
                          <div class="form-check">
                            <input class="form-check-input" name="permission[]"  id="{{$permission->id}}" type="checkbox" value="{{$permission->id}}" 
                            @foreach($role->permissions as $role_permission)
                              @if($role_permission->id == $permission->id)
                                checked
                              @endif
                            @endforeach
                            >
                            <label class="form-check-label" for="{{$permission->id}}">{{$permission->name}}</label>
                          </div>
                        @endif
                      @endforeach
                    </div>
                  </div>
                </div>
                <div class="">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a href="{{route('role.index')}}" class="btn btn-warning">Back</a>
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