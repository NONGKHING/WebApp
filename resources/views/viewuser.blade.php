@extends('layouts.backend.master')

@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-dark rounded h-100 p-4 text-center"
                 style="border: 2px solid #ff4b4b; border-radius: 0.75rem; box-shadow: 0 0 20px rgba(255, 75, 75, 0.6);">
                <h3 class="mb-4" style="color: white; font-size: 1.8rem; text-transform: uppercase; letter-spacing: 2px; text-shadow: 2px 2px 3px rgba(0, 0, 0, 0.8);">
                    {{ $user->name }}
                </h3>

                <div class="bg-secondary rounded p-4 mx-auto"
                     style="width: 250px; background-color: #2e2e2e; border: 1px solid #ff4b4b; border-radius: 0.75rem; box-shadow: 0 0 20px rgba(255, 75, 75, 0.4);">
                    <img class="profile-user-img img-fluid rounded-circle shadow mb-3"
                         src="{{ asset('storage/' . $user->profile_photo_path) }}"
                         alt="User profile picture" style="border: 3px solid #ff4b4b; padding: 5px; width: 150px; height: 150px;">

                    <h3 class="text-center" style="color: #ff4b4b; font-size: 1.2rem;">
                        {{ $user->name }}
                    </h3>
                    <p class="text-muted">{{ $user->email }}</p>

                    <a href="{{route('userdata')}}" class="btn btn-outline-danger btn-block shadow"><b>Back</b></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
