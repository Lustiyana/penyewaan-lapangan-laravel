<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Zone 73</title>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <link href="style/main.css" rel="stylesheet" />
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
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Jadwal</a>
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
                  <li><a class="dropdown-item" href="#">Data Invoice</a></li>
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
                    <a class="dropdown-item" href="{{ route('profile') }}">Profile</a>
                  </li>
                  <li><a class="dropdown-item" href="#">Log Out</a></li>
                </ul>
                <a href="#"><img src="images/profile-logo.png" alt="" /></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>

    <!-- Content -->
    <div class="profile-content">
      <div class="profile-header row">
        <div class="profile-name col-11">
          <img src="images/profile-logo-big.png" alt="" />
          <h5>Agus</h5>
        </div>
        <div class="edit col-1">
          <a href="editprofile.html" class="text-right">Edit</a>
        </div>
      </div>
      <div class="profile-item">
        <table>
          <tr>
            <td>Sign-In Email</td>
            <td>Agus01@gmail.com</td>
          </tr>
          <tr>
            <td>Sign-In Password</td>
            <td>********</td>
          </tr>
          <tr>
            <td>Phone</td>
            <td>0812345678</td>
          </tr>
          <tr>
            <td>Address</td>
            <td>Jalan Bahagia, Bandung Jawa Barat</td>
          </tr>
        </table>
      </div>
    </div>

    <!-- Footer -->
    <section id="footer">
      <div></div>
      <div style="color: black">
        <p style="color: black">
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
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
