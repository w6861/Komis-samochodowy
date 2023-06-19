@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="card">

                    <div class="card-body">
    <form method="POST" action="{{ route('password.email') }}">

        <h1 class="h3 mb-3 fw-normal">{{ __('Forgot Password') }}</h1>

        <p>{{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}</p>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <div class="form-floating">
            <input type="email" name="email" class="form-control" id="email" value="{{ old('email') }}"
                   placeholder="name@example.com" required autofocus>
            <label for="email">{{ __('Email') }}</label>
        </div>
        <br>
        <button class="w-100 btn btn-lg btn-primary" type="submit">{{ __('Email Password Reset Link') }}</button>
    </form>

@endsection
