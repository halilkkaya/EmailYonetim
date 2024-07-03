 <!--start header wrapper-->
 <div class="header-wrapper">
     <!--start header -->
     <header>
         <div class="topbar d-flex align-items-center">
             <nav class="navbar navbar-expand">
                 <div class="topbar-logo-header">
                    <a href='index'>
                    <div class="">

                         <img src="{{ asset('/') }}assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
                     </div>
                    </a>
                     <a href="/index">
                         <div class="">
                             <h4 class="logo-text">E-Mail Gönderme</h4>
                         </div>
                     </a>
                 </div>
                 <div class="mobile-toggle-menu"><i class='bx bx-menu'></i></div>
                 <div class="top-menu-left d-none d-lg-block ps-3">
                     <ul class="nav">
                         <li class="nav-item">
                             <a class="nav-link" href="{{ route('toplu-mail-olusturma') }}"><i class='bx bx-envelope'></i></a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link" href="https://saatkac.info.tr/calendar"><i class='bx bx-calendar'></i></a>
                         </li>
                     </ul>

                 </div>
                 <div class="search-bar flex-grow-1">
                     <div class="position-relative search-bar-box">
                         <input type="text" class="form-control search-control" placeholder="Type to search...">
                         <span class="position-absolute top-50 search-show translate-middle-y"><i
                                 class='bx bx-search'></i></span>
                         <span class="position-absolute top-50 search-close translate-middle-y"><i
                                 class='bx bx-x'></i></span>
                     </div>
                 </div>
                 <div class="top-menu ms-auto">
                     <ul class="navbar-nav align-items-center">
                         <li class="nav-item mobile-search-icon">
                             <a class="nav-link" href="#"> <i class='bx bx-search'></i>
                             </a>
                         </li>
                         <li class="nav-item dropdown dropdown-large">
                             <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button"
                                 data-bs-toggle="dropdown" aria-expanded="false"> <i class='bx bx-category'></i>
                             </a>
                             <div class="dropdown-menu dropdown-menu-end">
                                 <div class="row row-cols-3 g-3 p-3">
                                     <div class="col text-center">
                                        <a href="{{ route('musteri-liste') }}">
                                         <div class="app-box mx-auto bg-gradient-cosmic text-white"><i
                                                 class='bx bx-group'></i>
                                         </div>
                                         <div class="app-title">Müşteriler</div>
                                        </a>
                                     </div>
                                     <div class="col text-center">
                                         <div class="app-box mx-auto bg-gradient-burning text-white"><i
                                                 class='bx bx-atom'></i>
                                         </div>
                                         <div class="app-title">Projeler</div>
                                     </div>
                                     <div class="col text-center">
                                         <div class="app-box mx-auto bg-gradient-lush text-white"><i
                                                 class='bx bx-shield'></i>
                                         </div>
                                         <div class="app-title">Taslaklar</div>
                                     </div>
                                     <div class="col text-center">
                                         <div class="app-box mx-auto bg-gradient-kyoto text-dark"><i
                                                 class='bx bx-notification'></i>
                                         </div>
                                         <div class="app-title">Haberler</div>
                                     </div>
                                 </div>
                             </div>
                         </li>
                         <li class="nav-item dropdown dropdown-large">
                             <a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative"
                                 href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <span
                                     class="alert-count">7</span>
                                 <i class='bx bx-bell'></i>
                             </a>
                             <div class="dropdown-menu dropdown-menu-end">
                                 <a href="javascript:;">
                                     <div class="msg-header">
                                         <p class="msg-header-title">Notifications</p>
                                         <p class="msg-header-clear ms-auto">Hepsini okunmuş olarak işaretle</p>
                                     </div>
                                 </a>
                                 <div class="header-notifications-list">
                                     <a class="dropdown-item" href="javascript:;">
                                         <div class="d-flex align-items-center">
                                             <div class="notify bg-light-primary text-primary"><i
                                                     class="bx bx-group"></i>
                                             </div>
                                             <div class="flex-grow-1">
                                                 <h6 class="msg-name">New Customers<span class="msg-time float-end">14
                                                         Sec
                                                         ago</span></h6>
                                                 <p class="msg-info">5 new user registered</p>
                                             </div>
                                         </div>
                                     </a>
                                     <a class="dropdown-item" href="javascript:;">
                                         <div class="d-flex align-items-center">
                                             <div class="notify bg-light-danger text-danger"><i
                                                     class="bx bx-cart-alt"></i>
                                             </div>
                                             <div class="flex-grow-1">
                                                 <h6 class="msg-name">Yeni Sipariş <span class="msg-time float-end">2
                                                         min
                                                         ago</span></h6>
                                                 <p class="msg-info">You have recived new orders</p>
                                             </div>
                                         </div>
                                     </a>
                                     <a class="dropdown-item" href="javascript:;">
                                         <div class="d-flex align-items-center">
                                             <div class="notify bg-light-success text-success"><i
                                                     class="bx bx-file"></i>
                                             </div>
                                             <div class="flex-grow-1">
                                                 <h6 class="msg-name">24 PDF File<span class="msg-time float-end">19
                                                         min
                                                         ago</span></h6>
                                                 <p class="msg-info">The pdf files generated</p>
                                             </div>
                                         </div>
                                     </a>
                                     <a class="dropdown-item" href="javascript:;">
                                         <div class="d-flex align-items-center">
                                             <div class="notify bg-light-warning text-warning"><i
                                                     class="bx bx-send"></i>
                                             </div>
                                             <div class="flex-grow-1">
                                                 <h6 class="msg-name">Time Response <span
                                                         class="msg-time float-end">28 min
                                                         ago</span></h6>
                                                 <p class="msg-info">5.1 min avarage time response</p>
                                             </div>
                                         </div>
                                     </a>
                                     <a class="dropdown-item" href="javascript:;">
                                         <div class="d-flex align-items-center">
                                             <div class="notify bg-light-info text-info"><i
                                                     class="bx bx-home-circle"></i>
                                             </div>
                                             <div class="flex-grow-1">
                                                 <h6 class="msg-name">New Product Approved <span
                                                         class="msg-time float-end">2 hrs ago</span></h6>
                                                 <p class="msg-info">Your new product has approved</p>
                                             </div>
                                         </div>
                                     </a>
                                     <a class="dropdown-item" href="javascript:;">
                                         <div class="d-flex align-items-center">
                                             <div class="notify bg-light-danger text-danger"><i
                                                     class="bx bx-message-detail"></i>
                                             </div>
                                             <div class="flex-grow-1">
                                                 <h6 class="msg-name">New Comments <span class="msg-time float-end">4
                                                         hrs
                                                         ago</span></h6>
                                                 <p class="msg-info">New customer comments recived</p>
                                             </div>
                                         </div>
                                     </a>
                                     <a class="dropdown-item" href="javascript:;">
                                         <div class="d-flex align-items-center">
                                             <div class="notify bg-light-success text-success"><i
                                                     class='bx bx-check-square'></i>
                                             </div>
                                             <div class="flex-grow-1">
                                                 <h6 class="msg-name">Your item is shipped <span
                                                         class="msg-time float-end">5 hrs
                                                         ago</span></h6>
                                                 <p class="msg-info">Successfully shipped your item</p>
                                             </div>
                                         </div>
                                     </a>
                                     <a class="dropdown-item" href="javascript:;">
                                         <div class="d-flex align-items-center">
                                             <div class="notify bg-light-primary text-primary"><i
                                                     class='bx bx-user-pin'></i>
                                             </div>
                                             <div class="flex-grow-1">
                                                 <h6 class="msg-name">New 24 authors<span class="msg-time float-end">1
                                                         day
                                                         ago</span></h6>
                                                 <p class="msg-info">24 new authors joined last week</p>
                                             </div>
                                         </div>
                                     </a>
                                     <a class="dropdown-item" href="javascript:;">
                                         <div class="d-flex align-items-center">
                                             <div class="notify bg-light-warning text-warning"><i
                                                     class='bx bx-door-open'></i>
                                             </div>
                                             <div class="flex-grow-1">
                                                 <h6 class="msg-name">Defense Alerts <span
                                                         class="msg-time float-end">2 weeks
                                                         ago</span></h6>
                                                 <p class="msg-info">45% less alerts last 4 weeks</p>
                                             </div>
                                         </div>
                                     </a>
                                 </div>
                                 <a href="javascript:;">
                                     
                                 </a>
                             </div>
                         </li>
                         <li class="nav-item dropdown dropdown-large">
                             <a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative"
                                 href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                 <span class="alert-count">8</span>
                                 <i class='bx bx-comment'></i>
                             </a>
                             <div class="dropdown-menu dropdown-menu-end">
                                 <a href="javascript:;">
                                     <div class="msg-header">
                                         <p class="msg-header-title">Mailler</p>

                                     </div>
                                 </a>
                                 <div class="header-message-list">

                                     </div>
                                 <a href="#">

                                 </a>
                             </div>
                         </li>
                     </ul>
                 </div>
             </nav>
         </div>
     </header>
     <!--end header -->
     <!--navigation-->
     <div class="nav-container">
         <div class="mobile-topbar-header">
             <div>

                 <img src="{{ asset('/') }}assets/images/logo-icon.png" class="logo-icon" alt="logo icon">

             </div>
             <div>
                 <h4 class="logo-text">E-mail Gönderme</h4>
             </div>
             <div class="toggle-icon ms-auto"><i class='bx bx-first-page'></i>
             </div>
         </div>
         <nav class="topbar-nav">
             <ul class="metismenu" id="menu">
                 <li>
                     <a href="/index">
                        <div class="parent-icon"><i class="bx bx-home"></i>
                        </div>
                         <div class="menu-title">Anasayfa</div>
                     </a>
                 </li>
                 <li>
                     <a href="javascript:;" class="has-arrow">
                         <div class="parent-icon"><i class="bx bx-category"></i>
                         </div>
                         <div class="menu-title">Müşteriler</div>
                     </a>
                     <ul>
                         <li> <a href="{{ route("musteri-liste") }}"><i class="bx bx-right-arrow-alt"></i>Müşteri Listesi</a>
                         </li>
                         <li> <a href="{{ route('musteri-ekle') }}"><i class="bx bx-right-arrow-alt"></i>Yeni
                                 Müşteri</a>
                         </li>
                     </ul>
                 </li>
                 <li>
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon"><i class="bx bx-category"></i>
                        </div>
                        <div class="menu-title">Firmalar</div>
                    </a>
                    <ul>
                        <li> <a href="{{ route('firma-listesi') }}"><i class="bx bx-right-arrow-alt"></i>Firma Listesi</a>
                        </li>
                        <li> <a href="{{ route('firma-ekle') }}"><i class="bx bx-right-arrow-alt"></i>Yeni
                                Firma</a>
                        </li>
                    </ul>
                </li>
                 <li>
                     <a class="has-arrow" href="javascript:;">
                         <div class="parent-icon"><i class='bx bx-bookmark-heart'></i>
                         </div>
                         <div class="menu-title">Mail Yönetimi</div>
                     </a>
                     <ul>
                         <li> <a href="{{ route('toplu-mail-olusturma') }}"><i class="bx bx-right-arrow-alt"></i>Toplu Mail Oluşturma</a>
                         </li>
                         <li> <a href="{{ route('gelen-kutusu') }}"><i class="bx bx-right-arrow-alt"></i>Giden Mailler</a>
                         </li>
                 </li>
                 <li>
                     <a href="javascript:;">
                         <div class="menu-title">API Bilgileri</div>
                     </a>
                 </li>
             </ul>
         </nav>
     </div>
     <!--end navigation-->
 </div>
 <!--end header wrapper-->
