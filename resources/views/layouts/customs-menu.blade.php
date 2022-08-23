<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    @livewireStyles
    <title>VIET NAM</title>
</head>

<body>
    <header>
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
                        <div class="login me-3">
                            <a href="#">
                                <ion-icon name="person-outline"></ion-icon>
                            </a>
                        </div>
                    </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </nav>
        </div>
        <div class="sns">

            <div class="mxh">
                <ion-icon name="logo-facebook"></ion-icon><br />
                <ion-icon name="logo-twitter"></ion-icon><br />
                <ion-icon name="logo-instagram"></ion-icon>
            </div>

        </div>

    </header>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    @livewireScripts
</body>

</html>
