@extends('frontend.layout.main')
@section('title', 'News')
@section('content')
    <!-- News Detail START -->
    <section class="section" id="profil">    
        
        <div class="container">
            <div class="row justify-content-center  mt-5">
                <div class="col-lg-10 text-center">                    
                        
                        <h1 class="hero-heading display-4 text-capitalize mt-3 font-weight-500">{{ $news->title }}</h1>
                        <p class="op-8 mt-4">{{ $news->subtitle }}</p>
                       
                </div><!--end col-->
            </div><!--end row-->
        </div>

        <div class="container">
            <div class="row justify-content-center mt-5"> 
                <div class="col-lg-12">
                    <img src="{{ asset('storage/' . $news->image) }}" class="img-fluid mb-4">
                </div>

                <div class="col-lg-12">
                   
                    <div>
                        {!! $news->content !!}
                    </div> 
                
                
            </div>

        </div>
    </section>
    <!-- News Detail END -->
@endsection