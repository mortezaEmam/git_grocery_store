<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>


    <link rel="stylesheet" href="{{asset('dashboard/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('dashboard/css/style.css') }}">
</head>
<body>
<div class="topmenu">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

                <a class="btn btn-primary" href="{{route('home.index')}}">نمایش سایت</a>
                <a class="btn btn-danger" href="{{route('logout')}}">خروج</a>


            </div>
        </div>
    </div>
</div>


<div class="container-fluid">
    <div class="admin-container">
        <div class="row">
            <div class="col-md-2">
                <div class="admin-menu">
                    @include('admin.layout.admin-menu')
                </div>
            </div>

            <div class="col-md-10">
                @yield('content')
            </div>
        </div>
    </div>
</div>


<script src="{{ asset('dashboard/js/jquery-1.11.3.min.js') }}"></script>
<script src="{{ asset('dashboard/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('dashboard/js/main.js') }}"></script>

</body>
</html>
