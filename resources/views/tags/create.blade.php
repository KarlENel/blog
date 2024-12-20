@extends('partials.layout')
@section('title', 'New Tag')
@section('content')
<div class="card bg-base-300 w-2/3 mx-auto mt-5">
   <div class="card-body">
      <h2 class="card-title">New Tag</h2>
      <form action="{{ route('tags.store') }}" method="POST">
         @csrf
         <label class="form-control w-full">
            <div class="label">
               <span class="label-text">Name</span>
            </div>
            <input name="name" type="text" placeholder="Type here" class="input input-bordered w-full @error('name') input-error @enderror" />
            <div class="label">
               @error('name')
                  <span class="label-text-alt text-error">{{ $message }}</span>
               @enderror
            </div>
         </label>
         <input type="submit" class="btn btn-primary" value="Add">
      </form>
   </div>
</div>
@endsection
