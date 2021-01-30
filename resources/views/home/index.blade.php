@extends('layout.master')

@section('title', 'Home')

@section('content')

<div class="container">
    <div class="row mt-5 mb-4">
        <div class="col-12">

            <h2>Data Sekolah</h2>
            @auth
            <a href="/{{ Auth()->user()->id }}/create" class="btn btn-primary float-right">Add School</a>
            @endauth

        </div>
    </div>
    <div class="row">
        @foreach ( $schools as $school )
        <div class="col-3">
            <div class="card p-1" style="width: 15rem;">
                <img class="card-img-top" src="/storage/{{ $school->logo_school }}" alt="Card image cap">
                <div class="card-body mt-4">
                    <div style="font-size: 20px"><b> {{ $school->name_school }} </b></div>
                    <p class="text-secondary">{{ $school->status_school }}</p>
                    <a href="/{{ $school->id }}/detail" class="btn btn-primary btn-sm btn-block mt-2">Detail</a>
                </div>
            </div>
        </div>
        @endforeach

    </div>
</div>

@endsection
