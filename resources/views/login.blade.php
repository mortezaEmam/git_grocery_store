@extends('layouts.master')
@section('content')


<div class="w3_login">
    <h3>ورود/ ثبت نام</h3>
    <div class="w3_login_module">
        <div class="module form-module">
            <div class="toggle"><i class="fa fa-times fa-pencil"></i>
                <div class="tooltip">مرا کلیک کن</div>
            </div>
            <div class="form">
                <h2>
                    وارد حساب کاربری خود شوید</h2>
                <form action="{{route('user.login')}}" method="post">
                    @csrf
                    <input type="email" name="email" placeholder="نام کاربری" required=" ">
                    <input type="password" name="password" placeholder="رمز عبور" required=" ">
                    <input type="submit" value="ورود">
                </form>
            </div>

            <div class="cta"><a href="#">رمز عبور خود را فراموش کرده اید؟</a></div>
        </div>
    </div>
    <script>
        $('.toggle').click(function(){
            // Switches the Icon
            $(this).children('i').toggleClass('fa-pencil');
            // Switches the forms
            $('.form').animate({
                height: "toggle",
                'padding-top': 'toggle',
                'padding-bottom': 'toggle',
                opacity: "toggle"
            }, "slow");
        });
    </script>
</div>

@endsection
