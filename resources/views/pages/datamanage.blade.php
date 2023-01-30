@extends('layout.master')
@section('page', 'Data Management')
@section('title', 'Data Management')
@section('content')

<div class="card">
    @if($errors->any())
    <div class="alert alert-danger" role="alert">
        Oops! some input is wrong
        @foreach($errors->all() as $error)
        <li class="text-red-500 list-none">
            {{ $error }}
        </li>
        @endforeach
    </div>
    @endif
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
                        <a class="dropdown-item" href="/create" data-bs-toggle="modal" data-bs-target="#verticalycentered">Create New Data</a>
                    </div>
                    <!-- Modal Vertical Centered -->
                    <div class="modal fade" id="verticalycentered" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title fw-bold">New Data Kader</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="/createdatakader" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="col-sm-12">
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" id="name" name="name" placeholder="Nama Kader">
                                                <label for="floatingusername">Nama Kader</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" id="komisariat" name="komisariat" placeholder="Komisariat">
                                                <label for="floatingkomisariat">Komisariat</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" id="jurusan" name="jurusan" placeholder="Jurusan">
                                                <label for="floatingjurusan">Jurusan</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" id="angkatan" name="angkatan" placeholder="Angkatan">
                                                <label for="floatingangkatan">Angkatan</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
                                                <label for="floatingInput">Email address</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" id="number_phone" name="number_phone" placeholder="Number Phone">
                                                <label for="floatingInput">Number Phone</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <select class="form-select" id="status" name="status" aria-label="Floating label select example">
                                                    <option selected>Open this select user's status</option>
                                                    <option value="Mahasiswa aktif">Mahasiswa Aktif</option>
                                                    <option value="Alumni">Alumni</option>
                                                </select>
                                                <label for="floatingSelect">User's Status</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                                        <button type="submit" class="btn btn-primary">Create</button>
                                    </div>
                                </form>
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
                <th scope="col">Nama Kader</th>
                <th scope="col">Status</th>
                <th scope="col">Komisariat</th>
                <th scope="col">Jurusan</th>
                <th scope="col">Angkatan</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @php($i = 1)
            @foreach($datakader as $value)
            <tr>
                <th scope="row">{{$i++}}</th>
                <td>{{$value->name}}</td>
                <td>{{$value->status}}</td>
                <td>{{$value->komisariat}}</td>
                <td>{{$value->jurusan}}</td>
                <td>{{$value->angkatan}}</td>
                <td>{{$value->email}}</td>
                <td>
                    <div class="d-flex justify-content-start align-items-center ps-2">
                        <div class="dropdown">
                            <i class="bi bi-three-dots fs-3 point-button" style="color:blue" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="/create" data-bs-toggle="modal" data-bs-target="#verticalycentered">Edit Data</a>
                                <a class="dropdown-item" href="/createcontent">Delete Data</a>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
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
