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
    <link rel="stylesheet" type="text/css" href="{!! asset('style/schedule.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('style/footer.css') !!}">
</head>
<body>
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
          <img class="nav-logo" src="images/logo-zone73.png" alt="" />
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
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
                  <a
                    class="nav-link dropdown-toggle"
                    href="#"
                    id="navbarDropdownMenuLink"
                    role="button"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                  >
                    Transaksi
                  </a>
                  <ul
                    class="dropdown-menu"
                    aria-labelledby="navbarDropdownMenuLink"
                  >
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
                  <a
                    class="nav-link dropdown-toggle"
                    href="#"
                    id="navbarDropdownMenuLink"
                    role="button"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                  >
                    Users
                  </a>
                  <ul
                    class="dropdown-menu"
                    aria-labelledby="navbarDropdownMenuLink"
                  >
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
        <h1 class="py-3 text-center">Daftar Jadwal Lapangan</h1>
    </section>
        @csrf
    <section id="schedule" class="d-flex justify-content-between align-items-center">
        <div class="container d-flex flex-column">
            @foreach ($arenas as $item)
            <div class="detail">
                <strong>Detail lapangan</strong>
                <div class="item">
                    <small>Lapangan : {{ old('name', $item->name) }}</small>
                    <small>Harga sewa/jam : Rp. {{ old('price', $item->price) }}</small>
                    <small>Tanggal : 27/06/2022</small>
                </div>
            </div>
            @endforeach
            <div class="time mt-4">
                <strong>Pilih jam booking</strong>
                <div class="time-item d-flex flex-wrap">
                    <button type="button" class="btn btn-outline-primary active">10:00 - 11:00</button>
                    <button type="button" class="btn btn-outline-primary disabled">11:00 - 12:00</button>
                    <button type="button" class="btn btn-outline-primary disabled">12:00 - 13:00</button>
                    <button type="button" class="btn btn-outline-primary disabled">13:00 - 14:00</button>
                    <button type="button" class="btn btn-outline-primary disabled">14:00 - 15:00</button>
                    <button type="button" class="btn btn-outline-primary disabled">15:00 - 16:00</button>
                    <button type="button" class="btn btn-outline-primary disabled">16:00 - 17:00</button>
                    <button type="button" class="btn btn-outline-primary disabled">17:00 - 18:00</button>
                    <button type="button" class="btn btn-outline-primary disabled">18:00 - 19:00</button>
                    <button type="button" class="btn btn-outline-primary disabled">20:00 - 21:00</button>
                    <button type="button" class="btn btn-outline-primary disabled">21:00 - 22:00</button>
                </div>
            </div>
            <div class="price mt-4 d-flex justify-content-between">
                <div class="total d-flex flex-column">
                    <strong>Total</strong>
                    <small class="mt-3">Rp.150000</small>
                </div>
                <div class="submit">
                    <a href="{{ route('payment') }}" class="btn btn-primary pt-3" role="button">Booking</a>
                </div>
            </div>
        </div>
    </section>

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