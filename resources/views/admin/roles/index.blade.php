@extends('admin.layouts.app')

@section('main-content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Roles</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Roles</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
     
      <!-- Default box -->
      <div class="card">
        <div class="card-body">
        <div class="float-right"> 
          <a class="btn btn-sm btn-success" href="{{route('role.create')}}">Create Role</a>     
        </div>
          <table id="example1" class="table table-bordered table-striped">
              <thead>
                  <tr>
                      <th width="25px">#</th>
                      <th>Role Name</th>
                      <th>Action</th>
                  </tr>
              </thead>
              <tbody>
                  @php $count = 1; @endphp
                  @foreach($roles as $role)
                  <tr>
                      <td>{{$count++}}</td>
                      <td>{{$role->name}}</td>
                      <td>
                        <a class="btn btn-sm btn-warning" href="{{route('role.edit', $role->id)}}"><i class="fa fa-edit"></i></a>

                        <form id="delete-form-{{$role->id}}" action="{{route('role.destroy', $role->id)}}" method="post" style="display: none">
                          @csrf
                          @method('DELETE')
                        </form>
                        <a class="btn btn-sm btn-danger" href="" 
                          onclick="
                            if(confirm('Are you sure, You want to delete?')){
                              event.preventDefault();
                              document.getElementById('delete-form-{{$role->id}}').submit();
                            }else{
                              event.preventDefault();
                            }">
                          <i class="fa fa-trash"></i>
                        </a>
                      </td>
                  </tr>
                  @endforeach
              </tbody>
              <tfoot>
                  <tr>
                      <th>#</th>
                      <th>Role Name</th>
                      <th>Action</th>
                  </tr>
              </tfoot>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection