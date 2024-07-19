<div class="position-relative iq-banner">
    <!--Nav Start-->
    <nav class="nav navbar navbar-expand-lg navbar-light iq-navbar">
      <div class="container-fluid navbar-inner">
        <a href="../dashboard/index.html" class="navbar-brand">

            <!--Logo start-->
            <div class="logo-main">
                <div class="logo-normal">
                    <svg class="text-primary icon-30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="-0.757324" y="19.2427" width="28" height="4" rx="2" transform="rotate(-45 -0.757324 19.2427)" fill="currentColor"/>
                        <rect x="7.72803" y="27.728" width="28" height="4" rx="2" transform="rotate(-45 7.72803 27.728)" fill="currentColor"/>
                        <rect x="10.5366" y="16.3945" width="16" height="4" rx="2" transform="rotate(45 10.5366 16.3945)" fill="currentColor"/>
                        <rect x="10.5562" y="-0.556152" width="28" height="4" rx="2" transform="rotate(45 10.5562 -0.556152)" fill="currentColor"/>
                    </svg>
                </div>
                <div class="logo-mini">
                    <svg class="text-primary icon-30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="-0.757324" y="19.2427" width="28" height="4" rx="2" transform="rotate(-45 -0.757324 19.2427)" fill="currentColor"/>
                        <rect x="7.72803" y="27.728" width="28" height="4" rx="2" transform="rotate(-45 7.72803 27.728)" fill="currentColor"/>
                        <rect x="10.5366" y="16.3945" width="16" height="4" rx="2" transform="rotate(45 10.5366 16.3945)" fill="currentColor"/>
                        <rect x="10.5562" y="-0.556152" width="28" height="4" rx="2" transform="rotate(45 10.5562 -0.556152)" fill="currentColor"/>
                    </svg>
                </div>
            </div>
            <!--logo End-->




            <h4 class="logo-title">Corsa</h4>
        </a>
        <div class="sidebar-toggle" data-toggle="sidebar" data-active="true">
            <i class="icon">
             <svg  width="20px" class="icon-20" viewBox="0 0 24 24">
                <path fill="currentColor" d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z" />
            </svg>
            </i>
        </div>
        <div class="input-group search-input">
          <span class="input-group-text" id="search-input">
            <svg class="icon-18" width="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="11.7669" cy="11.7666" r="8.98856" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></circle>
                <path d="M18.0186 18.4851L21.5426 22" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
          </span>
          <input type="search" class="form-control" placeholder="Search...">
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon">
              <span class="mt-2 navbar-toggler-bar bar1"></span>
              <span class="navbar-toggler-bar bar2"></span>
              <span class="navbar-toggler-bar bar3"></span>
            </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="mb-2 navbar-nav ms-auto align-items-center navbar-list mb-lg-0">

            {{-- <li class="nav-item me-3">
              <div data-setting="color-mode" data-name="color" data-value="dark" id="toggle" style="cursor: pointer">
                <svg id="svg" class="icon-24" width="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" >
                    <path fill="currentColor" d="M12,8A4,4 0 0,0 8,12A4,4 0 0,0 12,16A4,4 0 0,0 16,12A4,4 0 0,0 12,8M12,18A6,6 0 0,1 6,12A6,6 0 0,1 12,6A6,6 0 0,1 18,12A6,6 0 0,1 12,18M20,8.69V4H15.31L12,0.69L8.69,4H4V8.69L0.69,12L4,15.31V20H8.69L12,23.31L15.31,20H20V15.31L23.31,12L20,8.69Z" />
                </svg>
              </div>
            </li> --}}
            <li class="nav-item me-3">
              <div class="" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                <svg class="icon-24" width="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                            <path fill-rule="evenodd" clip-rule="evenodd" d="M20.4023 13.58C20.76 13.77 21.036 14.07 21.2301 14.37C21.6083 14.99 21.5776 15.75 21.2097 16.42L20.4943 17.62C20.1162 18.26 19.411 18.66 18.6855 18.66C18.3278 18.66 17.9292 18.56 17.6022 18.36C17.3365 18.19 17.0299 18.13 16.7029 18.13C15.6911 18.13 14.8429 18.96 14.8122 19.95C14.8122 21.1 13.872 22 12.6968 22H11.3069C10.1215 22 9.18125 21.1 9.18125 19.95C9.16081 18.96 8.31259 18.13 7.30085 18.13C6.96361 18.13 6.65702 18.19 6.40153 18.36C6.0745 18.56 5.66572 18.66 5.31825 18.66C4.58245 18.66 3.87729 18.26 3.49917 17.62L2.79402 16.42C2.4159 15.77 2.39546 14.99 2.77358 14.37C2.93709 14.07 3.24368 13.77 3.59115 13.58C3.87729 13.44 4.06125 13.21 4.23498 12.94C4.74596 12.08 4.43937 10.95 3.57071 10.44C2.55897 9.87 2.23194 8.6 2.81446 7.61L3.49917 6.43C4.09191 5.44 5.35913 5.09 6.38109 5.67C7.27019 6.15 8.425 5.83 8.9462 4.98C9.10972 4.7 9.20169 4.4 9.18125 4.1C9.16081 3.71 9.27323 3.34 9.4674 3.04C9.84553 2.42 10.5302 2.02 11.2763 2H12.7172C13.4735 2 14.1582 2.42 14.5363 3.04C14.7203 3.34 14.8429 3.71 14.8122 4.1C14.7918 4.4 14.8838 4.7 15.0473 4.98C15.5685 5.83 16.7233 6.15 17.6226 5.67C18.6344 5.09 19.9118 5.44 20.4943 6.43L21.179 7.61C21.7718 8.6 21.4447 9.87 20.4228 10.44C19.5541 10.95 19.2475 12.08 19.7687 12.94C19.9322 13.21 20.1162 13.44 20.4023 13.58ZM9.10972 12.01C9.10972 13.58 10.4076 14.83 12.0121 14.83C13.6165 14.83 14.8838 13.58 14.8838 12.01C14.8838 10.44 13.6165 9.18 12.0121 9.18C10.4076 9.18 9.10972 10.44 9.10972 12.01Z" fill="currentColor"></path>                            </svg>                                                   
                </div>
            </li>
            {{-- <li class="nav-item dropdown">
              <a href="#"  class="nav-link" id="notification-drop" data-bs-toggle="dropdown" >
                  <svg class="icon-24" width="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M19.7695 11.6453C19.039 10.7923 18.7071 10.0531 18.7071 8.79716V8.37013C18.7071 6.73354 18.3304 5.67907 17.5115 4.62459C16.2493 2.98699 14.1244 2 12.0442 2H11.9558C9.91935 2 7.86106 2.94167 6.577 4.5128C5.71333 5.58842 5.29293 6.68822 5.29293 8.37013V8.79716C5.29293 10.0531 4.98284 10.7923 4.23049 11.6453C3.67691 12.2738 3.5 13.0815 3.5 13.9557C3.5 14.8309 3.78723 15.6598 4.36367 16.3336C5.11602 17.1413 6.17846 17.6569 7.26375 17.7466C8.83505 17.9258 10.4063 17.9933 12.0005 17.9933C13.5937 17.9933 15.165 17.8805 16.7372 17.7466C17.8215 17.6569 18.884 17.1413 19.6363 16.3336C20.2118 15.6598 20.5 14.8309 20.5 13.9557C20.5 13.0815 20.3231 12.2738 19.7695 11.6453Z" fill="currentColor"></path>
                    <path opacity="0.4" d="M14.0088 19.2283C13.5088 19.1215 10.4627 19.1215 9.96275 19.2283C9.53539 19.327 9.07324 19.5566 9.07324 20.0602C9.09809 20.5406 9.37935 20.9646 9.76895 21.2335L9.76795 21.2345C10.2718 21.6273 10.8632 21.877 11.4824 21.9667C11.8123 22.012 12.1482 22.01 12.4901 21.9667C13.1083 21.877 13.6997 21.6273 14.2036 21.2345L14.2026 21.2335C14.5922 20.9646 14.8734 20.5406 14.8983 20.0602C14.8983 19.5566 14.4361 19.327 14.0088 19.2283Z" fill="currentColor"></path>
                  </svg>
                  <span class="bg-danger dots"></span>
              </a>
              <div class="p-0 sub-drop dropdown-menu dropdown-menu-end" aria-labelledby="notification-drop">
                  <div class="m-0 shadow-none card">
                    <div class="py-3 card-header d-flex justify-content-between bg-primary">
                        <div class="header-title">
                          <h5 class="mb-0 text-white">All Notifications</h5>
                        </div>
                    </div>
                    <div class="p-0 card-body">
                        <a href="#" class="iq-sub-card">
                          <div class="d-flex align-items-center">
                              <img class="p-1 avatar-40 rounded-pill bg-soft-primary" src="../assets/images/shapes/01.png" alt="">
                              <div class="ms-3 w-100">
                                <h6 class="mb-0 ">Emma Watson Bni</h6>
                                <div class="d-flex justify-content-between align-items-center">
                                    <p class="mb-0">95 MB</p>
                                    <small class="float-end font-size-12">Just Now</small>
                                </div>
                              </div>
                          </div>
                        </a>
                        <a href="#" class="iq-sub-card">
                          <div class="d-flex align-items-center">
                              <div class="">
                                <img class="p-1 avatar-40 rounded-pill bg-soft-primary" src="../assets/images/shapes/02.png" alt="">
                              </div>
                              <div class="ms-3 w-100">
                                <h6 class="mb-0 ">New customer is join</h6>
                                <div class="d-flex justify-content-between align-items-center">
                                    <p class="mb-0">Cyst Bni</p>
                                    <small class="float-end font-size-12">5 days ago</small>
                                </div>
                              </div>
                          </div>
                        </a>
                        <a href="#" class="iq-sub-card">
                          <div class="d-flex align-items-center">
                              <img class="p-1 avatar-40 rounded-pill bg-soft-primary" src="../assets/images/shapes/03.png" alt="">
                              <div class="ms-3 w-100">
                                <h6 class="mb-0 ">Two customer is left</h6>
                                <div class="d-flex justify-content-between align-items-center">
                                    <p class="mb-0">Cyst Bni</p>
                                    <small class="float-end font-size-12">2 days ago</small>
                                </div>
                              </div>
                          </div>
                        </a>
                        <a href="#" class="iq-sub-card">
                          <div class="d-flex align-items-center">
                              <img class="p-1 avatar-40 rounded-pill bg-soft-primary" src="../assets/images/shapes/04.png" alt="">
                              <div class="w-100 ms-3">
                                <h6 class="mb-0 ">New Mail from Fenny</h6>
                                <div class="d-flex justify-content-between align-items-center">
                                    <p class="mb-0">Cyst Bni</p>
                                    <small class="float-end font-size-12">3 days ago</small>
                                </div>
                              </div>
                          </div>
                        </a>
                    </div>
                  </div>
              </div>
            </li> --}}
            {{-- <li class="nav-item dropdown">
              <a href="#" class="nav-link" id="mail-drop" data-bs-toggle="dropdown"  aria-haspopup="true" aria-expanded="false">
                <svg class="icon-24" width="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path opacity="0.4" d="M22 15.94C22 18.73 19.76 20.99 16.97 21H16.96H7.05C4.27 21 2 18.75 2 15.96V15.95C2 15.95 2.006 11.524 2.014 9.298C2.015 8.88 2.495 8.646 2.822 8.906C5.198 10.791 9.447 14.228 9.5 14.273C10.21 14.842 11.11 15.163 12.03 15.163C12.95 15.163 13.85 14.842 14.56 14.262C14.613 14.227 18.767 10.893 21.179 8.977C21.507 8.716 21.989 8.95 21.99 9.367C22 11.576 22 15.94 22 15.94Z" fill="currentColor"></path>
                  <path d="M21.4759 5.67351C20.6099 4.04151 18.9059 2.99951 17.0299 2.99951H7.04988C5.17388 2.99951 3.46988 4.04151 2.60388 5.67351C2.40988 6.03851 2.50188 6.49351 2.82488 6.75151L10.2499 12.6905C10.7699 13.1105 11.3999 13.3195 12.0299 13.3195C12.0339 13.3195 12.0369 13.3195 12.0399 13.3195C12.0429 13.3195 12.0469 13.3195 12.0499 13.3195C12.6799 13.3195 13.3099 13.1105 13.8299 12.6905L21.2549 6.75151C21.5779 6.49351 21.6699 6.03851 21.4759 5.67351Z" fill="currentColor"></path>
                </svg>
                <span class="bg-primary count-mail"></span>
              </a>
              <div class="p-0 sub-drop dropdown-menu dropdown-menu-end" aria-labelledby="mail-drop">
                  <div class="m-0 shadow-none card">
                    <div class="py-3 card-header d-flex justify-content-between bg-primary">
                        <div class="header-title">
                          <h5 class="mb-0 text-white">All Message</h5>
                        </div>
                    </div>
                    <div class="p-0 card-body ">
                        <a href="#" class="iq-sub-card">
                          <div class="d-flex align-items-center">
                              <div class="">
                                <img class="p-1 avatar-40 rounded-pill bg-soft-primary" src="../assets/images/shapes/01.png" alt="">
                              </div>
                              <div class="ms-3">
                                <h6 class="mb-0 ">Bni Emma Watson</h6>
                                <small class="float-start font-size-12">13 Jun</small>
                              </div>
                          </div>
                        </a>
                        <a href="#" class="iq-sub-card">
                          <div class="d-flex align-items-center">
                              <div class="">
                                <img class="p-1 avatar-40 rounded-pill bg-soft-primary" src="../assets/images/shapes/02.png" alt="">
                              </div>
                              <div class="ms-3">
                                <h6 class="mb-0 ">Lorem Ipsum Watson</h6>
                                <small class="float-start font-size-12">20 Apr</small>
                              </div>
                          </div>
                        </a>
                        <a href="#" class="iq-sub-card">
                          <div class="d-flex align-items-center">
                              <div class="">
                                <img class="p-1 avatar-40 rounded-pill bg-soft-primary" src="../assets/images/shapes/03.png" alt="">
                              </div>
                              <div class="ms-3">
                                <h6 class="mb-0 ">Why do we use it?</h6>
                                <small class="float-start font-size-12">30 Jun</small>
                              </div>
                          </div>
                        </a>
                        <a href="#" class="iq-sub-card">
                          <div class="d-flex align-items-center">
                              <div class="">
                                <img class="p-1 avatar-40 rounded-pill bg-soft-primary" src="../assets/images/shapes/04.png" alt="">
                              </div>
                              <div class="ms-3">
                                <h6 class="mb-0 ">Variations Passages</h6>
                                <small class="float-start font-size-12">12 Sep</small>
                              </div>
                          </div>
                        </a>
                        <a href="#" class="iq-sub-card">
                          <div class="d-flex align-items-center">
                              <div class="">
                                <img class="p-1 avatar-40 rounded-pill bg-soft-primary" src="../assets/images/shapes/05.png" alt="">
                              </div>
                              <div class="ms-3">
                                <h6 class="mb-0 ">Lorem Ipsum generators</h6>
                                <small class="float-start font-size-12">5 Dec</small>
                              </div>
                          </div>
                        </a>
                    </div>
                  </div>
              </div>
            </li> --}}
            <li class="nav-item dropdown">
              <a class="py-0 nav-link d-flex align-items-center" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="../assets/images/avatars/01.png" alt="User-Profile" class="theme-color-default-img img-fluid avatar avatar-50 avatar-rounded">
                <img src="../assets/images/avatars/avtar_1.png" alt="User-Profile" class="theme-color-purple-img img-fluid avatar avatar-50 avatar-rounded">
                <img src="../assets/images/avatars/avtar_2.png" alt="User-Profile" class="theme-color-blue-img img-fluid avatar avatar-50 avatar-rounded">
                <img src="../assets/images/avatars/avtar_4.png" alt="User-Profile" class="theme-color-green-img img-fluid avatar avatar-50 avatar-rounded">
                <img src="../assets/images/avatars/avtar_5.png" alt="User-Profile" class="theme-color-yellow-img img-fluid avatar avatar-50 avatar-rounded">
                <img src="../assets/images/avatars/avtar_3.png" alt="User-Profile" class="theme-color-pink-img img-fluid avatar avatar-50 avatar-rounded">
                <div class="caption ms-3 d-none d-md-block ">
                    <h6 class="mb-0 caption-title">{{ auth()->user()->name }}</h6>
                    <p class="mb-0 caption-sub-title">{{ ucfirst(auth()->user()->role) }}</p>
                </div>
              </a>
              <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="/profile">Profil</a></li>
                <li><hr class="dropdown-divider"></li>
                <li>
                  <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="dropdown-item text-danger">Logout</button>
                  </form>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>          <!-- Nav Header Component Start -->
      <div class="iq-navbar-header" style="height: 215px;">
          <div class="container-fluid iq-container">
              <div class="row">
                  <div class="col-md-12">
                      <div class="flex-wrap d-flex justify-content-between align-items-center">
                          <div>
                              <h1>Corsa</h1>
                              <p>Redtop Hotel & Convention Center  -  Request System Management App</p>
                          </div>
                          <div>
                              <a href="/requests?openModal=true" class="btn btn-link btn-soft-light center-button">
                                <div class="d-flex justify-content-center align-items-center gap-2">
                                    <i class="icon">
                                        <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.4" d="M16.6667 2H7.33333C3.92889 2 2 3.92889 2 7.33333V16.6667C2 20.0622 3.92 22 7.33333 22H16.6667C20.0711 22 22 20.0622 22 16.6667V7.33333C22 3.92889 20.0711 2 16.6667 2Z" fill="currentColor"></path>
                                            <path d="M15.3205 12.7083H12.7495V15.257C12.7495 15.6673 12.4139 16 12 16C11.5861 16 11.2505 15.6673 11.2505 15.257V12.7083H8.67955C8.29342 12.6687 8 12.3461 8 11.9613C8 11.5765 8.29342 11.2539 8.67955 11.2143H11.2424V8.67365C11.2824 8.29088 11.6078 8 11.996 8C12.3842 8 12.7095 8.29088 12.7495 8.67365V11.2143H15.3205C15.7066 11.2539 16 11.5765 16 11.9613C16 12.3461 15.7066 12.6687 15.3205 12.7083Z" fill="currentColor"></path>
                                        </svg>
                                    </i>
                                    <span class="ml-2">Create Request</span>
                                </div>
                              </a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="iq-header-img">
              <img src="../assets/images/dashboard/top-header.png" alt="header" class="theme-color-default-img img-fluid w-100 h-100 animated-scaleX">
              <img src="../assets/images/dashboard/top-header1.png" alt="header" class="theme-color-purple-img img-fluid w-100 h-100 animated-scaleX">
              <img src="../assets/images/dashboard/top-header2.png" alt="header" class="theme-color-blue-img img-fluid w-100 h-100 animated-scaleX">
              <img src="../assets/images/dashboard/top-header3.png" alt="header" class="theme-color-green-img img-fluid w-100 h-100 animated-scaleX">
              <img src="../assets/images/dashboard/top-header4.png" alt="header" class="theme-color-yellow-img img-fluid w-100 h-100 animated-scaleX">
              <img src="../assets/images/dashboard/top-header5.png" alt="header" class="theme-color-pink-img img-fluid w-100 h-100 animated-scaleX">
          </div>
      </div>          <!-- Nav Header Component End -->
    <!--Nav End-->
  </div>
