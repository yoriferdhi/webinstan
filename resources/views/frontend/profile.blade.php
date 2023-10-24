@extends('frontend.layout.main')
@section('title', 'Profile')
@section('content')
    <!-- PROFIL START -->
    <section class="section" id="profil">        

    <div class="container">
        <div class="row justify-content-center mt-5"> 
            <div class="col-lg-6">
                <img src="{{ asset('storage/' . $profile->image) }}" class="img-fluid"/>
            </div>

            <div class="col-lg-6">
                <div class="features">
                    <div>                                                      
                        {!! $profile->content !!}
                    </div>
                </div>
            </div> 
            
            
        </div>

    </div>
    </section>
    <!-- PROFIL END -->
@endsection