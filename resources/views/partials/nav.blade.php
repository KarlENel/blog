<div class="navbar bg-base-100">
    <div>
        <a href="{{ route('home') }}" class="text-xl btn btn-ghost">{{ config('app.name') }}</a>
    </div>
    <div>
        <ul class="px-1 menu menu-horizontal">
            <li><a href="{{ route('page1') }}">Page 1</a></li>
            <li><a href="{{ route('page2') }}">Page 2</a></li>
            <li>
                <details>
                    <summary>Admin</summary>
                    <ul class="p-2 rounded-t-none bg-base-100">
                        <li><a href="{{ route('posts.index') }}">Posts</a></li>
                        <li><a>Link 2</a></li>
                    </ul>
                </details>
            </li>
        </ul>
    </div>
</div>