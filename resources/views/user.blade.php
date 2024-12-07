@extends('partials.layout')
@section('title', 'Home')
@section('content')
    <div class="card bg-base-300 shadow-xl">
        <div class="card-body">
            <h1 class="card-title">{{ $user->name }}</h1>
            <table class="table table-zebra">
                <tbody>
                    <tr class="hover">
                        <th>Comment Count</th>
                        <td>{{$user->comments()->count()}}</td>
                    </tr>
                    <tr class="hover">
                        <th>Like Count</th>
                        <td>{{$user->likes()->count()}}</td>
                    </tr>
                    <tr class="hover">
                        <th>Post Count</th>
                        <td>{{$user->posts()->count()}}</td>
                    </tr>
                    <tr class="hover">
                        <th>Comment on user posts</th>
                        <td>{{$user->postComments()->count()}}</td>
                    </tr>
                    <tr class="hover">
                        <th>Likes on user posts</th>
                        <td>{{$user->postLikes()->count()}}</td>
                    </tr>
                    <tr class="hover">
                        <th>Followers count</th>
                        <td>{{$user->followers()->count()}}</td>
                    </tr>
                    <tr class="hover">
                        <th>Followees count</th>
                        <td>{{$user->followees()->count()}}</td>
                    </tr>
                </tbody>
            </table>
            <form action="{{route('follow', ['user' => $user])}}" method="POST">
                @csrf
                @if($user->authHasFollowed)
                    <button class="btn btn-primary"> Follow</button>
                @else
                    <button class="btn btn-primary"> UnFollow</button>
                @endif
            </form>
        </div>
    </div>
    <div class="my-4 text-center">
        {{ $posts->links() }}
    </div>
    <div class="grid grid-cols-4 gap-2">
        @foreach ($posts as $post)
            @include('partials.post-card')
        @endforeach
    </div>
@endsection