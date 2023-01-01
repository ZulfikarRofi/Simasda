@extends('layout.master')
@section('page', 'Articles Title')
@section('page', 'Articles Title')
@section('content')

<div class="card">
    <div class="article-content">
        <h5 class="card-title mb-2">Article Page <span> | Article's title</span></h5>
        <div class="card-body">
            <div class="news-title d-flex justify-content-center mb-2">
                <h3>ARTICLES TITLES</h3>
            </div>
            <div class="head-section d-flex justify-content-center">
                <div>
                    <img class="" src="assets/img/news-2.jpg" alt="news-pic" style="width: 100%;">
                    <p class="d-flex justify-content-center captions">picture caption</p>
                </div>
            </div>
            <div class="body-section mb-5">
                <div class="news-fill">
                    <p class="passive-text fw-normal" style="text-align: justify;">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsam, cupiditate atque necessitatibus fugiat illum corporis non doloremque nesciunt consequatur voluptatum. Dicta possimus quod exercitationem nam porro eveniet laborum neque illo? Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa repellat sequi possimus ipsam ducimus sunt! Quam, nam assumenda ab odit voluptas excepturi minus vero mollitia laudantium necessitatibus fugit quisquam deleniti? Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur enim, nostrum natus delectus, nisi, ratione nihil facere rerum cupiditate similique aspernatur quaerat rem sint non voluptates. Exercitationem odit obcaecati reiciendis. Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta corporis ea ipsum cumque sapiente neque, enim consequuntur corrupti ratione quidem, accusamus, magni consectetur harum. Et saepe facere itaque iste vel?</p>
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
