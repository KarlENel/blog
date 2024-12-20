@extends('partials.layout')
@section('title', __('Confirm password'))
@section('content')
    <div class="w-1/3 mx-auto card bg-base-300">
        <div class="card-body">
            <div class="text-s">
                {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
            </div>
                <form action="{{ route('password.confirm') }}" method="POST">
                @csrf

                <label class="w-full form-control">
                    <div class="label">
                        <span class="label-text">{{__('Password')}}</span>
                    </div>
                    <input name="password" type="password" placeholder="Password" value="{{ old('em') }}" class="w-full input input-bordered @error('password') input-error @enderror" required autocomplete="current-password"/>
                    <div class="label">
                        @error('email')
                            <span class="label-text-alt text-error">{{ $message }}</span>
                        @enderror
                    </div>
                </label>
                <div class="form-control w-fit">
                  </div>
                <div class="text-right">
                    <input type="submit" class="btn btn-primary" value="{{ __('Confirm') }}">
                </div>
            </form>
        </div>
    </div>
@endsection
