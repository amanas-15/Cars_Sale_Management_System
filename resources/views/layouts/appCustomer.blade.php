@extends('layouts.app')

@section('content')

    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar layout-without-menu">
        <div class="layout-container">
            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->

                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                    id="layout-navbar">
                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                        <!-- logo -->
                        <div class="navbar-nav align-items-center mx-2">
                            
                            <div class="nav-item d-flex align-items-center">
                                <a href="{{ route('home') }}" class="text-danger">
                                    <span class="text-nowrap">High Street Cars</span>
                                    
                                </a>
                            </div>
                            
                        </div>
                        <!-- /logo -->
                        <!-- Search -->
                        {{-- <div class="navbar-nav align-items-center d-none d-sm-block">
                            <div class="nav-item d-flex align-items-center">
                                <i class="bx bx-search fs-4 lh-0"></i>
                                <input type="text" class="form-control border-0 shadow-none" placeholder="Search..."
                                    aria-label="Search..." />
                            </div>
                        </div> --}}
                        <!-- /Search -->

                        <ul class="navbar-nav flex-row align-items-center ms-auto">
                        <div class="dropdown">
  <button class="dropbtn">MENU</button>
  <div class="dropdown-content">
  <li><a href="http://127.0.0.1:8000/home"><i class="fa-solid fa-house"></i>HOME</a></li>
      
      <li><a href="http://127.0.0.1:8000/showroom"><i class="fa-solid fa-landmark"></i>SHOWROOM</a></li>
      <li><a href="http://127.0.0.1:8000/video"><i class="fa-solid fa-play"></i>VIDEO</a></li>
      <li><a href="http://127.0.0.1:8000/aboutus"><i class="fa-sharp fa-solid fa-user-group"></i>ABOUT US</a></li>
      <li><a href="http://127.0.0.1:8000/emi"><i class="fa-sharp fa-solid fa-grip"></i>EMI Calculator</a></li>
      
  </div>
</div>
                            <!-- Place this tag where you want the button to render. -->
                            <li class="nav-item lh-1 me-3">
                                <a class="github-button text-danger" href="#">{{ Auth::user()->name }}</a>
                            </li>

                            <!-- User -->
                            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                
                                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                                    data-bs-toggle="dropdown">
                                    <div class="avatar avatar-online">
                                        @if ($myProfile->img_path == null)
                                            <img src="{{ asset('users/profile/aman.jpg') }}" alt="profile"
                                                class="w-px-40 h-auto rounded-circle  img-fluid" />
                                        @else
                                            <img src="{{ asset('users/profile/'. $myProfile->img_path) }}" alt="profile"
                                                class="w-px-40 h-auto  img-fluid rounded-circle" />
                                        @endif
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar avatar-online">
                                                        @if ($myProfile->img_path == null)
                                                            <img src="{{ asset('users/profile/aman.jpg') }}" alt="profile"
                                                                class="w-px-40 h-auto rounded-circle  img-fluid" />
                                                        @else
                                                            <img src="{{ asset('users/profile/' . $myProfile->img_path) }}"
                                                                alt="profile"
                                                                class="w-px-40 h-auto  img-fluid rounded-circle" />
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <span class="fw-semibold d-block">{{ Auth::user()->name }}</span>
                                                    <small class="text-muted">{{ Auth::user()->email }}</small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('profile_index') }}">
                                            <i class="bx bx-user me-2"></i>
                                            <span class="align-middle">My Profile</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('order-index') }}">
                                            <span class="d-flex align-items-center align-middle">
                                                <i class="flex-shrink-0 bx bx-credit-card me-2"></i>
                                                <span class="flex-grow-1 align-middle">Orders</span>
                                                <span
                                                    class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">{{ $OraderCount }}</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <form action="{{ route('logout') }}" method="post">
                                            @csrf
                                            <button type="submit" class="dropdown-item">
                                                <i class="bx bx-power-off me-2"></i>
                                                <span class="align-middle">Log Out</span>
                                            </button>
                                        </form>
                                    </li>
                                </ul>
                            </li>
                            <!--/ User -->
                        </ul>
                    </div>
                </nav>

                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->

                    <div class="container flex-grow-1 container-p-y">
                        <!-- Layout Demo -->
                        <div class="layout-demo-wrapper">
                            @yield('m-content')
                        </div>
                        <!--/ Layout Demo -->
                    </div>
                    <!-- / Content -->
                    <!-- Footer -->
                    <footer class="content-footer footer bg-footer-theme">
                        <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                            <div class="mb-2 mb-md-0">
                                <!-- Remove the container if you want to extend the Footer to full width. -->
<div class="container my-5">
  <!-- Footer -->
  <footer
          class="text-center text-lg-start text-white"
          style="background-color: #929fba"
          >
    <!-- Grid container -->
    <div class="container p-4 pb-0">
      <!-- Section: Links -->
      <section class="">
        <!--Grid row-->
        <div class="row">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">
              High Street Cars
            </h6>
            <p>
            The High Street Cars(HSC) showroom can boast of showcasing a range of more than 60+ stock cars of the brands mentioned above. In addition, the showroom also has 250+ exclusive variants in styles ranging from Convertible, Coupe, Hatchback, Minivan, Sedan, Station Wagon, SUV/MUV to Truck, a feat not many second-hand luxury cars showrooms in India can boast off. 
          </div>
          <!-- Grid column -->

          <hr class="w-100 clearfix d-md-none" />

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">Brands Available</h6>
            <p>
              <a class="text-white">Audi,
                                   Bentley,
                                   BMW,
                                   Cadillac</a>
            </p>
            <p>
              <a class="text-white">Ford,
                                    Hummer,
                                    Jaguar,
                                    Lamborghini</a>
            </p>
            <p>
              <a class="text-white">Land Rover,
                                    Lexus,
                                    Maserati,
                                    Mazda</a>
            </p>
            <p>
              <a class="text-white">Mercedes-Benz,
                                    Porsche,
                                     Volvo,
                                    Range Rover,
                                    Toyota,
                                    SKODA,
                                       MINI,
                                     VOLKSWAGEN</a>
            </p>
          </div>
          <!-- Grid column -->

          <hr class="w-100 clearfix d-md-none" />

          <!-- Grid column -->
          <hr class="w-100 clearfix d-md-none" />

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
            <p><i class="fas fa-home mr-3"></i> Tp Scheme No. 20, Fp No. 31, Sunpharma Road, Opp. Hdfc Bank, Vadodara, Gujarat 390012</p>
            <p><i class="fas fa-envelope mr-3"></i> highstreetcars@gmail.com</p>
            <p><i class="fas fa-phone mr-3"></i>  +91-8888588886</p>
            <p><i class="fas fa-print mr-3"></i> +91-8401407411</p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">Follow us</h6>

            <!-- Facebook -->
            <a
               class="btn btn-primary btn-floating m-1"
               style="background-color: #3b5998"
               href="https://www.facebook.com/AutobestEmperio"
               role="button"
               ><i class="fab fa-facebook-f"></i
              ></a>

            <!-- Twitter -->
            <a
               class="btn btn-primary btn-floating m-1"
               style="background-color: #55acee"
               href="https://twitter.com/AutobestEmperio"
               role="button"
               ><i class="fab fa-twitter"></i
              ></a>

           

            <!-- Instagram -->
            <a
               class="btn btn-primary btn-floating m-1"
               style="background-color: #ac2bac"
               href="https://www.instagram.com/autobestemperio/"
               role="button"
               ><i class="fab fa-instagram"></i
              ></a>

            <!-- Youtube -->
            <a
               class="btn btn-primary btn-floating m-1"
               style="background-color: #0082ca"
               href="https://www.youtube.com/channel/UChfAg1FGPHBNH4Rm52UgHMQ"
               role="button"
               ><i class="fa-brands fa-youtube"></i
              ></a>
           
          </div>
        </div>
        <!--Grid row-->
      </section>
      <!-- Section: Links -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div
         class="text-center p-3"
         style="background-color: rgba(0, 0, 0, 0.2)"
         >
      © 2023 Copyright:
      <a class="text-white" href="https://mdbootstrap.com/"
         >HighStreetCars.com</a
        >
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
</div>
<!-- End of .container -->
                                <script>
                                    document.write(new Date().getFullYear());
                                </script>
                            </div>
                        </div>
                    </footer>
                    <!-- / Footer -->
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>
    </div>
    <!-- / Layout wrapper -->
@endsection
