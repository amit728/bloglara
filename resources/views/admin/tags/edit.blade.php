@extends('admin.layouts.app')

@section('main-content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Tag</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Edit Tag</li>
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
            <form role="form" action="{{route('tag.update',$tag->id)}}" method="POST">
              @csrf
              @method('PUT')
              	<div class="row">
                  <div class="form-group col-sm-6">
                    <label for="title">Tag Name</label>
                    <input type="text" name="name" class="form-control" id="title" placeholder="Enter Tag Name" value="{{$tag->name}}">
                  </div>
                  <div class="form-group col-sm-6">
                    <label for="slug">Slug</label>
                    <input type="text" name="slug" class="form-control" id="slug" placeholder="Enter Slug" value="{{$tag->slug}}">
                  </div>
              	</div>
                <div class="">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="submit" class="btn btn-warning">Back</button>
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