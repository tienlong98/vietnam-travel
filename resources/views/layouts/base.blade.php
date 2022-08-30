<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css"
        integrity="sha512-mSYUmp1HYZDFaVKK//63EcZq4iFWFjxSL+Z3T/aCt4IO9Cejm03q3NKKYN6pFQzY0SBOr8h+eCIAZHPXcpZaNw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/customs-menu.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/listtour.css') }}" />
    {{-- <link rel="stylesheet" href="{{ asset('contactCSS/contact.css') }}" /> --}}
    <link rel="stylesheet" href="{{ asset('css/listyamamori.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/detailtour.css') }}" />
    <style>
        .fix-img-cart {
            width: 70px;
            height: 70px;
            object-fit: cover;
            object-position: center;
            border-radius: 50%;
        }

        .show-mb {
            display: none;
        }

        .show-mb tbody {
            width: 100%;
        }

        .show-mb tbody .img-mb {
            width: 100px;
            height: auto;
            object-fit: cover;
            object-position: center;
            border-radius: 50%;
        }

        ion-icon {
            visibility: visible !important;
        }
    </style>
    @livewireStyles
    <title>VIET NAM</title>
</head>

<body>
    <div class="menu">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid d-flex justify-content-around">
                <div class="logo">
                    <ion-icon name="heart-outline" class="icon-1"></ion-icon>
                    <a class="text-logo" href="#">Viet Nam</a>
                    <ion-icon name="heart-outline" class="icon-2"></ion-icon>
                </div>

                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/tour">Tours</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Hotels</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contact">Contact</a>
                        </li>
                    </ul>
                </div>
                <div class="menu-right d-flex">
                    <div class="search me-4">
                        <a href="#">
                            <ion-icon name="cart-outline"></ion-icon>
                        </a>
                    </div>
                    @if (Route::has('login'))
                        @auth

                            @if (Auth::user()->utype === 'ADM')
                                <div class="login me-3">
                                    <a class="fix-hover" href="">{{ Auth::user()->name }}
                                        <ion-icon name="chevron-down-outline"></ion-icon>
                                    </a>
                                    <div class="list-menu-user">
                                        <div class="mt-2"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
                                        <div class="mt-2"><a href="{{ route('admin.categories') }}">Categories</a>
                                        </div>
                                        <div class="mt-2"><a href="{{ route('logout') }}"
                                                onclick="event.preventDefault(); document.getElementById('logout-form').submit('');">Logout</a>
                                        </div>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                            @csrf

                                        </form>
                                    </div>
                                </div>
                            @else
                                <div class="login me-3">
                                    <a class="fix-hover" href="">{{ Auth::user()->name }}
                                        <ion-icon name="chevron-down-outline"></ion-icon>
                                    </a>
                                    <div class="list-menu-user">
                                        <div class="mt-2"><a href="{{ route('user.dashboard') }}">Dashboard</a></div>
                                        <div class="mt-2"><a href="{{ route('logout') }}"
                                                onclick="event.preventDefault(); document.getElementById('logout-form').submit('');">ログアウト</a>
                                        </div>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                            @csrf

                                        </form>
                                    </div>
                                </div>
                            @endif
                        @else
                            <div class="login me-3">
                                <a href="{{ route('login') }}">
                                    <ion-icon name="person-outline"></ion-icon>
                                </a>
                            </div>
                        @endauth
                    @endif
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
    </div>
    {{ $slot }}
    <footer>
        <div class="d-flex justify-content-center">
            <div class="logo-footer d-flex mb-5">
                <ion-icon name="heart-outline" class="icon-3"></ion-icon>
                <p class="text-logo-footer">Viet Nam <br><span class="fs-5">Explore</span></p>
                <ion-icon name="heart-outline" class="icon-4"></ion-icon>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 text-footer-left text-center fw-bold">
                    <p>PRIVACY POLICY</p>
                    <P>TEAM & CONDITIONS</P>
                    <P>ABOUT</P>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 text-footer-center">
                    <div class="d-flex justify-content-center">
                        <div class="sns-footer d-flex">
                            <ion-icon name="logo-facebook"></ion-icon><br />
                            <ion-icon name="logo-twitter"></ion-icon><br />
                            <ion-icon name="logo-instagram"></ion-icon>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <div class="line mt-4"></div>
                    </div>
                    <div class=" text-center mt-4">
                        <p class="fw-bold">WEEKLY NEWSLETTER</p>
                    </div>
                    <div class="d-flex justify-content-center text-center fw-bold mt-4">
                        <table>
                            <tr>
                                <td>NAME@EMAIL>COM</td>
                            </tr>
                            <tr>
                                <td>SUBSCRIBE</td>
                            </tr>
                        </table>
                    </div>
                    <div class="d-flex justify-content-center text-center mt-5 mb-5">
                        <ion-icon name="at-circle-outline" class="ion-ft"></ion-icon>
                        <h5 class="ps-3 fw-bold">2022 | Intership Team A</h5>
                    </div>

                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 text-footer-right text-center fw-bold">
                    <p>PAYMENT INFO</p>
                    <P>RETURN | EXCHANGES</P>
                    <P>CONTACT</P>
                </div>
            </div>
        </div>

    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"
        integrity="sha512-T/tUfKSV1bihCnd+MxKD0Hm1uBBroVYBOYSk1knyvQ9VyZJpc/ALb4P0r6ubwVPSGB2GvjeoMAJJImBG12TiaQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(function() {
            $('#datepicker').datepicker();
        });
    </script>
    @livewireScripts
</body>

</html>
