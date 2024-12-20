@extends('partials.layout')
@section('title', __('Log in'))
@section('content')
    <div class="w-1/3 mx-auto card bg-base-300">
        <div class="card-body">
            <div class="text-s">
                {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
            </div>
                <form action="{{ route('password.email') }}" method="POST">
                @csrf

                <label class="w-full form-control">
                    <div class="label">
                        <span class="label-text">{{__('Email')}}</span>
                    </div>
                    <input name="email" type="email" placeholder="Email" value="{{ old('email') }}" class="w-full input input-bordered @error('email') input-error @enderror" required autofocus autocomplete="username"/>
                    <div class="label">
                        @error('email')
                            <span class="label-text-alt text-error">{{ $message }}</span>
                        @enderror
                    </div>
                </label>
                <div class="form-control w-fit">
                  </div>
                <div class="text-right">
                    <input type="submit" class="btn btn-primary" value="{{ __('Email Password Reset Link') }}">
                </div>
            </form>
        </div>
    </div>
@endsection
