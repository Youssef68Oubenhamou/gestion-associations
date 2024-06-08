<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
    <title></title>
</head>
<body id="body-pd">
<header class="header" id="header">
    <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
    welcome name admin
    <div class="header_img"> <img src="https://i.imgur.com/hczKIze.jpg" alt=""> image admin </div>
</header>
<div class="l-navbar" id="nav-bar">
    <nav class="nav">

        <div>


            <div class="nav_list">

                <a href="{{ route('admin-association.index') }}" class="nav_link">
                    <i class='bx bx-grid-alt nav_icon'></i>
                    <span class="nav_name">Associations</span>
                </a>

                <a href="{{ route('admin-volunteer.index') }}" class="nav_link">
                    <i class='bx bx-user nav_icon'></i>
                    <span class="nav_name">Volunteers</span>
               </a>

                <a href="" class="nav_link">
                    <i class='bx bx-bookmark nav_icon'></i>
                    <span class="nav_name">Applications</span>
                </a>

                <!-- <a href="#" class="nav_link">
                    <i class='bx bx-bar-chart-alt-2 nav_icon'></i>
                    <span class="nav_name">Stats</span>
                </a> -->

            </div>
        </div>

        <a href="#" class="nav_link">
            <i class='bx bx-log-out nav_icon'></i>
            <span class="nav_name">SignOut</span>
        </a>
    </nav>
</div>
<table class="table caption-top">
    <caption>List of Volunteers</caption>
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
        </tr>
    </thead>
    <tbody>
        @foreach($offers as $offer)
            <tr>
                <th scope="row">{{ $offer->id }}</th>
                <td>{{ $offer->title }}</td>
                <td>{{ $offer->description }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" ></script>
<script src="{{ asset('js/layout.js') }}"></script>
</body>
</html>