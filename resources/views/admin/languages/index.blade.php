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
            </ul>
        </div>
    </div>
    <!-- Page-header end -->

    <div class="page-body">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('language.create') }}" class="btn btn-success">Tambah Bahasa Pemograman</a>
                <div class="card-header-right">
                    <ul class="list-unstyled card-option">
                        <li><i class="fa fa-chevron-left"></i></li>
                        <li><i class="fa fa-window-maximize full-card"></i></li>
                        <li><i class="fa fa-minus minimize-card"></i></li>
                        <li><i class="fa fa-refresh reload-card"></i></li>
                    </ul>
                </div>

            </div>
            <div class="card-block table-border-style">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>Slug</th>
                                <th width="2rem">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($language as $key=>$item)
                                <tr>
                                    <th>{{ $key + 1 }}</th>
                                    <td>{{ $item->name_lang }}</td>
                                    <td>{{ $item->slug_lang }}</td>
                                    <td>
                                        <a href="{{ route('language.edit', $item->id) }}" class="btn btn-warning"><i
                                                class="ti-pencil-alt m-0"></i></a>
                                        <a href="{{ route('language.destroy', $item->id) }}" class="btn btn-danger"
                                            data-confirm-delete="true"><i class="ti-trash m-0"></i></a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td align="center" colspan="4">Bahasa belum ditambahkan.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    @if ($language->isEmpty())
                        {{ null }}
                    @else
                        <div class="d-flex justify-content-end pt-4">
                            {{ $language->links() }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <!-- Hover table card end -->
    </div>
@endsection
