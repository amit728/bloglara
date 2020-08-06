@extends('admin.layouts.app')

@section('main-content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Categories</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Categories</li>
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
          @include('includes.messages')
          <div class="float-right"> 
            <a class="btn btn-sm btn-success" href="{{route('category.create')}}">Add Category</a>     
          </div>
          <table id="example1" class="table table-bordered table-striped">
              <thead>
                  <tr>
                      <th width="20px">#</th>
                      <th>Name</th>
                      <th>Slug</th>
                      <th>Action</th>
                  </tr>
              </thead>
              <tbody>
                  @php $count = 1; @endphp
                  @foreach($categories as $category)
                  <tr>
                      <td>{{$count++}}</td>
                      <td>{{$category->name}}</td>
                      <td>{{$category->slug}}</td>
                      <td>
                        <a class="btn btn-sm btn-warning" href="{{route('category.edit', $category->id)}}"><i class="fa fa-edit"></i></a>
                        <a class="btn btn-sm btn-danger" href="" 
                          onclick="
                            if(confirm('Are you sure, You want to delete?')){
                              event.preventDefault();
                              document.getElementById('delete-form-{{$category->id}}').submit();
                            }else{
                              event.preventDefault();
                            }">
                          <i class="fa fa-trash"></i>
                        </a>
                        <form id="delete-form-{{$category->id}}" action="{{route('category.destroy', $category->id)}}" method="post" style="display: none">
                          @csrf
                          @method('DELETE')
                        </form>
                      </td>
                  </tr>
                  @endforeach
              </tbody>
              <tfoot>
                  <tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>Slug</th>
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