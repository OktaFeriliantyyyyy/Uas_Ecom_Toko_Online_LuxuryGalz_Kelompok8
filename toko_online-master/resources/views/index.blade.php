@extends('layouts.master')
@section('title')
Home - {{ config('app.name') }}
@endsection
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="lightslider.css">
    <script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript" src="lightslider.js"></script>
@section('content')
<section id="carousel" >
    <div class="carousel slide" data-ride="carousel" id="carousel-1">
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active ">
                <img class="w-100" src="{{ asset('img/carousel/'.$company->images[0]->image) }}" alt="{{ $company->images[0]->image }}">
                <div class="carousel-caption d-none d-md-block">
                   
                </div>
            </div>
            @foreach ($company->images as $image)
            @if ($image->image != $company->images[0]->image)
            <div class="carousel-item">
                <img class="w-100" src="{{ asset('img/carousel/'.$image->image) }}" alt="{{ $image->image }}">
                <div class="carousel-caption d-none d-md-block">
                   
                </div>
            </div>
            @endif
            @endforeach
        </div>
        <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev"><span class="carousel-control-prev-icon"></span><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button" data-slide="next"><span class="carousel-control-next-icon"></span><span class="sr-only">Next</span></a></div>
    </div>
</section>
    <main class="landing-page">
    <section id="about" class="clean-block clean-hero" style="background-image: url(&quot;{{ asset('img/navbar/R (3).png') }}&quot;);color: rgba(9,162,255,0.24);">
        <div class="text" style="color:#80227d">
            <h2>By {{ $company->name }}<br></h2>
            <p>{{ $company->description }}</p>
        </div>
    </section>
    <section class="clean-block clean-info dark" style="background-color: #bf73c0">
        <div class="container">
            <div class="block-heading">
                <h2 class="text-white">Silahkan Pilih Kategori</h2>
            </div>
            <div class="row justify-content-center">
                @foreach ($categories as $category)
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-4">
                    <a class="card-link" href="{{ route('category',['category' => strtolower(str_replace(' ','-', $category->category))] )}}" style="font-size: 20px;">
                        <div class="card shadow-sm" style="border-radius: 120px 120px 0px 0px; background-color: #669fdd">
                            <img class="card-img-top" style="weight: 100px height: 200px" src="{{ Storage::url($category->photo) }}">
                            <div class="card-body text-center" style="color: black">
                                <h5>{{$category->category}}</h5>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
        </section>
        <section style="background-color: #e99b96">       
        <div class="container">
             <div class="row justify-content-center ">
            <div class="col-md-9 col-lg-9">
            <h2 class="text-center"><br>Terbaru</h2>
                        <div class="products">
                            @if ($products[0] == null)
                            <div class="text-center">
                                <h2>Produk belum tersedia</h2>
                            </div>
                            @endif
                            <div class="row no-gutters">
                                @foreach ($products as $product)                                        
                                <div class="col-xl-4 col-lg-4 col-md-8 col-sm-6 col-12 mb-6">
                                    <div class="clean-product-item">
                                    <div class="card shadow-sm"style="border-radius: 120px 120px 0px 0px;">
                                        <div class="image text-center" >
                                            <a href="{{ route('details-product', ['id' => $product->id, 'name' => strtolower(str_replace(' ','-',$product->name))] )}}">
        
                                                            <img height="200px" src="{{ asset('img/products/'.$product->images[0]->image) }}" alt="{{ $product->images[0]->image }}">
                                                        
                                                </div>
                                            </a>
                                        </div>
                                        <div class="product-name">
                                            <a href="{{ route('details-product', ['id' => $product->id, 'name' => strtolower(str_replace(' ','-',$product->name))] )}}">
                                                <p class="block-with-text" data-toogle="tooltip" style="font-size:12px " title="{{ $product->name }}">{{ $product->name }}</p>
                                            </a>
                                        </div>
                                        <div class="about">
                                            <div class="price" style="font-size:14px text-center">
                                                <h3>
                                                    Rp. {{ number_format($product->price, 2, ',', '.') }} 
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                            </div>
                            <nav>
                                {{ $products->links() }}
                            </nav>
                        </div>
</div>
</div>
<br>
</section>
    <section class="clean-block clean-info dark" style="background-color: #bf73c0">
        <div class="container">
        <div class="intro  pt-5">
                <h2 class="text-center "> <br>Our Features</h2>
                <div class="clean-block add-on social-icons">
                    <div class="icons">
                        <a  style="width: 80px;height: 80px;"><img src="{{ asset('img/e-commerce/credit-card.png') }}" style="width: 80px;height: 80px;padding: 15px;"></a>
                        <a style="width: 80px;height: 80px;"><img src="{{ asset('img/e-commerce/fast.png') }}" style="width: 80px;height: 80px;padding: 15px;"></a>
                        <a style="width: 80px;height: 80px;"><img src="{{ asset('img/e-commerce/original.png') }}" style="width: 80px;height: 80px;padding: 15px;"></a>
                        <a style="width: 80px;height: 80px;"><img src="{{ asset('img/e-commerce/recycle.png') }}" style="width: 80px;height: 80px;padding: 15px;"></a>
                        <a style="width: 80px;height: 80px;"><img src="{{ asset('img/e-commerce/satisfaction.png') }}" style="width: 80px;height: 80px;padding: 15px;"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<div id="client" class="testimonials-clean" style="background-color: #e99b96">
    <div class="container">
        <div class="intro pt-5">
            <h2 class="text-center">Testimonial</h2>
            <p class="text-center">{{ $company->testimonial }}</p>
        </div>
        <div class="row people justify-content-center">
            @foreach ($testimonials as $testimonial)
            <div class="col-md-6 col-lg-4 item">
                <div class="box">
                    <p class="description"> {{$testimonial->description}} </p>
                </div>
                <div class="author">
                    <img class="rounded-circle" src="{{asset('/img/testimonial/'.$testimonial->photo)}}">
                    <h5 class="name"> {{$testimonial->name}} </h5>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
