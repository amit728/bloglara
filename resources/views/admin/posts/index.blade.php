@extends('admin.layouts.app')

@section('main-content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Posts</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Posts</li>
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
          <a class="btn btn-sm btn-success" href="{{route('post.create')}}">Add Post</a>     
        </div>
          <table id="example1" class="table table-bordered table-striped">
              <thead>
                  <tr>
                      <th width="20px">#</th>
                      <th>Post Title</th>
                      <th>Sub Title</th>
                      <th>Slug</th>
                      <th>Tags</th>
                      <th>Image</th>
                      <th>Action</th>
                  </tr>
              </thead>
              <tbody>
                  @php $count = 1; @endphp
                  @foreach($posts as $post)
                  <tr>
                      <td>{{$count++}}</td>
                      <td>{{$post->title}}</td>
                      <td>{{$post->subtitle}}</td>
                      <td>{{$post->slug}}</td>
                      <td>@foreach($post->tags as $postTag)
                              {{$postTag->name}},
                          @endforeach
                      </td>
                      <th>{{Storage::disk('local')->url($post->image)}}</th>
                      <td>
                        <a class="btn btn-sm btn-warning" href="{{route('post.edit', $post->id)}}"><i class="fa fa-edit"></i></a>
                        <a class="btn btn-sm btn-danger" href="" 
                          onclick="
                            if(confirm('Are you sure, You want to delete?')){
                              event.preventDefault();
                              document.getElementById('delete-form-{{$post->id}}').submit();
                            }else{
                              event.preventDefault();
                            }">
                          <i class="fa fa-trash"></i>
                        </a>
                        <form id="delete-form-{{$post->id}}" action="{{route('post.destroy', $post->id)}}" method="post" style="display: none">
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
                      <th>Post Title</th>
                      <th>Sub Title</th>
                      <th>Slug</th>
                      <th>Tags</th>
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