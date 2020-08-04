@extends('user/app')

@section('bg-img', "user/img/contact-bg.jpg")

@section('title', 'Welcome to dashboard')

@section('sub-heading', '')

@section('main-content')


<!-- Post Content -->
<article>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</article>
<br> 
<hr>
@endsection