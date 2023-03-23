@extends('layout.master')
@section('page', 'Profile')
@section('title', 'Profile')
@section('content')

<section class="section profile">
    <div class="row">
        <div class="col-xl-4">

            <div class="card">
                <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                    @if($profile === null)
                    <img src="/assets/img/avatar-3.png" alt="default-m">
                    @else
                    <img src="/photo_profile/{{$profile->photo_profile}}" alt="default-m" class="profile-pic-border">
                    @endif
                    <h2 class="fw-bold fs-4" style="text-transform: capitalize;">{{auth()->user()->name}}</h2>
                    @if(auth()->user()->is_admin == 1)
                    <h3>Admin</h3>
                    @else
                    <h3>User</h3>
                    @endif
                    @if($profile === null)
                    <p class="passive-text" style="font-size: 14px;">No social media registered</p>
                    @else
                    <div class="social-links mt-2">
                        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                        <a href="https://instagram.com/{{$profile->instagram}}" class="instagram"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                    </div>
                    @endif
                </div>
            </div>

        </div>

        <div class="col-xl-8">

            <div class="card">
                <div class="card-body pt-3">
                    <!-- Bordered Tabs -->
                    <ul class="nav nav-tabs nav-tabs-bordered">

                        <li class="nav-item">
                            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                        </li>

                        <li class="nav-item">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                        </li>

                        <li class="nav-item">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
                        </li>

                    </ul>
                    <div class="tab-content pt-2">
                        <div class="tab-pane fade show active profile-overview" id="profile-overview">
                            @if($profile === null)
                            <div class="d-flex justify-content-center p-4">
                                <img src="/assets/img/no-data-entries.png" alt="no data entries">
                            </div>
                            @else

                            <h5 class="card-title">About</h5>
                            @if($profile->about === null)
                            <p class="small fst-italic">Data not registered yet</p>
                            @else
                            <p class="small fst-italic">{{$profile->about}}</p>
                            @endif

                            <h5 class="card-title">Profile Details</h5>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label ">Full Name</div>
                                @if(auth()->user()->name === null)
                                <div class="col-lg-9 col-md-8" style="text-transform: capitalize;">Data not registered yet</div>
                                @else
                                <div class="col-lg-9 col-md-8" style="text-transform: capitalize;">{{auth()->user()->name}}</div>
                                @endif
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Komisariat</div>
                                @if($profile->komisariat === null)
                                <div class="col-lg-9 col-md-8" style="text-transform: capitalize;">Data not registered yet</div>
                                @else
                                <div class="col-lg-9 col-md-8">{{$profile->komisariat}}</div>
                                @endif
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Jurusan</div>
                                @if($profile->jurusan === null)
                                <div class="col-lg-9 col-md-8" style="text-transform: capitalize;">Data not registered yet</div>
                                @else
                                <div class="col-lg-9 col-md-8">{{$profile->jurusan}}</div>
                                @endif
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Phone</div>
                                @if($profile->phone_number === null)
                                <div class="col-lg-9 col-md-8" style="text-transform: capitalize;">Data not registered yet</div>
                                @else
                                <div class="col-lg-9 col-md-8">{{$profile->phone_number}}</div>
                                @endif
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Email</div>
                                @if($profile->email === null)
                                <div class="col-lg-9 col-md-8" style="text-transform: capitalize;">Data not registered yet</div>
                                @else
                                <div class="col-lg-9 col-md-8">{{$profile->email}}</div>
                                @endif
                            </div>
                            @endif
                        </div>

                        <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
                            <!-- Profile Edit Form -->
                            @if($profile === null)
                            <form action="/createprofile" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                                    <div class="col-md-8 col-lg-9">
                                        <img id="output" alt="Profile" style="width:100%">
                                        <div class="pt-2">
                                            <div class="d-flex">
                                                <input type="file" name="photo_profile" id="photo_profile" onchange="loadFile(event)" hidden>
                                                <label for="photo_profile" class="">
                                                    <i class="btn btn-primary bi bi-upload"></i>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="about" class="col-md-4 col-lg-3 col-form-label">About</label>
                                    <div class="col-md-8 col-lg-9">
                                        <textarea name="about" class="form-control" id="about" style="height: 100px; resize:none">Add something about you</textarea>
                                    </div>
                                </div>

                                <input name="user_id" type="int" class="form-control" id="user_id" value="{{auth()->user()->id}}" hidden>

                                <div class="row mb-3">
                                    <label for="komisariat" class="col-md-4 col-lg-3 col-form-label">Komisariat</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="komisariat" type="text" class="form-control" id="komisariat" value="" placeholder="Komisariat">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="jurusan" class="col-md-4 col-lg-3 col-form-label">Jurusan</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="jurusan" type="text" class="form-control" id="jurusan" value="" placeholder="Asal Jurusan">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Phone Number</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="phone_number" type="text" class="form-control" id="phone_number" value="" placeholder="Phone Number">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="email" type="email" class="form-control" id="email" value="" placeholder="Email">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="Instagram" class="col-md-4 col-lg-3 col-form-label">Instagram Profile</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="instagram" type="text" class="form-control" id="Instagram" value="" placeholder="Your Instagram Account">
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                </div>
                            </form>
                            @else
                            <form action="/updateprofile" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="row mb-3">
                                    <label for="about" class="col-md-4 col-lg-3 col-form-label">About</label>
                                    <div class="col-md-8 col-lg-9">
                                        <textarea name="about" class="form-control" id="about" style="height: 100px; resize:none">{{$profile->about}}</textarea>
                                    </div>
                                </div>

                                <input name="user_id" type="int" class="form-control" id="user_id" value="{{auth()->user()->id}}" hidden>

                                <div class="row mb-3">
                                    <label for="komisariat" class="col-md-4 col-lg-3 col-form-label">Komisariat</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="komisariat" type="text" class="form-control" id="komisariat" value="{{$profile->komisariat}}" placeholder="Komisariat">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="jurusan" class="col-md-4 col-lg-3 col-form-label">Jurusan</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="jurusan" type="text" class="form-control" id="jurusan" value="{{$profile->jurusan}}" placeholder="Asal Jurusan">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Phone Number</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="phone_number" type="text" class="form-control" id="phone_number" value="{{$profile->phone_number}}" placeholder="Phone Number">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="email" type="email" class="form-control" id="email" value="{{$profile->email}}" placeholder="Email">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="Instagram" class="col-md-4 col-lg-3 col-form-label">Instagram Profile</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="instagram" type="text" class="form-control" id="Instagram" value="{{$profile->instagram}}" placeholder="Your Instagram Account">
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                </div>
                            </form><!-- End Profile Edit Form -->
                            @endif
                        </div>

                        <div class="tab-pane fade pt-3" id="profile-change-password">
                            <!-- Change Password Form -->
                            <form>

                                <div class="row mb-3">
                                    <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="password" type="password" class="form-control" id="currentPassword">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="newpassword" type="password" class="form-control" id="newPassword">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="renewpassword" type="password" class="form-control" id="renewPassword">
                                    </div>
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Change Password</button>
                                </div>
                            </form><!-- End Change Password Form -->

                        </div>

                    </div><!-- End Bordered Tabs -->

                </div>
            </div>

        </div>
    </div>
</section>

<script>
    var loadFile = function(event) {
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
    };
</script>
@endsection
