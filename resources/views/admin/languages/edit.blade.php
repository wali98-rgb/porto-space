@extends('admin.layouts.master')

@section('main_body')
    <!-- Page-header start -->
    <div class="page-header card">
        <div class="card-block">
            <h5 class="m-b-10">Bahasa Pemograman</h5>
            <p class="text-muted m-b-10">Halaman untuk memanajemen data bahasa pemograman.</p>
            <ul class="breadcrumb-title b-t-default p-t-10">
                <li class="breadcrumb-item">
                    <a href="{{ route('language.index') }}"> <i class="fa fa-globe"></i> </a>
                </li>
                <li class="breadcrumb-item"><a href="#!">Halaman</a>
                </li>
                <li class="breadcrumb-item"><a href="{{ route('language.index') }}">Bahasa Pemograman</a>
                </li>
                <li class="breadcrumb-item"><a href="{{ route('language.create') }}">Tambah Data</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- Page-header end -->

    <div class="page-body">
        <!-- Basic Form Inputs card start -->
        <div class="card">
            <div class="card-header">
                <a href="{{ route('language.index') }}" class="btn btn-danger">Kembali</a>
                <div class="card-header-right">
                    <ul class="list-unstyled card-option">
                        <li><i class="fa fa-chevron-left"></i></li>
                        <li><i class="fa fa-window-maximize full-card"></i></li>
                        <li><i class="fa fa-minus minimize-card"></i></li>
                        <li><i class="fa fa-refresh reload-card"></i></li>
                    </ul>
                </div>
            </div>
            <div class="card-block">
                <form action="{{ route('language.update', $language->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group row">
                        <label for="name_lang" class="col-sm-2 col-form-label">Nama Bahasa</label>
                        <div class="col-sm-10">
                            <input type="text" value="{{ $language->name_lang }}" name="name_lang" id="name_lang"
                                class="form-control" placeholder="Contoh: JavaScript" autofocus>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="slug_lang" class="col-sm-2 col-form-label">Slug Bahasa</label>
                        <div class="col-sm-10">
                            <input type="text" value="{{ $language->slug_lang }}" name="slug_lang" id="slug_lang"
                                class="form-control" placeholder="Contoh: javascript">
                        </div>
                    </div>
                    <div class="form-group text-right">
                        <button type="reset" class="btn btn-warning">Reset</button>
                        <button type="submit" class="btn btn-success">Edit</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- Basic Form Inputs card end -->
    </div>
@endsection
