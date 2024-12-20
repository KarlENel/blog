@extends('partials.layout')
@section('title', __('Register'))
@section('content')
    <div class="w-2/3 mx-auto card my-20>
        <div class="card-body">
            <div class="w-2/3 mx-auto card bg-base-300">
                <div class="card-body items-center text-center">
                    <div class="mb-4">
                        {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
                    </div>

                    @if (session('status') == 'verification-link-sent')
                    <div class="mb-4 font-medium text-sm text-green-800">
                        {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                    </div>
                  @endif

                  <div class="mt-4 flex items-center justify-between">
                    <form method="POST" action="{{ route('verification.send') }}">
                        @csrf

                  <div class="card-actions">
                    <button class="btn btn-primary"><span>{{__('RESEND VERIFICATION EMAIL')}}</span></button>
                    <button class="btn btn-ghost">Deny</button>
                  </div>
                </div>
              </div>

        </div>
    </div>
@endsection
