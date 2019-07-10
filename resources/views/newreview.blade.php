<?php

?>


<html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

<!-- Styles -->
<style>
    html, body {
        background-color: #fff;
        color: #636b6f;
        font-family: 'Nunito', sans-serif;
        font-weight: 200;
        height: 100vh;
        margin: 0;
    }

    .full-height {
        height: 100vh;
    }

    .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
    }

    .position-ref {
        position: relative;
    }

    .top-right {
        position: absolute;
        right: 10px;
        top: 18px;
    }

    .content {
        text-align: center;
    }

    .title {
        font-size: 84px;
    }

    .links > a {
        color: #636b6f;
        padding: 0 25px;
        font-size: 13px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }

    .m-b-md {
        margin-bottom: 30px;
    }
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<meta charset="utf-8">
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="/home">Cars</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/home">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/car">Cars</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/newcar">New Car</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/review">View Reviews</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/newreview">New Review</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" name="query" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-warning" type="submit">Search</button>
        </form>
    </div>
</nav>

<div  class="flex-center position-ref full-height">
    <form action="/register_review" method="post">
        @csrf
        <div class="form-group">
            <label for="car_id">Car id</label>
            <input type="textarea" class="form-control" id="car_id" name="car_id" placeholder="e.g 1">
        </div>

        <div class="form-group">
            <label for="body">Review</label>
            <input type="textarea" class="form-control" id="body" name="body" placeholder="e.g This car is bomb af">
        </div>

        <div class="form-group">
            <input type="submit" value="Submit" class="btn btn-primary">
        </div>
    </form>
</div>



</body>
</html>
