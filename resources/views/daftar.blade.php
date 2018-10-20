<!DOCTYPE html>
<html>
<head>
  <title>FishGO Register</title>
<link rel="stylesheet" type="text/css" href="{{ url('/css/css/login.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('/css/styles/bootstrap-4.1.3/bootstrap.css') }}">
<link href="{{ asset('/css/plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{ url('/css/plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('/css/plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('/css/plugins/OwlCarousel2-2.2.1/animate.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('/css/styles/main_styles.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('/css/styles/responsive.css') }}">
<link rel="stylesheet" href="{{ url('https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css') }}">
<link rel='stylesheet' href="{{ url('https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900|Material+Icons') }}">
<link rel="stylesheet" href="{{ url('/css/css/style.css') }}">
</head>
<body style="background-image: url(/images/bg.jpeg); background-size: cover;">

  

<div class="login-page">
  <div class="form" style="background-color: rgba(0, 0, 0, 0.6);margin-top: auto;margin-bottom: auto;">
    <form class="login-form" action="/daftar" method="post" >
       {{ csrf_field() }}
      <div class="sidebar_logo" style="bottom: 50px">
      <a href="/"><div>Fish<span>GO</span></div></a>
    </div>
   
      <input type="text" placeholder="Nama Lengkap" name="namalengkap" />
      <input type="text" placeholder="email" name="email" />
      <input type="text" placeholder="username" name="username" />
      <input type="password" placeholder="password" name="password" />
      <button type="submit">Register</button>
      <p class="message">Already Registered? <a href="/loginfish">Sign In</a></p>
    </form>
  </div>
</div>




<script src="{{ asset('/js/js/login.js') }}"></script>

</body>


</html>