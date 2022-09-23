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
					<h2>ایجاد یک حساب کاربری</h2>
					<form action="{{route('user.register')}}" method="post">
                        @csrf
                        <label for="username">نام کاربری</label>
					    <input type="text" id="username" name="Username" value="{{old('Username')}}" placeholder="نام کاربری" required>

                        <label for="emaila">ایمیل</label>
                        <input type="email" id="email" name="Email" value="{{old('Email')}}" placeholder="ایمیل" required>

                        <label for="phone">تلفن</label>
                        <input type="text" id="phone" name="Phone" value="{{old('Phone')}}" placeholder="تلفن" required>

                        <label for="password">رمز عبور</label>
					    <input type="password" id="Password" name="Password" value="{{old('Password')}}" placeholder="رمز عبور" required>

                        <label for="confirmed-1">تکرار رمز عبور </label>
                        <input type="password" id="confirmed-1" name="confirmed" value="{{old('confirmed')}}" placeholder="تکرار رمز عبور"  required compare=("Password")>

                        <input type="submit"  value="ثبت نام">
					</form>
				  </div>
				  <div class="cta"><a href="#">رمز عبور خود را فراموش کرده اید؟</a></div>
				</div>
			</div>

		</div>

	@endsection
