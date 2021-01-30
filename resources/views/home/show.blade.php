@extends('layout.master')

@section('title', 'Detail')

@section('content')

<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-4 text-center">

            <h3>{{ $school->name_school }}</h3>

            <img src="https://asset.kompas.com/crops/tv2xzxDr196GLE3tU7MuPJRI3Sg=/0x0:0x0/750x500/data/photo/2021/01/07/5ff702f1f0904.jpg" style="max-width: 350px" class="mt-4" alt="">

            <div class="body text-left mt-5">
                <div>Adress : {{ $school->address }} </div>
                <div>Level : {{ $school->school_level }} </div>
                <div>Status : {{ $school->status_school }} </div>
                <div>Insert by : {{ $school->user->name }} </div>

            </div>

            <div class="d-block mt-4">
                <a href="" class="btn btn-primary btn-sm">Edit</a>
                <a href="" class="btn btn-danger btn-sm">Hapus</a>
                <a href="/" class="btn btn-secondary btn-sm">Kembali</a>

            </div>

        </div>
    </div>
</div>

@endsection
