@extends('layout.master')
@section('page', 'Content Management')
@section('title', 'Content Management')
@section('content')

<div class="row">
    <div class="card p-3">
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
                                    <div class="modal-header">
                                        <h5 class="modal-title fw-bold">New Announcement</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Address" id="floatingTextarea" style="height: 100px;"></textarea>
                                            <label for="floatingTextarea">Announcement's fill</label>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                                        <button type="button" class="btn btn-primary">Publish</button>
                                    </div>
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
                                    <div class="modal-body">
                                        <!-- Quill Editor Full -->
                                        <div class="quill-editor-full">
                                            <p>Hello World!</p>
                                            <p>This is Quill <strong>full</strong> editor</p>
                                        </div>
                                        <!-- End Quill Editor Full -->
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                                        <button type="button" class="btn btn-primary">Publish</button>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Vertically centered Modal-->
                    </div>
                </div>
            </div>
        </div>
        <div class="row card-body">
            <div class="col-3">
                <div class="content-list"><a href="#">
                        <img src="assets/img/news-2.jpg" alt="news" style="width: 100%;">
                        <div class="d-flex justify-content-center">
                            <p class="passive-text fw-bold" style="color:black">test</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-3">
                <div class="content-list"><a href="#">
                        <img src="assets/img/news-2.jpg" alt="news" style="width: 100%;">
                        <div class="d-flex justify-content-center">
                            <p class="passive-text fw-bold" style="color:black">test</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-3">
                <div class="content-list"><a href="#">
                        <img src="assets/img/news-2.jpg" alt="news" style="width: 100%;">
                        <div class="d-flex justify-content-center">
                            <p class="passive-text fw-bold" style="color:black">test</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-3">
                <div class="content-list"><a href="#">
                        <img src="assets/img/news-2.jpg" alt="news" style="width: 100%;">
                        <div class="d-flex justify-content-center">
                            <p class="passive-text fw-bold" style="color:black">test</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
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
</div>

@endsection
