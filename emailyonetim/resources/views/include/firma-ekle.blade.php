@extends('master')

@section('title')
    Yeni Firma Tanımlama - Toplu Mail Yöentimi
@endsection
@section('css')
@endsection

@section('main')




    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Forumlar</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="{{ route('index') }}"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Firma Formu</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!--end breadcrumb-->
            <div class="row">
                <div class="col">
                    @if($errors->any())
                        @foreach ($errors->all() as $hatalar)
                            <div class="alert alert-danger">{{ $hatalar }}</div>
                        @endforeach
                    @endif
                    @if(session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    <form action="{{ route('firma-ekle-post') }}" method="post">
                        @csrf
                        <div class="card">
                            <div class="card-body">
                                <h6 class="mb-0 text-uppercase">Firma Formu</h6>
                                <hr />
                                <input class="form-control form-control-lg mb-3" type="text"
                                    placeholder="Unvan"  name="unvan" aria-label=".form-control-lg example">
                                <input class="form-control form-control-lg mb-3" type="text"
                                    placeholder="Alan"  name="alan" aria-label=".form-control-lg example">
                                <input class="form-control form-control-lg mb-3" type="bigInteger"
                                    placeholder="TC Kimlik No"   name="tckn" aria-label=".form-control-lg example">
                                <input class="form-control form-control-lg mb-3" type="date"
                                    placeholder="kurulus"  name="kurulus" aria-label=".form-control-lg example">
                                <input class="form-control form-control-lg mb-3" type="text"
                                    placeholder="sanayisicil"  name="sanayisicil" aria-label=".form-control-lg example">
                                <input class="form-control form-control-lg mb-3" type="text"
                                    placeholder="ticaretsicil"  name="ticaretsicil" aria-label=".form-control-lg example">
                                <input class="form-control form-control-lg mb-3" type="text"
                                    placeholder="Sahibi"  name="sahibi" aria-label=".form-control-lg example">
                                <input class="btn btn-success" type="submit" placeholder="ilet" value="firma ekle"
                                    aria-label=".form-control-sm example">
                            </div>
                        </div>
                    </form>



                </div>
            </div>
            <!--end row-->
        </div>
    </div>

@endsection
@section('js')
@endsection
