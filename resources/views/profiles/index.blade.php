@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3">
            <img src="https://instagram.fprn3-1.fna.fbcdn.net/v/t51.2885-19/s150x150/120303438_339723917234742_3776369122356680540_n.jpg?_nc_ht=instagram.fprn3-1.fna.fbcdn.net&_nc_ohc=LhQfpzIWPTEAX-E0cvp&tp=1&oh=acd4119280be7d4b550ea76c90c5e6f0&oe=5FE20007" class="rounded-circle" alt="">
        </div>

         <div class="col-9 p-5">
             <div class="d-flex justify-content-between align-items-baseline">
                 <h1>{{ $user->username }}</h1>

                 @can('update', $user->profile)
                     <a href="/p/create">Add new post</a>
                 @endcan
             </div>

             @can('update', $user->profile)
                 <a href="/profile/{{ $user->id }}/edit">Edit Profile</a>
             @endcan

             <div class="d-flex">
                 <div class="pr-5"><strong>{{ $user->posts->count() }}</strong> posts</div>
                 <div class="pr-5"><strong>60.3k</strong> followers</div>
                 <div class="pr-5"><strong>287</strong> following</div>
             </div>
             <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
             <div>{{ $user->profile->description }}</div>
             <div><a href="#">{{ $user->profile->url }}</a></div>
         </div>
    </div>
    <div class="row pt-4">

        @foreach($user->posts as $post)
            <div class="col-4 pb-4">
                <a href="/p/{{ $post->id }}">
                    <img src="/storage/{{ $post->image }}" alt="" class="w-100">
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection
