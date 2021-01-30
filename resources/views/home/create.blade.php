@extends('layout.master')

@section('title', 'create')

@section('content')

<div class="container">
    <div class="row mt-5 mb-5">
        <div class="col-6">

            <div class="card">
                <div class="card-header">
                    Add Data
                </div>
                <div class="card-body">
                    <form action="/{{ Auth()->user()->id }}/store" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="input-group mb-3">
                            <div class="custom-file">
                              <input type="file" class="custom-file-input" id="logo_school" name="logo_school">
                              <label class="custom-file-label" for="logo_school">Tambahkan Logo Sekolah</label>
                            </div>
                          </div>

                        <div class="form-group">
                            <label for="name_school">Nama Sekolah</label>
                            <input id="name_school" class="form-control" type="text" name="name_school">
                        </div>
                        <div class="form-group">
                            <label for="npsn">NPSN</label>
                            <input id="npsn" class="form-control" type="text" name="npsn">
                        </div>
                        <div class="form-group">
                            <label for="school_level">Level Sekolah</label>
                            <input id="school_level" class="form-control" type="text" name="school_level">
                        </div>
                        <div class="form-group">
                            <label for="status_school">Status Sekolah</label>
                            <input id="status_school" class="form-control" type="text" name="status_school">
                        </div>
                        <div class="form-group">
                            <label for="address">Alamat</label>
                            <input id="address" class="form-control" type="text" name="address">
                        </div>

                        <button class="btn btn-primary btn-sm" type="submit">Add</button>
                        <a href="/" class="btn btn-secondary btn-sm">Back</a>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
