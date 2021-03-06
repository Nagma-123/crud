<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('include/header')
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="container">
                <div class="row">
                    {{-- @if($user && $user->profile) --}}
                    <div class="col-3 p-5">
                        <img src="https://cdn.guidingtech.com/media/assets/WordPress-Import/2012/10/Smiley-Thumbnail.png" style="height:170px;width:170px;" class="rounded-circle w-100">
                    </div>
                    {{-- @endif --}}
                    <div class="col-9 pt-5">
                    <div class="d-flex justify-content-between align-items-baseline">
                        <div class="d-flex">
                            <h1>Test</h1>
                            {{-- <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}"></follow-button> --}}
                        </div>
                        {{-- @can('update', $user->profile) --}}
                            <a href="#">Add New Post</a>
                        {{-- @endcan       --}}
                    </div>
                    {{-- @can('update', $user->profile) --}}
                        <a href="#">Edit Profile</a>
                    {{-- @endcan --}}
                    {{-- <a href="/profile/{{ $user->id }}/edit">Edit Profile</a> --}}
                        <div class="d-flex">
                            <div class="pr-5"><strong>12</strong>posts</div>
                            <div class="pr-5"><strong>23k</strong>followers</div>
                            <div class="pr-5"><strong>212</strong>following</div>
                        </div>
                        <div class="pt-4 font-weight-bold">{{ $user->profile->title ?? 'N/A' }}</div>
                        <div>{{ $user->profile->description ?? 'N/A' }}</div>
                        <div><a href="#">{{ $user->profile->url ?? 'N/A' }}</a></div>
                    </div>
                </div>
                <div class="row pt-4">
                    {{-- @foreach($user->posts as $post)
                        <div class="col-4 pb-4">
                            <a href="/p/{{ $post->id }}">
                                <img src="/storage/{{ $post->image }}" class="w-100">
                            </a>        
                        </div>
                    @endforeach   --}}
                    
                        <div class="col-4 pb-4">
                            <a href="#">
                                <img src="https://cdn.guidingtech.com/media/assets/WordPress-Import/2012/10/Smiley-Thumbnail.png" class="w-100">
                            </a>        
                        </div>
                     
                </div>
            </div>
        </div>
    </body>
</html>
