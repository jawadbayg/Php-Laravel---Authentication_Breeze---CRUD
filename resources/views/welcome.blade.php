@extends('layouts.app') {{-- Assuming you have a layout file --}}

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Welcome to Your Application') }}</div>

                <div class="card-body">
                    <p class="lead">Choose an action:</p>
                    <div class="d-flex justify-content-center">
                        <a href="{{ route('register') }}" class="btn btn-primary mr-4">{{ __('Register') }}</a>
                        <a href="{{ route('login') }}" class="btn btn-success">{{ __('Login') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
