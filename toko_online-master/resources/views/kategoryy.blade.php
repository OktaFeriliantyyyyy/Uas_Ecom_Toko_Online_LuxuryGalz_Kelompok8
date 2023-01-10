@extends('layouts.master')
@section('title')
{{ $title }} - {{ config('app.name') }}
@endsection
@section('content')
<section class="clean-block clean-info dark" style="background-color: #b9cdeb">
        <div class="container">
            <div class="block-heading">
                <br>
                <br>
                <h2 class="text-info">Silahkan Pilih Kategori</h2>
            </div>
            <div class="row justify-content-center">
                @foreach ($categories as $category)
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-4">
                    <a class="card-link" href="{{ route('category',['category' => strtolower(str_replace(' ','-', $category->category))] )}}" style="font-size: 20px;">
                    <div class="card shadow-sm" style="border-radius: 120px 120px 0px 0px; background-color: #bf73c0">
                            <img class="card-img-top" style="weight: 100px height: 200px" src="{{ Storage::url($category->photo) }}">
                            <div class="card-body text-center">
                                <h5>{{$category->category}}</h5>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection