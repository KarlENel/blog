@extends('partials.layout')
@section('title', __('Register'))
@section('content')


<div class="flex w-full flex-col">
    <div class="divider"></div>
</div>
<div class="flex-1">
        <h2 class="ml-10 font-bold text-2xl">{{__('Dashboard')}}</h2>
</div>
<div class="flex w-full flex-col">
    <div class="card bg-base-300 rounded-box grid h-16 place-items-left mx-10 my-4">
        <span class="text-lg self-center ml-4 font-semibold">{{ __("You're logged in!") }}</span>

    </div>
</div>
@endsection
