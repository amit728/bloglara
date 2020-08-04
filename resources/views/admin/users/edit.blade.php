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
        
        @include('includes.messages')
        
        <div class="card-body">          
            <form role="form" action="{{route('post.update', $post->id)}}" method="Post" enctype="multipart/form-data">
              @csrf
              @method('PUT')
                <div class="row">
                  <div class="form-group col-sm-6">
                    <label for="title">Post Title</label>
                    <input type="text" name="title" class="form-control" id="title" placeholder="Enter Post Title" value="{{$post->title}}">
                  </div>
                  <div class="form-group col-sm-6">
                    <label for="subtitle">Post Sub Title</label>
                    <input type="text" name="subtitle" class="form-control" id="subtitle" placeholder="Enter Sub Post Title" value="{{$post->subtitle}}">
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-sm-6">
                    <label for="slug">Slug</label>
                    <input type="text" name="slug" class="form-control" id="slug" placeholder="Enter Slug" value="{{$post->slug}}">
                  </div>
                  <div class="form-group col-sm-6">
                    <label for="image">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="image" class="custom-file-input" id="image">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-sm-6">
                    <label>Tags</label>
                    <select class="select2" multiple="multiple" data-placeholder="Select Tags" name="tags[]" style="width: 100%;">
                      @foreach($tags as $tag)
                        <option value="{{$tag->id}}"
                          @foreach($post->tags as $postTag)
                            @if($postTag->id == $tag->id)
                              {{'selected'}}
                            @endif
                          @endforeach
                        >{{$tag->name}}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group col-sm-6">
                    <label>Categories</label>
                    <select class="select2" multiple="multiple" data-placeholder="Select Categories" name="categories[]" style="width: 100%;">
                      @foreach($categories as $category)
                        <option value="{{$category->id}}"
                          @foreach($post->categories as $postCategory)
                            @if($postCategory->id == $category->id)
                              {{'selected'}}
                            @endif
                          @endforeach
                        >{{$category->name}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="form-group">
                    <label for="body">Post Description</label>
                    <textarea id="editor" class="form-control" name="body" id="body" placeholder="Post Description" value="{{$post->body}}" rows="10">{{$post->body}}</textarea>
                </div>
                <div class="form-check">
                  <input type="checkbox" name="status" class="form-check-input" id="status"  value="1" @if($post->status == 1) {{'checked'}} @endif>
                  <label class="form-check-label" for="status">Publish</label>
                </div>
                <div class="mt-2">
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