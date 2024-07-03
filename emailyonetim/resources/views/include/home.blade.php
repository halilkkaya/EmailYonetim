 @extends('master')

 @section('title')
     Toplu Mail Yönetimi
 @endsection
 @section('css')
     <style>


.customers-list-item {
    padding: 10px;
    border-top: 1px solid #ddd;
    border-bottom: 1px solid #ddd;
    display: flex;
    align-items: center;
}

.profil-harf {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background-color: #000000;
    color: #fff;
    font-size: 20px;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-right: 10px;
}

.font-14 {
    font-size: 14px;
    font-weight: bold;
    margin-bottom: 5px;
}

.font-13 {
    font-size: 13px;
    color: #888;
    margin-bottom: 0;
}

/* Tablo başlıklarının stili */
.baslik-column {
    font-size: 14px;
    font-weight: bold;
    padding: 10px;
    text-align: left;
    vertical-align: middle;
}

.tarih-column {
    font-size: 14px;
    font-weight: bold;
    padding: 10px;
    text-align: left;
    vertical-align: middle;
}

.metin-column {
    font-size: 14px;
    padding: 10px;
    text-align: left;
    vertical-align: middle;
}

.table td {
    font-size: 14px;
    padding: 10px;
    text-align: left;
    vertical-align: middle;
}

