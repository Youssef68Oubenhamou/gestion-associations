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

                <a href="{{ route('admin-association.index') }}" class="nav_link active">
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
    <caption>List of Associations</caption>
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">User Role</th>
        <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($associations as $association)
            <tr>
                <th scope="row">{{ $association->id }}</th>
                <td>{{ $association->name }}</td>
                <td>{{ $association->email }}</td>
                <td>{{ $association->user_type }}</td>
                <td>
                <button class="btn btn-light">
                    <a href="{{ route('admin-association.show' , $association->id) }}">
                        Association Offers
                    </a>
                </button>
                <br />
                <form action="{{ route('admin-association.destroy' , $association->id) }}" method="post">
                        
                        @csrf
                        @method("DELETE")

                        <button type="submit" class="btn btn-danger" style="width: 160px" >
                            Delete
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" ></script>
<script src="{{ asset('js/layout.js') }}"></script>
</body>
</html>