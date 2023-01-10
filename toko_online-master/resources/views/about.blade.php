@extends('layouts.master')
@section('title')
{{ $title }} - {{ config('app.name') }}
@endsection
@section('content')
<section style="background-color: #669fdd">
<div class="container" >
    <div class="row justify-content-center"  >
        <div class="col-md-7" style="margin-top: 64px "  >
            <div class="card o-hidden border-0 shadow-lg my-5" style="border-radius: 120px 120px 0px 0px">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                         <h2>By {{ $company->name }}<br></h2>
                                            <p>{{ $company->description }}</p>
                                        </div>
                                     </div>
                                 </div>
                            </div>
                        </div>                    
                     </div>
                 </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection