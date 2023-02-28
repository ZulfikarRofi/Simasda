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
                                        <div class="d-flex justify-content-center mb-3">
                                            <img id="preview" alt="" style="width: 10rem;">
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" id="name" name="name" placeholder="Nama Kader">
                                                <label for="floatingusername">Nama Kader</label>
                                            </div>
                                            <input type="file" class="form-control mb-3" id="photo" name="photo" placeholder="Photo" onchange="loadFile(event)">
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
                <td scope="row">{{$i++}}</td>
                <td scope="row" style="text-transform:capitalize;">{{$value->name}}</td>
                <td scope="row" style="text-transform:capitalize;">{{$value->status}}</td>
                <td scope="row" style="text-transform:capitalize;">{{$value->komisariat}}</td>
                <td scope="row" style="text-transform:capitalize;">{{$value->jurusan}}</td>
                <td scope="row" style="text-transform:capitalize;">{{$value->angkatan}}</td>
                <td scope="row">{{$value->email}}</td>
                <td>
                    <div class="d-flex justify-content-start align-items-center ps-2">
                        <div class="dropdown">
                            <i class="bi bi-three-dots fs-3 point-button" style="color:blue" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="" data-bs-toggle="modal" data-bs-target="#Profile-{{$value->id}}">Cek Profile</a>
                                <a class="dropdown-item" href="/create" data-bs-toggle="modal" data-bs-target="#verticalycentered">Edit Data</a>
                                <a class="dropdown-item" href="" data-bs-toggle="modal" data-bs-target="#Delete-{{$value->id}}">Delete Data</a>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <div class="modal fade" id="Delete-{{$value->id}}" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form action="/deletedata/{{$value->id}}" method="post">
                            @csrf
                            @method('DELETE')
                            <div class="modal-header">
                                <h5 class="modal-title">Delete Data</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Are you sure want to delete this data <span class="fw-bold">{{$value->name}}</span> ?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-danger">Yes, Delete This</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div><!-- End Basic Modal-->
            <!-- Large Modal -->
            <div class="modal fade" id="Profile-{{$value->id}}" tabindex="-1">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">{{$value->name}}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row mb-3">
                                <div class="col-5 d-flex justify-content-end">
                                    <img src="/photo/{{$value->photo}}" alt="" style="width: 15rem;">
                                </div>
                                <div class="col-7 pt-3">
                                    <ul class="align-items-center">
                                        <li style="list-style-type: none;" class="mb-3">
                                            <h6 class=" fw-semibold">Name : <span class="fw-bold" style="text-transform:uppercase; color:darkblue">{{$value->name}}</span></h6>
                                        </li>
                                        <li style="list-style-type: none;" class="mb-3">
                                            <h6 class="fw-semibold">Status : <span class="fw-bold" style="text-transform:uppercase; color:darkblue">{{$value->status}}</span></h6>
                                        </li>
                                        <li style="list-style-type: none;" class="mb-3">
                                            <h6 class="fw-semibold">Komisariat : <span class="fw-bold" style="text-transform:uppercase; color:darkblue">{{$value->komisariat}}</span></h6>
                                        </li>
                                        <li style="list-style-type: none;" class="mb-3">
                                            <h6 class="fw-semibold">Jurusan : <span class="fw-bold" style="text-transform:uppercase; color:darkblue">{{$value->jurusan}}</span></h6>
                                        </li>
                                        <li style="list-style-type: none;" class="mb-3">
                                            <h6 class="fw-semibold">Angkatan : <span class="fw-bold" style="text-transform:uppercase; color:darkblue">{{$value->angkatan}}</span></h6>
                                        </li>
                                        <li style="list-style-type: none;" class="mb-3">
                                            <h6 class="fw-semibold">No Telp : <span class="fw-bold" style="text-transform:uppercase; color:darkblue">{{$value->number_phone}}</span></h6>
                                        </li>
                                        <li style="list-style-type: none;" class="mb-3">
                                            <h6 class="fw-semibold">Email : <span class="fw-bold" style="color:darkblue">{{$value->email}}</span></h6>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                        </div>
                    </div>
                </div>
            </div><!-- End Large Modal-->
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
<script>
    var loadFile = function(event) {
        var preview = document.getElementById('preview');
        preview.src = URL.createObjectURL(event.target.files[0]);
    };
</script>
@endsection