@extends('layout.master')
@section('page', 'Content Management')
@section('title', 'Content Management')
@section('content')

<div class="row">
    <div class="card p-3">
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
            <h5 class="card-title px-3">Content Management <span> | List Content</span></h5>
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
                            <a class="dropdown-item" href="/create" data-bs-toggle="modal" data-bs-target="#verticalycentered">Create New Announcement</a>
                            <a class="dropdown-item" href="/createcontent">Create New Content</a>
                            <a class="dropdown-item" href="/create" data-bs-toggle="modal" data-bs-target="#newquicknews">Create New Quick News</a>
                        </div>
                        <!-- Modal Vertical Centered -->
                        <div class="modal fade" id="verticalycentered" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <form action="/createannounce" method="post">
                                        @csrf
                                        <div class="modal-header">
                                            <h5 class="modal-title fw-bold">New Announcement</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p class="passive-text" style="font-size:12px; color:red;">*maximum 1 paragraph</p>
                                            <div class="form-floating">
                                                <textarea class="form-control" placeholder="type your announcement here!" id="announce_fill" name="announce_fill" style="height: 100px;"></textarea>
                                                <label for="floatingTextarea">Announcement's fill</label>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                                            <button type="submit" class="btn btn-primary">Publish</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div><!-- End Vertically centered Modal-->
                        <!-- Modal New Quick News -->
                        <div class="modal fade" id="newquicknews" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title fw-bold">New Quick News</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form action="/createquick" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <input type="text" class="form-control" name="title" id="title" placeholder="Title">
                                            </div>
                                            <div class="mb-3">
                                                <input type="text" class="form-control" name="caption" id="caption" placeholder="Caption">
                                            </div>
                                            <div class="mb-3">
                                                <input type="text" class="form-control" name="author" id="author" placeholder="Author">
                                            </div>
                                            <div class="mb-3">
                                                <input type="file" class="form-control" name="image" id="image">
                                            </div>
                                            <div style="width:auto">
                                                <textarea class="tinymce-editor" name="description" id="description">Input Description Here </textarea>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                                            <button type="submit" class="btn btn-primary">Publish</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div><!-- End Vertically centered Modal-->
                    </div>
                </div>
            </div>
        </div>
        <div class="row card-body">
            @foreach($article as $value)
            <div class="col-3">
                <div class="content-list"><a href="/articlepage/{{$value->id}}">
                        <div class="content-hover">
                            <img class="image" src="/contentimg/{{$value->image}}" alt="news" style="width: 100%;">
                        </div>
                        <div class="d-flex justify-content-center">
                            <h6 class="p-1 fw-bold to-highlight" style="text-align:justify; text-transform:capitalize;">{{$value->title}}</h6>
                        </div>
                    </a>
                </div>
            </div>
            @endforeach
            <!-- Basic Pagination -->
            <!-- <div class="d-flex justify-content-center mt-3">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </nav>
            </div> -->
            <!-- End Basic Pagination -->
        </div>
        <div class="row card-body">
            <h5 class="card-title px-3">Content Management <span> | List Quick News</span></h5>
            <!-- List group with Advanced Contents -->
            <div class="list-group ps-2">
                @foreach($quick as $qn)
                <a href="#" class="list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1 fw-semibold">{{$qn->title}}</h5>
                        <small data-bs-toggle="modal" data-bs-target="#Delete-{{$qn->id}}"><i class="fs-5 bi bi-trash to-delete"></i></small>
                    </div>
                    <p class="mb-1">{{$qn->caption}}</p>
                    <small class="text-muted">{!!$qn->description!!}</small>
                </a>
                <div class="modal fade" id="Delete-{{$qn->id}}" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form action="/deleteQuick/{{$qn->id}}" method="post">
                                @csrf
                                @method('DELETE')
                                <div class="modal-header">
                                    <h5 class="modal-title">Delete Quick News</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Are you sure want to delete this <span class="fw-semibold"> {{$qn->title}}</span>?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-danger">Yes, Delete it</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div><!-- End Basic Modal-->
                @endforeach
            </div><!-- End List group Advanced Content -->
        </div>
    </div>
</div>
@endsection