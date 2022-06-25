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
  <link rel="stylesheet" type="text/css" href="{!! asset('style/main.css') !!}">
</head>

<body>
  <div class="content">
    <section id="login-form">
        <div class="flex-container d-flex justify-content-center align-items-center">
            <div class="box d-flex flex-column align-items-center justify-content-between">
                <div class="login d-flex flex-column align-items-center justify-content-center mt-5">
                    <h1>SIGN IN</h1>
                    @if(session('success'))
                    <p class="alert alert-success">{{ session('success') }}</p>
                    @endif
                    @if($errors->any())
                    @foreach($errors->all() as $err)
                    <p class="alert alert-danger">{{ $err }}</p>
                    @endforeach
                    @endif
                    <img src="images/logo-zone73.png" alt="logo" width="267" height="80px">
                    <form method="POST" action="{{ route('login.action') }}">
                        @csrf
                        <div class="input-email mb-3 mt-4">
                            <input type="email" class="form-control" id="email-address" placeholder="Email Address" name="email" value="{{ old('email') }}">
                        </div>
                        <div class="input-password mb-3">
                            <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                        </div>
                        <div class="btn-box py-4">
                            <button class="btn btn-signin text-center">sign in</button>
                        </div>
                    </form>
                </div>
                <div class="register">
                    <p>don't have an account? <a href="{{ route('register') }}">register</a></p>
                    <p style="text-align: center">login for <a href="{{ route('login_admin') }}">admin</a></p>
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