@extends('layout.master')
@section('page', 'Articles Title')
@section('page', 'Articles Title')
@section('content')

<div class="card">
    <div class="article-content">
        <h5 class="card-title mb-2">Article Page <span> | {{$article->title}}</span></h5>
        <div class="card-body">
            <div class="news-title d-flex justify-content-center mb-2">
                <h3>{{$article->title}}</h3>
            </div>
            <div class="head-section d-flex justify-content-center">
                <div>
                    <img class="" src="assets/img/news-2.jpg" alt="news-pic" style="width: 100%;">
                    <p class="d-flex justify-content-center captions">{{$article->caption}}</p>
                </div>
            </div>
            <div class="body-section mb-5">
                <div class="news-fill">
                    <p class="passive-text fw-normal" style="text-align: justify;">{{$article->description}}</p>
                </div>
            </div>
            <div class="footer-section">
                <div class="form-floating mb-3">
                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" style="height: 100px;"></textarea>
                    <label for="floatingTextarea">Comments</label>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
