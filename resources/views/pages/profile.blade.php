@extends('layout.master')
@section('page', 'Profile')
@section('title', 'Profile')
@section('content')

<div class="card px-3 py-2">
    <h5 class="card-title mb-2">Profile Page <span> | User's Name</span></h5>
    <div class="body-section row mt-2 mb-5 px-5">
        <div class="col-3">
            <img src="assets/img/profile-img.jpg" alt="profile" class="profilepage-pic">
            <div class="name-person ps-3 mt-2">
                <h5 class="card-title fs-5 m-0 p-0">User's Name</h5>
                <p class="passive-text m-0 p-0">User's Level</p>
            </div>
        </div>
        <div class="col-9">
            <div class="bio-data">
                <h3 class="fw-bold">Profile Page User's Name</h3>
                <p>Level</p>
                <p>Jurusan</p>
                <p>Komisariat</p>
                <p>Posisi</p>
            </div>
        </div>
    </div>
</div>

@endsection
