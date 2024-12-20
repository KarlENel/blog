@extends('partials.layout')
@section('title', __('Profile'))
@section('content')

    <div class="flex w-full flex-col">
        <div class="divider"></div>
    </div>
    <h2 class="font-semibold text-2xl leading-tight mt-4 ml-64">
        {{ __('Profile') }}
    </h2>


    <div class="py-20">
        <div class="w-2/3 mx-auto card">
            <div class="p-4 sm:p-8 bg-base-300 my-4 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-base-300 my-4 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-base-300 my-4 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>

        </div>
    </div>
@endsection
