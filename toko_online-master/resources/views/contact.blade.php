@extends('layouts.app')
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title> @yield('title') </title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="{{ asset('fonts/simple-line-icons.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="{{ asset('css/Map-Clean.css') }}">
    <link rel="stylesheet" href="{{ asset('css/smoothproducts.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Testimonials.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mystyle.css') }}">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
    @yield('style')
    <!-- Custom fonts for this template-->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">

    <link rel="icon" href="{{ asset('img/navbar/Luxury Galz.png') }}">
    <style>
        html {
            scroll-behavior: smooth;
        }
        .rotate-n-15{
            transform: rotate(-15deg);
        }
        .logo{
    display: flex;
    align-items: center;
        }
.logo img{
    width: 100px;
}
    </style>
</head>

<body>
    <div class="icons" style="position: fixed; bottom: 30px; right: 0; z-index: 1030">
        <a href="{{ $company->whatsapp }}" target="_blank" style="width: 70px;height: 70px;"><img src="{{ asset('img/e-commerce/whatsapp.png') }}" style="width: 70px;height: 70px;padding: 15px;"></a>
    </div>
    <nav class="navbar navbar-expand-lg fixed-top shadow-lg clean-navbar">
        <div class="container">
            <a class="navbar-brand logo d-flex align-items-center justify-content-center" href="{{ route('home') }}">
           <a href="#" class="logo"><img src="img/navbar/Luxury Galz.png" alt=""></a>
            <button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1">
                <span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="{{ route('about')}}" style="color: #80227d">About Us </a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="{{ route('kategoryy') }}" style="color: #80227d">Category</a></li>
                    <li class=" nav-item" role="presentation"><a class="nav-link" href="{{ route('product') }}"style="color: #80227d">Product</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="{{ route('contact') }}"style="color: #80227d"><i class="fas fa-phone"></i></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="{{ route('home') }}"style="color: #80227d"><i class="fas fa-home"></i></a></li>
                    <li class="nav-item active" role="presentation"><a class="nav-link" href="{{ route('login') }}"style="color: #80227d"><i class="fas fa-user"></i></a></li>
                    @if ($title == 'Keranjang')
                    <li class="nav-item active" role="presentation">
                        <a class="nav-link" href="{{ route('orders.cart') }}" style="color: #80227d">
                            <i class="fas fa-shopping-cart" ></i>
                            @if (session('cart'))
                                @php
                                $i=0;
                                    foreach (session('cart') as $id => $details) {
                                        $i++;
                                    }
                                @endphp
                                <span class="badge badge-primary" style="position: relative; top: -10px;">{{ $i }}</span>
                            @endif
                        </a>
                    </li>
                    @else
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" href="{{ route('orders.cart') }}">
                            <i class="fas fa-shopping-cart"></i>
                            @if (session('cart'))
                                @php
                                $i=0;
                                    foreach (session('cart') as $id => $details) {
                                        $i++;
                                    }
                                @endphp
                                <span class="badge badge-primary" style="position: relative; top: -10px;">{{ $i }}</span>
                            @endif
                        </a>
                    </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    @yield('title')
        
    <footer id="contact-us" class="page-footer dark" id="page-footer" style="background-image: url(&quot;{{ asset('img/navbar/R (6).png') }}&quot;);">
        <div class="container text-center">
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <h4 class="text-white mb-3">Hubungi Kami</h4>
            <div><i class="fa fa-phone text-white mr-2 mb-2" style="font-size: 22px;height: 24px; width: 24.75px;"></i>
                <a href="tel:{{$company->phone_number}}" target="_blank" class="text-white">{{phone_format($company->phone_number)}}<br></a>
            </div>
            <div><i class="fab fa-whatsapp text-white mr-2 mb-2" style="font-size: 22px;height: 24px; width: 24.75px;"></i>
                <a href="{{$company->whatsapp}}" target="_blank" class="text-white">{{phone_format($company->whatsapp_number)}}<br></a>
            </div>
            <div><i class="fas fa-mail-bulk text-white mr-2 mb-2" style="font-size: 22px;height: 24px; "></i>
                <a href="mailto:{{$company->email}}" target="_blank" class="text-white">{{$company->email}}<br></a>
            </div>
        </div>
        <div class="container text-center">
            <hr>
            <h5 class="text-white">Pembayaran dapat melalui :</h5>
            <div class="icon">
                <img src="{{ asset('img/e-commerce/bca.png') }}" style="height: 50px">
                <img src="{{ asset('img/e-commerce/bni.png') }}" style="height: 50px">
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <div class="footer-copyright" style="background-color: #80227d">
            <span class="text-white">Copyright &copy; {{ $company->name }}. Kelompok 8</span>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    @include('sweet::alert')
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="{{ asset('js/smoothproducts.min.js') }}"></script>
    <script src="{{ asset('js/theme.js') }}"></script>
    @stack('scripts')
    <script>
        $(document).ready(function() {
            $("#categorySearch").on("change", function() {
                const category = $(this).val();
                const cat = category.replace(/ /g,"-");

                if (category != '') {
                    document.location.href = "{{ url('') }}/category/" + cat.toLowerCase();
                } else {
                    document.location.href = "{{ route('product')}}";
                }
            });
            $("#typeSearch").on("change", function() {
                const category = $("#categorySearch").val();
                const type = $(this).val();
                const cat = category.replace(/ /g,"-");

                if (type != '') {
                    document.location.href = "{{ url('') }}/type/" + type + "/" +  cat.toLowerCase();
                } else {
                    document.location.href = "{{ url('') }}/category/" + cat.toLowerCase();
                }
            });
        });
    </script>
</body>

</html>