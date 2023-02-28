@extends('layout.master')
@section('page', 'Articles Title')
@section('page', 'Articles Title')
@section('content')

<div class="card">
    <div class="article-content">
        <h5 class="card-title mb-2">Article Page <span> | {{$article->title}}</span></h5>
        <div class="d-flex justify-content-end mx-4">
            <div class="">
                <a href="" class="" style="color:green"><i class="bi bi-pencil"></i> Edit</a>
                <!-- Vertically centered Modal -->
                <a type="button" class="ms-2" data-bs-toggle="modal" data-bs-target="#verticalycentered" style="color:red">
                    <i class="bi bi-trash"></i> Delete
                </a>
            </div>
            <div class="modal fade" id="verticalycentered" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <form action="/deletearticle/{{$article->id}}" method="post">
                        @csrf
                        @method('DELETE')
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Vertically Centered</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Are you sure want to delete this content ? <span class="fw-bold">{{$article->title}}</span>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div><!-- End Vertically centered Modal-->
        </div>
        <div class="card-body">
            <div class="news-title d-flex justify-content-center mb-2">
                <h3 class="fw-bold" style="text-transform:uppercase;">{{$article->title}}</h3>
            </div>
            <div class="head-section d-flex justify-content-center">
                <div>
                    <img class="" src="/contentimg/{{$article->image}}" alt="news-pic" style="width: 100%;">
                    <p class="d-flex justify-content-center captions">{{$article->caption}}</p>
                </div>
            </div>
            <div class="body-section mb-5">
                <div class="news-fill">
                    <p class="passive-text fw-normal" style="text-align: justify;">{!!$article->description!!}</p>
                </div>
            </div>
            <div class="footer-section">
                <div class="form-floating mb-3">
                    <textarea class="form-control" placeholder="Leave a comment here" rows="10" cols="10" id="floatingTextarea" style="height: 100px; resize:none;"></textarea>
                    <label for="floatingTextarea">Comments</label>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection