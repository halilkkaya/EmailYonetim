@extends('master')

@section('title')
    Müşteri Liste - Toplu Mail Yöentimi
@endsection
@section('css')
    <link href="{{ asset('/') }}assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
@endsection

@section('main')
    <div class="page-wrapper">
        <div class="page-content">

            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Müşteri Listesi</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="{{ route('index') }}"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Müşteri Lİstesi</li>
                        </ol>
                        @if (session('success'))
                            <div class="alert alert-danger ">{{ session('success') }}</div>
                        @endif
                        <hr />
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Sıra No</th>
                                                <th>Müşteri Bilgisi</th>
                                                <th>Müşteri E-Mail</th>
                                                <th>Müşteri telefon</th>
                                                <th>İşlemler</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if ($musteriler)
                                                @foreach ($musteriler as $musteri)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $musteri->adsoyad }}</td>
                                                        <td>{{ $musteri->mail }}</td>
                                                        <td>{{ $musteri->telefon }}</td>
                                                        <td>
                                                            <a src href="{{ route('musteri-duzenle', $musteri->id) }}"
                                                                class="btn btn-primary"><i
                                                                    class="bx bx-edit"></i>Düzenle</a>
                                                            <a href="{{ route('musteri-sil', $musteri->id) }}"
                                                                class="btn btn-danger"><i
                                                                    class="bx bx-trash">kaldır</a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endif
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Sıra No</th>
                                                <th>Müşteri Bilgisi</th>
                                                <th>Müşteri E-Mail</th>
                                                <th>Müşteri telefon</th>
                                                <th>İşlemler</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>

                        </div>
                        <h6 class="mb-0 text-uppercase">DataTable Import</h6>
                        <hr />

                    </nav>
                </div>
            </div>

    </div>
    </div>

@endsection
@section('js')
    <script src="{{ asset('/') }}assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('/') }}assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
@endsection