.metin-column {
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    max-width: 200px;
}
/* Tablo satırları için hover efekti */
.table tbody tr:hover {
    background-color: #f0f0f0; /* Mouse üstüne gelindiğinde arka plan rengini değiştirin */
    transform: translateY(-5px); /* Satırı 5 piksel yukarı taşıyarak öne çıkma efekti oluşturur */
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Hafif bir gölge ekler */
    transition: all 0.2s ease-in-out; /* Dönüşüm süresi ve efekt ekleyin */
}



     </style>
 @endsection

 @section('main')
     <!--start page wrapper -->
     <div class="page-wrapper">
         <div class="page-content">

             <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
                 <div class="col">
                     <div class="card radius-10 overflow-hidden">
                         <div class="card-body">
                             <div class="d-flex align-items-center">
                                 <div>
                                     <p class="mb-0">Toplam Gonderilen Mail</p>
                                     <h5 class="mb-0">{{ $mailsayisi }}</h5>
                                 </div>
                                 <div class="ms-auto"> <i class='bx bx-message font-30'></i>
                                 </div>
                             </div>
                         </div>
                         <div class="" id="chart1"></div>
                     </div>
                 </div>
                 <div class="col">
                     <div class="card radius-10 overflow-hidden">
                         <div class="card-body">
                             <div class="d-flex align-items-center">
                                 <div>
                                     <p class="mb-0">Müşteri sayısı</p>
                                     <h5 class="mb-0">{{ $musterisayisi }}</h5>
                                 </div>
                                 <div class="ms-auto"> <i class='bx bx-user font-30'></i>
                                 </div>
                             </div>
                         </div>
                         <div class="" id="chart2"></div>
                     </div>
                 </div>

                 <div class="col">
                    <div class="card radius-10 overflow-hidden">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <p class="mb-0">Firma sayısı</p>
                                    <h5 class="mb-0">{{ $firmasayisi }}</h5>
                                </div>
                                <div class="ms-auto"> <i class='bx bx-group font-30'></i>
                                </div>
                            </div>
                        </div>
                        <div class="" id="chart3"></div>
                    </div>
                </div>
             </div><!--end row-->








             <div class="row">
                 <div class="col-6 col-xl-6 d-flex">
                     <div class="card radius-10 w-100">
                         <div class="card-body">
                             <div class="d-flex align-items-center">
                                 <div>
                                     <h5 class="mb-0">Son 5 Yeni Müşteri</h5>
                                 </div>
                                 <div class="ms-auto">
                                     <a href="{{ route('musteri-ekle') }}" class="btn btn-primary btn-sm radius-30">
                                         Yeni Müşteri Ekle</a>
                                     <a href="{{ route('musteri-liste') }}" class="btn btn-primary btn-sm radius-30">Tüm
                                         Müşterileri Gör</a>
                                 </div>
                             </div>
                         </div>

                         {{-- class="rounded-circle" --}}

                         <div class="customers-list p-3 mb-3">
                             @foreach ($musteriler as $musteri)
                                 <?php
                                     $adSoyadBasHarf = strtoupper(substr($musteri->adsoyad, 0, 1));
                                 ?>

                                 <div
                                     class="customers-list-item d-flex align-items-center border-top border-bottom p-2 cursor-pointer">
                                     <div>
                                         <div class="profil-harf rounded-circle">
                                             {{ $adSoyadBasHarf }}
                                         </div>
                                     </div>
                                     <div class="ms-2">
                                         <h6 class="mb-1 font-14">{{ $musteri->adsoyad }}</h6>
                                         <p class="mb-0 font-13 text-secondary">{{ $musteri->mail }}</p>
                                     </div>
                                     <div class="list-inline d-flex customers-contacts ms-auto">
                                         <a src href="{{ route('musteri-duzenle', $musteri->id) }}"
                                             class="btn btn-primary bx bx-edit"></a>



                                     </div>
                                 </div>
                             @endforeach
                         </div>

                     </div>
                 </div>
                 <div class="col-6 col-xl-6 d-flex">
                    <div class="card radius-10 w-100">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <h5 class="mb-0">Son 5 Yeni Firma</h5>
                                </div>
                                <div class="ms-auto">
                                    <a href="{{ route('firma-ekle') }}" class="btn btn-primary btn-sm radius-30">
                                        Yeni Firma Ekle</a>
                                    <a href="{{ route('firma-listesi') }}" class="btn btn-primary btn-sm radius-30">Tüm
                                        Firmaları Gör</a>
                                </div>
                            </div>
                        </div>

                        {{-- class="rounded-circle" --}}

                        <div class="customers-list p-3 mb-3">
                            @foreach ($firmalar as $firma)
                                <?php
                                    $adSoyadBasHarf = strtoupper(substr($firma->unvan, 0, 1));
                                ?>

                                <div
                                    class="customers-list-item d-flex align-items-center border-top border-bottom p-2 cursor-pointer">
                                    <div>
                                        <div class="profil-harf rounded-circle">
                                            {{ $adSoyadBasHarf }}
                                        </div>
                                    </div>
                                    <div class="ms-2">
                                        <h6 class="mb-1 font-14">{{ $firma->unvan }}</h6>
                                        <p class="mb-0 font-13 text-secondary">{{ $firma->alan }}</p>
                                    </div>
                                    <div class="list-inline d-flex customers-contacts ms-auto">
                                        <a src href="{{ route('firma-duzenle', $firma->id) }}"
                                            class="btn btn-primary bx bx-edit"></a>



                                    </div>
                                </div>
                            @endforeach
                        </div>

                    </div>
                </div>
                 <div class="row">
                     <div class="col">
                         <div class="card radius-10 mb-0">
                             <div class="card-body">
                                 <div class="d-flex align-items-center">
                                     <div>
                                         <h5 class="mb-1">Son 10 Mail</h5>
                                     </div>
                                     <div class="ms-auto">
                                         <a href="{{ route('gelen-kutusu') }}" class="btn btn-primary btn-sm radius-30">Tüm
                                             Mailleri Gör</a>
                                     </div>
                                 </div>

                                 <div class="table-responsive mt-3">
                                    <table class="table align-middle mb-0">
                                        <thead class="table-light">
                                            <tr>
                                                <th class="baslik-column">Başlık</th>
                                                <th class="tarih-column">Oluşturulma Tarihi</th>
                                                <th class="metin-column">Mail İçeriği</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($mailler as $mail)
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="ms-2">
                                                            <h6 class="mb-1 halil">{{ $mail->baslik }}</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>{{ $mail->created_at->diffForHumans() }}</td>
                                                <td class="metin-column">
                                                    {{ substr($mail->metin, 0, 15) }}{{ strlen($mail->metin) > 15 ? '...' : '' }}
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>


                             </div>
                         </div>
                     </div>
                 </div><!--end row-->

             </div>
         </div>
         <!--end page wrapper -->
     @endsection
     @section('js')
         <script>
             $(document).ready(function() {
                 $("#silModal").hide(); // Modalı başlangıçta gizle

                 // Silme bağlantısına tıklanırsa modalı göster
                 $(".btn-danger").click(function() {
                     $("#silModal").show();
                 });

                 // Evet'e tıklanırsa silme işlemi gerçekleşsin
                 $("#onayla").click(function() {
                     window.location.href = "{{ route('musteri-silmek', $musteri->id) }}";
                 });

                 // İptal'e tıklanırsa modalı gizle
                 $("#iptal").click(function() {
                     $("#silModal").hide();
                 });
             });
         </script>

     @endsection
