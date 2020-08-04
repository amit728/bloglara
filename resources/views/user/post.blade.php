@extends('user/app')

@section('bg-img', Storage::disk('local')->url($post->image))

@section('title', $post->title)

@section('sub-heading', $post->subtitle)

@section('main-content')

<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v7.0&appId=713677835865579&autoLogAppEvents=1" nonce="SUO2MHLO"></script>

  <!-- Post Content -->
  <article>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <small>Created at: {{$post->created_at->diffforHumans()}}</small>
          <small class="float-right">Category: 
            @foreach($post->categories as $category)
              <a href="{{route('category',$category->slug)}}">{{$category->name}}</a>,
            @endforeach
          </small>
          {!!htmlspecialchars_decode($post->body)!!}
          <hr>
          <h3>Tags:</h3>
          <small>
            @foreach($post->tags as $tag)
              <a href="{{route('tag',$tag->slug)}}"><span class="badge badge-sm badge-info">{{$tag->name}}</span></a>
            @endforeach
          </small><br><br>
          <div class="fb-comments" data-href="{{Request::url()}}" data-numposts="5" data-width="100%"></div>
        </div>
      </div>
    </div>
  </article>
  <hr>
@endsection