@extends('layouts.master')

@section('content')
<div class="login-form">
    <form action="{{ route('register') }}" method="post">
        @csrf

        @error('terms')
            <small class="text-danger">{{ $message }}</small>
        @enderror

        <div class="form-group">
            <label>Username</label>
            <input class="au-input au-input--full" type="text" name="name" placeholder="Username" value="{{ old('name') }}">
        </div>
        @error('name')
            <small class="text-danger">{{ $message }}</small>
        @enderror

        <div class="form-group">
            <label>Email Address</label>
            <input class="au-input au-input--full" type="email" name="email" placeholder="Email" value="{{ old('email') }}">
        </div>
        @error('email')
            <small class="text-danger">{{ $message }}</small>
        @enderror

        <div class="form-group">
            <label>Phone</label>
            <input class="au-input au-input--full" type="text" name="phone" placeholder="09-xxx-xxx" value="{{ old('phone') }}">
        </div>
        @error('phone')
            <small class="text-danger">{{ $message }}</small>
        @enderror

        <div class="form-group">
            <label>Gender</label>
            <select name="gender" class="form-control">
                <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Male</option>
                <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Female</option>
            </select>
        </div>

        <div class="form-group">
            <label>Role</label>
            <select name="role" class="form-control">

                <option value="user" {{ old('role') == 'user' ? 'selected' : '' }}>User</option>
                <option value="shop_admin" {{ old('role') == 'shop_admin' ? 'selected' : '' }}>Shop Admin</option>
            </select>
        </div>

        <div class="form-group">
            <label>Address</label>
            <input class="au-input au-input--full" type="text" name="address" placeholder="Enter Your Address" value="{{ old('address') }}">
        </div>
        @error('address')
            <small class="text-danger">{{ $message }}</small>
        @enderror

        <div class="form-group">
            <label>Password</label>
            <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
        </div>
        @error('password')
            <small class="text-danger">{{ $message }}</small>
        @enderror

        <div class="form-group">
            <label>Confirm Password</label>
            <input class="au-input au-input--full" type="password" name="password_confirmation" placeholder="Confirm Password">
        </div>
        @error('password_confirmation')
            <small class="text-danger">{{ $message }}</small>
        @enderror

        <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">Register</button>
    </form>

    <div class="register-link">
        <p>
            Already have an account?
            <a href="{{ route('auth#loginPage') }}">Sign In</a>
        </p>
    </div>
</div>
@endsection
