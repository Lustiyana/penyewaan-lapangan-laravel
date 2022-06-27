<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Zone 73</title>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.12.0/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{!! asset('style/home.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('style/payment.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('style/footer.css') !!}">
</head>
<body>
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <img class="nav-logo" src="images/logo-zone73.png" alt="" />
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse nav-body" id="navbarNav">
                <div>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="home.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="schedule.html">Jadwal</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Transaksi
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="invoice.html">Data Invoice</a></li>
                                <li>
                                    <a class="dropdown-item" href="#">Rincian Pemesanan</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">History Pemesanan</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About Us</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown profile">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Users
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li>
                                    <a class="dropdown-item" href="profile.html">Profile</a>
                                </li>
                                <li><a class="dropdown-item" href="index.html">Log Out</a></li>
                            </ul>
                            <a href="#"><img src="images/profile-logo.png" alt="" /></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <section id="header">
        <h1 class="py-3 text-center">Pembayaran</h1>
    </section>

    <section id="payment" class="mb-3">
        <div class="payment-container d-flex justify-content-around">
            <div class="box-1">
                <h4>PAYMENT INFORMATION</h4>
                <div class="box-detail d-flex align-items-center justify-content-center">
                    <div class="detail d-flex flex-column justify-content-between">
                        <div class="item-detail d-flex flex-column">
                            <strong class="ms-3 mt-3">Nama</strong>
                            <small class="ms-3">Lustiyana Lusti</small>

                            <strong class="ms-3 mt-3">Tanggal Booking</strong>
                            <small class="ms-3">27/06/2022</small>

                            <strong class="ms-3 mt-3">Lapang</strong>
                            <small class="ms-3">A</small>

                            <strong class="ms-3 mt-3">Jam Booking</strong>
                            <small class="ms-3">10:00 - 11:00</small>
                        </div>


                        <hr class="mt-5">
                        <div class="total mb-3 mx-3 d-flex justify-content-between">
                            <strong>Total</strong>
                            <strong>Rp. 150.000</strong>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-2">
                <h4>SELECT PAYMENT</h4>
                <div class="box-payment d-flex flex-column align-items-center justify-content-center">
                    <div class="payment-title ps-3 pt-2">
                        <h5>Bank Transfer</h5>
                    </div>
                    <div class="payment-method mt-2 ps-3 d-flex flex-column justify-content-center">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="bca">
                            <label class="form-check-label" for="flexRadioDefault1">
                                BCA
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="bri" checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                                BRI
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="bni" checked>
                            <label class="form-check-label" for="flexRadioDefault3">
                                BNI
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="cod" checked>
                            <label class="form-check-label" for="flexRadioDefault4">
                                COD
                            </label>
                        </div>
                    </div>
                    <div class="payment mt-2">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            PROCESS
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">PEMBAYARAN</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="transfer">
                        <strong>Transfer Bank</strong>
                        <div class="no-transfer mt-2 d-flex align-items-center justify-content-center">023942373848943 a/n Zone73</div>
                    </div>
                    <div class="detail-payment mt-4">
                        <div class="pay-method d-flex justify-content-between">
                            <strong>Metode Pembayaran</strong>
                            <small>BRI</small>
                        </div>
                        <hr>
                        <div class="total-price d-flex justify-content-between">
                            <strong>BRI</strong>
                            <small>Rp. 150.000</small>
                        </div>
                        <hr>
                        <div class="name-booked d-flex justify-content-between">
                            <strong>NAMA PENERIMA</strong>
                            <small>Zone 73</small>
                        </div>
                        <hr>
                        <div class="no-invoice d-flex justify-content-between">
                            <strong>NO INVOICE</strong>
                            <small>INV-000001</small>
                        </div>
                        <hr>
                        <div class="pay-time d-flex justify-content-between">
                            <strong>WAKTU PEMBAYARAN</strong>
                            <small>29:59</small>
                        </div>
                        <hr>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Upload bukti pembayaran</label>
                            <input class="form-control" type="file" id="formFile">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <a class="btn btn-primary" href="{{ route('invoice') }}" role="button">PROCESS</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <section id="footer">
        <div></div>
        <div>
            <p>
                © 2022 | <span style="color: black">Zone73</span>
            </p>
        </div>
        <div class="sosmed">
            <a href="#"><img src="images/fb-black.svg" alt="fb" /></a>
            <a href="#"><img src="images/twitter-black.svg" alt="twitter" /></a>
            <a href="#"><img src="images/instagram-black.svg" alt="instagram" /></a>
        </div>
    </section>
<!-- Bootstrap core JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.0/js/dataTables.bootstrap5.min.js"></script>
    <script src="main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>
</body>