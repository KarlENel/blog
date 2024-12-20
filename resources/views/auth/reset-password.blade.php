@extends('partials.layout')
@section('title', __('Reset Password'))
@section('content')
    <div class="w-2/3 mx-auto card bg-base-300">
        <div class="card-body">
            <h2 class="card-title">{{ __('Reset password') }}</h2>
            <form action="{{ route('password.store') }}" method="POST">
                @csrf

                <label class="w-full form-control">
                    <div class="label">
                        <span class="label-text">{{__('Email')}}</span>
                    </div>
                    <input name="email" type="email" placeholder="Email" value="{{ old('email', $request->email) }}" class="w-full input input-bordered @error('email') input-error @enderror" required autocomplete="username"/>
                    <div class="label">
                        @error('email')
                            <span class="label-text-alt text-error">{{ $message }}</span>
                        @enderror
                    </div>
                </label>
                <label class="w-full form-control">
                    <div class="label">
                        <span class="label-text">{{__('Password')}}</span>
                    </div>
                    <input name="password" type="password" placeholder="Password" class="w-full input input-bordered @error('password') input-error @enderror" required autocomplete="new-password"/>
                    <div class="label">
                        @error('password')
                            <span class="label-text-alt text-error">{{ $message }}</span>
                        @enderror
                    </div>
                </label>
                <label class="w-full form-control">
                    <div class="label">
                        <span class="label-text">{{__('Confirm Password')}}</span>
                    </div>
                    <input name="password_confirmation" type="password" placeholder="Password Confirmation" class="w-full input input-bordered @error('password_confirmation') input-error @enderror" required autocomplete="new-password" />
                    <div class="label">
                        @error('password_confirmation')
                            <span class="label-text-alt text-error">{{ $message }}</span>
                        @enderror
                    </div>
                </label>
                <div class="text-right">
                    <input type="submit" class="btn btn-primary" value="{{ __('Reset your password') }}">
                </div>
            </form>
        </div>
    </div>
@endsection
