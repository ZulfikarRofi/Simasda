@extends('layout.master')
@section('page', 'Create New Content')
@section('title', 'Create New Content')
@section('content')

<div class="row">
    <div class="card px-5 py-3">
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
        <div class="mb-2">
            <h5 class="card-title mb-0">Content Management <span> | Create Content</span></h5>
            <p class="passive-text">Fill these form until complete to create new content</p>
            <hr>
        </div>
        <form action="/createarticle" method="post">
            @csrf
            <div class="row mb-3 px-2">
                <input type="text" class="form-control" id="title" name="title" placeholder="New Content Title">
            </div>
            <div class="row mb-3 px-2">
                <input type="text" class="form-control" id="caption" name="caption" placeholder="New Content Caption">
            </div>
            <div class="row mb-3">
                <div class="col-6">
                    <input type="text" class="form-control" id="author" name="author" placeholder="Publisher">
                </div>
                <div class="col-6">
                    <input type="file" class="form-control" id="image" name="image">
                </div>
            </div>
            <div class="row mb-3 px-2">
                <textarea class="form-control" placeholder="Description here" id="description" name="description"></textarea>
            </div>
            <button type="submit" class="btn btn-primary float-end">Submit</button>
        </form>
    </div>
</div>


@endsection
