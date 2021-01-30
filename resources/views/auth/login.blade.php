@extends('layout.auth')

@section('title', 'Login')

@section('content')

<div class="container">
    <div class="row justify-content-center mt-3">
        <div class="col-7">
            @if(Session::has('error'))
                <div class="alert alert-danger text-center" role="alert">
                    {{ Session::get('error') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
        </div>
    </div>
    <div class="row justify-content-center" style="margin-top: 100px">
        <div class="col-4">

            <h2>Login</h2>

            <form action="/login/post" method="POST" class="mt-4" autocomplete="off">
                @csrf
                <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" class="form-control" type="email" name="email" placeholder="Masukkan Email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input id="password" class="form-control" type="password" name="password" placeholder="Masukkan Password">
                </div>

                <button class="btn btn-success mt-3" type="submit">Login</button>
            </form>

        </div>
    </div>
</div>

@endsection
