@extends('layouts.master')

@section('title')
	{{ $title }}
@endsection

@section('content')
<div class="register_wrapper">
    <div class="confirmation mt-4">
        <div class="panel panel-body bg-default-100 border-top-primary mt-3">
            <div class="confirmation_body">
                <div class="container">
                    <div class="text-center">
                        <img src="../img/publisher/confirm.jpg" class="img-fluid" alt="Confirmation Link">
                        <h3>Confirm Your Email!</h3>
                        @include('includes.flash_message')
                        <p>Click <a href="/resend-email">Resend Email</a>  here to resend link if it does not exist in your email</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection