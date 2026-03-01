<!DOCTYPE html>
<html>
<head>
<title>Sistem Keuangan Kos</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">

<style>
.logo-img {
    width: 100px;
    height: auto;
}
.nav-font{
    font-family: 'Playfair Display', sans-serif;
    font-weight: 700;
    letter-spacing: .5px;
}
.navbar-custom{
    background-color: #9E182B;
}
.navbar-custom .nav-link,
.navbar-custom .navbar-brand{
    color: #ffffff !important;
}
.navbar-custom .nav-link {
    color: #ffffff!important;
    position: relative;
    padding: 8px 12px;
}
.navbar-custom .nav-link::after {
    content: "";
    position: absolute;
    left: 0;
    bottom: -4px;
    width: 0%;
    height: 3px;
    background: #ffffff;
    transition: 0.3s;
}
.navbar-custom .nav-link:hover::after {
    width: 100%;
}
.navbar-custom .nav-link.active::after {
    width: 100%;
}
.contact-box {
    max-width: 100%;
    margin: 0 auto;
    background-color: #9E182B;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
}
.floating-download {
    position: fixed;
    bottom: 20px;
    right: 20px;
    background-color: #9E182B;
    color: #ffffff;
    width: 55px;
    height: 55px;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 22px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.2);
    transition: 0.3s;
    text-decoration: none;
    z-index: 999;
}

.floating-download:hover {
    background-color: #ffffff;
    color: #9E182B;
    transform: scale(1.1);
}
.feature-img {
    width: 60px;
    height: auto;
}
</style>

</head>
    <body>
        <div class="text-center pt-0">
            <img src="{{ url('/pay') }}" alt="Logo" class="logo-img">
        </div>
        <nav class="navbar navbar-expand-lg nav-font navbar-custom sticky-top">
            <div class="container justify-content-center">
                <ul class="navbar-nav text-center" >
                    <li class="nav-item"><a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="/">Home</a>
                    </li>
                    <li class="nav-item"><a class="nav-link {{ request()->is('pemilik') ? 'active' : '' }}" href="/pemilik">Pemilik Kos</a>
                    </li>
                    <li class="nav-item"><a class="nav-link {{ request()->is('penghuni') ? 'active' : '' }}" href="/penghuni">Penghuni Kos<a>
                    </li>
                    <li class="nav-item"><a class="nav-link {{ request()->is('info') ? 'active' : '' }}" href="/info">Info<a></li>
                    
                </ul>
            </div>
        </nav>
        <div class="container-fluid px-5 mt-4">
            @yield('content')
        </div>
        <a href="{{ asset('apk/kostpay.apk') }}" class="floating-download" download><i class="bi bi-download"></i></a>
        <footer class="mt-5 py-3 contact-box">
            <div class="d-flex justify-content-center align-items-center gap-5 flex-wrap text-light">
                <div class="d-flex align-items-center gap-2">
                    <i class="bi bi-facebook fs-5"></i>
                    <span>KostPay</span>
                </div>
                <div class="d-flex align-items-center gap-2">
                    <i class="bi bi-envelope-fill fs-5"></i>
                    <span>@kostpay.ac.id</span>
                </div>
                <div class="d-flex align-items-center gap-2">
                    <i class="bi bi-instagram fs-5"></i>
                    <span>inthekostpay</span>
                </div>
                <div class="d-flex align-items-center gap-2">
                    <i class="bi bi-whatsapp fs-5"></i>
                    <span>0812-3456-7892</span>
                </div>
            </div>
        </footer>
    </body>
</html>
