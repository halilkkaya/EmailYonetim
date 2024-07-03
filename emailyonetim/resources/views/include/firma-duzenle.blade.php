@extends('master')

@section('title')
     Firma Düzenleme - Toplu Mail Yöentimi
@endsection
@section('css')
@endsection

@section('main')




    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Firma Düzenle</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="{{ route('index') }}"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page"></li>
                            <a href="{{ route('firma-listesi') }}">
                            <li class="breadcrumb-item active" aria-current="page">Firma Listesi </li>
                            </a>
                            <li class="breadcrumb-item active" aria-current="page"></li>
                            <li class="breadcrumb-item active" aria-current="page">Firma Düzenle </li>
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

                    <form action="{{ route('firma-duzenle-post',$firmaBilgisi->id) }}" method="post">
                        @csrf
                        <div class="card">
                            <div class="card-body">
                                <h6 class="mb-0 text-uppercase">Firma Düzenle</h6>
                                <hr />
                                <input class="form-control form-control-lg mb-3" type="text"
                                    placeholder="Unvan" value="{{ $firmaBilgisi->unvan }}"  name="unvan" aria-label=".form-control-lg example">
                                <input class="form-control form-control-lg mb-3" type="text"
                                    placeholder="Alan" value="{{ $firmaBilgisi->alan }}"  name="alan" aria-label=".form-control-lg example">
                                <input class="form-control form-control-lg mb-3" type="bigInteger"
                                    placeholder="TC Kimlik No" value="{{ $firmaBilgisi->tckn }}"  name="tckn" aria-label=".form-control-lg example">
                                <input class="form-control form-control-lg mb-3" type="date"
                                    placeholder="kurulus gg/aa/yyyy" value="{{ $firmaBilgisi->kurulus }}"  name="kurulus" aria-label=".form-control-lg example">
                                <input class="form-control form-control-lg mb-3" type="text"
                                    placeholder="sanayisicil" value="{{ $firmaBilgisi->sanayisicil }}"  name="sanayisicil" aria-label=".form-control-lg example">
                                <input class="form-control form-control-lg mb-3" type="text"
                                    placeholder="ticaretsicil" value="{{ $firmaBilgisi->ticaretsicil }}"  name="ticaretsicil" aria-label=".form-control-lg example">
                                    <input class="form-control form-control-lg mb-3" type="text"
                                    placeholder="Sahibi" value="{{ $firmaBilgisi->sahibi }}" name="sahibi" aria-label=".form-control-lg example">
                                <input class="btn btn-success" type="submit" placeholder="ilet" value="firma güncelle"
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
