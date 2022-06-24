<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Store - Your Best Marketplace</title>

  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="{!! asset('style/register.css') !!}">
</head>

<body>
  <div class="content">
    <section id="register-form">
      <div class="flex-container d-flex justify-content-center align-items-center">
        <div class="box d-flex flex-column align-items-center justify-content-between">
          <div class="register d-flex flex-column mt-5">
            <h1 class="text-center mb-5">registrasi</h1>
            @if($errors->any())
            @foreach($errors->all() as $err)
            <p class="alert alert-danger">{{ $err }}</p>
            @endforeach
            @endif
            <form method="POST" action="{{ route('register_admin.action') }}">
                @csrf
              <div class="name-field d-flex justify-content-between">
                <div class="mb-4">
                  <input type="text" class="form-control" id="first-name" placeholder="Nama awal" name="first_name" value="{{ old('first_name') }}">
                </div>
                <div class="mb-4">
                  <input type="text" class="form-control" id="last-name" placeholder="Nama akhir" name="last_name" value="{{ old('last_name') }}">
                </div>
              </div>
              <div class="mb-4">
                <input type="email" class="form-control" id="email" placeholder="email" name="email" value="{{ old('email') }}">
              </div>
              <div class="mb-4">
                <input type="password" class="form-control" id="password" placeholder="password" name="password">
              </div>
              <div class="mb-4">
                <input type="password" class="form-control" id="confirm-password" placeholder="konfirmasi password" name="password_confirmation">
              </div>
              <div class="btn-box py-4">
                <button class="btn btn-signup">Buat Akun</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <section id="footer">
      <div>
      </div>
      <div>
        <p>© 2022 | <span>Zone73</span></p>
      </div>
      <div class="sosmed">
        <a href="#"><img src="images/fb.svg" alt="fb"></a>
        <a href="#"><img src="images/twitter.svg" alt="twitter"></a>
        <a href="#"><img src="images/instagram.svg" alt="instagram"></a>
      </div>
    </section>
  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
  </script>
  <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>