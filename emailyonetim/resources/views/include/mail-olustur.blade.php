@extends('master')

@section('title')
  Toplu Mail Oluşturma - Toplu Mail Yöentimi
@endsection
@section('css')
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
<style>
    textarea {
        width: 1680px; /* Genişliği ayarlayın istediğiniz değere */
        height: 100px; /* Yüksekliği ayarlayın istediğiniz değere */
    }
</style>

@endsection

@section('main')




    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Yeni Mail Oluştur</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="{{ route('index') }}"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Yeni Mail Oluştur</li>
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

                    <form action="{{ route('mail-olustur-post') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card">
                            <div class="card-body">
                                <h6 class="mb-0 text-uppercase">Yeni Mail Oluştur</h6>
                                <hr />
                                <input class="form-control form-control-lg mb-3" type="text"
                                    placeholder="Başlık" name="baslik" aria-label=".form-control-lg example">
                                    <textarea id="mytextarea" name="metin"></textarea>
                                <select class="form-control form-control-sm mb-3" name="tema" aria-label=".form-control-sm example">
                                    <option value="1">şablon 1</option>
                                    <option value="2">şablon 2</option>
                                    <option value="3">şablon 3</option>
                                </select>
                                <button type="submit" class="btn btn-success send-email">Send Email</button>




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

 <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>



<script>var metin = document.getElementById("metin").value;
</script>
<script>
    var quill = new Quill('#mytextarea', {
      theme: 'snow'  // Tema seçeneği: snow veya diğerleri
    });

    var editorContent = quill.root.innerHTML;

  </script>
<script type="text/javascript">

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(".send-email").click(function(){
        var selectRowsCount = $("input[class='user-checkbox']:checked").length;



            var ids = $.map($("input[class='user-checkbox']:checked"), function(c){return c.value; });

            $.ajax({
               type:'POST',
               url:"{{ route('ajax.send.email') }}",
               data:{ids:ids},
               success:function(data){
                  alert(data.success);
               }
            });


        console.log(selectRowsCount);
    });
@endsection
