@extends('layout.master')

@section('title', 'Detail')

@section('content')

<div class="container mb-5">
    <div class="row justify-content-center mt-5">
        <div class="col-4 text-center">

            <h3>{{ $school->name_school }}</h3>

            <img src="/storage/{{ $school->logo_school }}" style="max-width: 350px" class="mt-4" alt="">

            <div class="body text-left mt-5">
                <div>Adress : {{ $school->address }} </div>
                <div>Level : {{ $school->school_level }} </div>
                <div>Status : {{ $school->status_school }} </div>
                <div>Insert by : {{ $school->user->name }} </div>

            </div>

            <div class="d-block mt-4">
                @auth
                @if (Auth()->user()->id == $school->id)
                <a href="" class="btn btn-primary btn-sm">Edit</a>
                <a href="/{{ $school->id }}/delete" class="btn btn-danger btn-sm">Hapus</a>
                @endif
                @endauth
                <a href="/" class="btn btn-secondary btn-sm">Kembali</a>

            </div>

        </div>
    </div>
</div>

@endsection
