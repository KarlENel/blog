@extends('partials.layout')
@section('title', 'Home')
@section('content')
    <h1 class="text-6xl">Home Page</h1>
        <div class="grid grid-cols-4 gap-4">
            @foreach ($posts as $post)
                <div class="card bg-base-100 w-96 shadow-xl">
                    <figure>
                      <img
                        src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp"
                        alt="Shoes" />
                    </figure>
                    <div class="card-body">
                      <h2 class="card-title">Shoes!</h2>
                      <p>{{$post->snippet}}</p>
                      <div class="card-actions justify-end">
                        <a frek="{{ route('post', ['post' => $post]) }}" class="btn btn-primary">Buy Now</a>
                      </div>
                    </div>
                  </div>
            @endforeach
        </div>
@endsection
