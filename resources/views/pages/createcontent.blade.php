@extends('layout.master')
@section('page', 'Create New Content')
@section('title', 'Create New Content')
@section('content')

<div class="row">
    <div class="card px-5 py-3">
        <div class="mb-2">
            <h5 class="card-title mb-0">Content Management <span> | Create Content</span></h5>
            <p class="passive-text">Fill these form until complete to create new content</p>
            <hr>
        </div>
        <div class="">
            <!-- Floating Labels Form -->
            <form class="row g-3">
                <div class="col-md-12">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingName" placeholder="New Content Title">
                        <label for="floatingTitle">New Content Title</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingEmail" placeholder="Publisher">
                        <label for="floatingPublisher">Publisher</label>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div>
                </div>
            </form><!-- End floating Labels Form -->
        </div>
        <!-- TinyMCE Editor -->
        <textarea class="tinymce-editor">
                <p>Hello World!</p>
                <p>This is TinyMCE <strong>full</strong> editor</p>
        </textarea><!-- End TinyMCE Editor -->
    </div>
</div>


@endsection
