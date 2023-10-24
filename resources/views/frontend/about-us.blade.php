@extends('frontend.layout.main')
@section('title', 'About Us')
@section('content')
    <!-- PROFIL START -->
    <section class="home-slider" id="header-content">
        <div id="hero-slider" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner position-relative">
                <div class="carousel-item active" style="background-image:url('{{ asset('storage/' . $aboutus->image) }}');">
                    <div class="home-center">
                        <div class="home-content-center">                           
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-10">
                                        <div class="hero-content text-center text-white position-relative top-150 pt-4">
                                            
                                            <h1 class="hero-heading display-4 text-capitalize mt-3 font-weight-500">{{ $aboutus->title }} </h1>
                                            
                                        </div>
                                        <!--end homt-content-->
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div>
                        </div>
                    </div>
                </div>
                <!--end carousel-item-->
                
                
            </div>
            <!--end carousel-inner-->
           
        </div><!--end carousel-->
    </section>
    <!--END HOME-->

     
    <!-- PROFIL START -->
    <section class="section" id="profil">        

        <div class="container">
            <div class="row justify-content-center"> 
                <div class="col-lg-10">
                    <div class="features">
                        <div>   
                        {!! $aboutus->content !!}  
                        <!-- {{ $aboutus->content }} -->
                        </div>
                    </div>
                </div>               

            </div>

        </div>
    </section>
    <!-- PROFIL END -->
    
@endsection