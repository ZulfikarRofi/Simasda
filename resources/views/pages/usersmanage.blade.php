@extends('layout.master')
@section('page', 'Users Management')
@section('title', 'Users Management')
@section('content')

<div class="card">
    <div class="content-headpage mb-3">
        <h5 class="card-title">Content Management <span> | List Content</span></h5>
        <div class="right">
            <div class="search-bar p-3">
                <form class="search-form d-flex align-items-center" method="POST" action="#">
                    <input type="text" name="query" placeholder="Search" title="Enter search keyword">
                    <button type="submit" title="Search"><i class="bi bi-search"></i></button>
                </form>
            </div><!-- End Search Bar -->
        </div>
    </div>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Username</th>
                <th scope="col">Email</th>
                <th scope="col">Level</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @php($i = 1)
            @foreach($user as $data)
            <tr>
                <td scope="row">{{$i++}}</td>
                <td>{{$data->name}}</td>
                <td>{{$data->email}}</td>
                <td>
                    @if($data->is_admin == 1)
                    User
                    @else
                    Admin
                    @endif
                </td>
                <td>
                    <div class="d-flex justify-content-start align-items-center ps-2">
                        <div class="dropdown">
                            <i class="bi bi-three-dots fs-3 point-button" style="color:blue" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="/create" data-bs-toggle="modal" data-bs-target="#verticalycentered">Reset Password</a>
                                <a class="dropdown-item" href="/createcontent" data-bs-toggle="modal" data-bs-target="#DeleteID">Delete Account</a>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
            {{$user->links()}}
        </tbody>
    </table>
    <!-- End Table with hoverable rows -->
    <!-- Basic Pagination -->
    <div class="d-flex justify-content-center mt-3">
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </nav><!-- End Basic Pagination -->
    </div>
</div>
<!-- Table with hoverable rows -->

@endsection