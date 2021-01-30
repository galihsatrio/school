@extends('layout.master')

@section('title', 'Home')

@section('content')

<div class="container">
    <div class="row mt-5 mb-4">
        <div class="col-12">

            <h2>Data Sekolah</h2>
            <a href="/{{ Auth()->user()->id }}/create" class="btn btn-primary float-right">Add School</a>

        </div>
    </div>
    <div class="row">
        @foreach ( $schools as $school )
        <div class="col-3">
            <div class="card p-1" style="width: 15rem;">
                <img class="card-img-top" src="https://asset.kompas.com/crops/tv2xzxDr196GLE3tU7MuPJRI3Sg=/0x0:0x0/750x500/data/photo/2021/01/07/5ff702f1f0904.jpg" alt="Card image cap">
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
