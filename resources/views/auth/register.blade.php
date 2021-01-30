@extends('layout.auth')

@section('title', 'Register')

@section('content')

<div class="container">
    <div class="row justify-content-center mt-2">
        <div class="col-7">
            @if(Session::has('success'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
        </div>
    </div>
    <div class="row justify-content-center" style="margin-top: 50px">
        <div class="col-4">

            <h2>Register</h2>

            <form action="/postRegister" method="POST" class="mt-3">
                @csrf
                <div class="form-group">
                    <label for="name">Nama</label>
                    <input id="name" class="form-control" type="text" name="name" placeholder="Masukkan Nama">
                    @error('name')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" class="form-control" type="email" name="email" placeholder="Masukkan Email">
                    @error('email')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input id="password" class="form-control" type="password" name="password" placeholder="Masukkan password">
                    @error('password')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password_confirmation">Password Confirmation</label>
                    <input id="password_confirmation" class="form-control" type="password" name="password_confirmation" placeholder="Password Confirmation">
                </div>

                <button class="btn btn-success mt-3">Register</button>
            </form>

        </div>
    </div>
</div>

@endsection
