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
            <div class="d-flex justify-content-end px-3">
                <div class="dropdown">
                    <i class="bi bi-plus-circle fs-3 point-button" style="color:blue" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="/create" data-bs-toggle="modal" data-bs-target="#verticalycentered">Create New Account</a>
                    </div>
                    <!-- Modal Vertical Centered -->
                    <div class="modal fade" id="verticalycentered" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title fw-bold">New Announcement</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="col-sm-12">
                                        <div class="form-floating mb-3">
                                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                                            <label for="floatingInput">Email address</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="username" class="form-control" id="floatingusername" placeholder="example username">
                                            <label for="floatingusername">Username</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                                <option selected>Open this select user level</option>
                                                <option value="1">Admin</option>
                                                <option value="2">User</option>
                                            </select>
                                            <label for="floatingSelect">User's Level</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                                <option selected>Open this select user's status</option>
                                                <option value="1">Mahasiswa Aktif</option>
                                                <option value="2">Alumni</option>
                                            </select>
                                            <label for="floatingSelect">User's Status</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn btn-primary">Create</button>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Vertically centered Modal-->
                </div>
            </div>
        </div>
    </div>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Username</th>
                <th scope="col">Status</th>
                <th scope="col">Email</th>
                <th scope="col">Level</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Brandon Jacob</td>
                <td>Mahasiswa Aktif</td>
                <td>brandonjc@gmail.com</td>
                <td>User</td>
                <td>
                    <div class="d-flex justify-content-start align-items-center ps-2">
                        <div class="dropdown">
                            <i class="bi bi-three-dots fs-3 point-button" style="color:blue" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="/create" data-bs-toggle="modal" data-bs-target="#verticalycentered">Edit Account</a>
                                <a class="dropdown-item" href="/createcontent">Delete Account</a>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>

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
