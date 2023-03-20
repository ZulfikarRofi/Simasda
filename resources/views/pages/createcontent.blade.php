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
        <div class="row d-flex justify-content-center mb-4">
            <img id="output" alt="" style="width:30rem">
        </div>
        <form action="/createarticle" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3 px-2">
                <input type="text" class="form-control" id="title" name="title" placeholder="New Content Title">
            </div>
            <div class="row mb-3">
                <div class="col-8">
                    <input type="text" class="form-control" id="caption" name="caption" placeholder="New Content Caption">
                    <input type="text" class="form-control" id="author" name="author" value="Admin-{{auth()->user()->name}}" hidden>
                </div>
                <div class="col-4">
                    <input type="file" class="form-control" id="image" name="image" onchange="loadFile(event)">
                </div>
            </div>
            <textarea class="tinymce-editor" name="description" id="description" style="text-transform:capitalize;">Insert the content's description here !...</textarea>
            <button type="submit" class="btn btn-primary float-end mt-3">Submit</button>
        </form>
    </div>
</div>

<script>
    var loadFile = function(event) {
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
    };
</script>

@endsection