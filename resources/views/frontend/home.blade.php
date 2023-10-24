@extends('frontend.layout.main')
@section('title', 'Home')
@section('content')

    <!--START Hero-->
    <section class="home-slider " id="home">
        <div id="hero-slider" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner position-relative">
                <div class="carousel-item active" style="background-image:url('{{ asset('') }}frontend/images/perumahan/home-2.jpg');">
                    <div class="home-center">
                        <div class="home-content-center">
                            <div class="bg-overlay"></div>
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-10">
                                        <div class="hero-content text-center text-white position-relative top-100 pt-4">
                                            <p class="hero-sub f-24 mb-0">Web untuk Pengembang Perumahan</p>
                                            <h1 class="hero-heading display-4 text-capitalize mt-3 font-weight-500">Template Website Perumahan</h1>
                                            <p class="text-white  op-8 mt-4">
                                                Template website perumahan adalah rancangan website yang sudah jadi dan siap digunakan untuk website real estate. Template website perumahan dapat mempercepat proses pembuatan website Anda dan dapat disesuaikan dengan kebutuhan Anda
                                            </p>
                                            <div class="mt-4 pt-2">                                                
                                                <a href="#product" class="btn btn-outline-white mt-2 ms-2">Pilih Tipe Unit</a>
                                            </div>
                                            
                                        </div>
                                        <!--end homt-content-->
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div>
                        </div>
                    </div>
                </div>
                <!--end carousel-item-->
                <div class="carousel-item" style="background-image:url('{{ asset('') }}frontend/images/perumahan/home-1.jpg');">
                    <div class="home-center">
                        <div class="home-content-center">
                            <div class="bg-overlay"></div>
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-10">
                                        <div class="hero-content text-center text-white position-relative top-100 pt-4">
                                            <p class="hero-sub f-24 mb-0">Website Design untuk Developer</p>
                                            <h1 class="hero-heading display-4 text-capitalize mt-3 font-weight-500">digital Marketing Agency</h1>
                                            <p class="text-white op-8 mt-4">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. enim ad minim veniam, 
                                                quis nostrud exercitation ullamco laboris nisi aliquip commodo consequat.
                                            </p>
                                            <div class="mt-4 pt-2">                                                
                                                <a href="#contact" class="btn btn-outline-white mt-2 ms-2">Hubungi Tim Marketing</a>
                                            </div>
                                            
                                        </div>
                                        <!--end homt-content-->
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div>
                        </div>
                    </div>
                </div>
                <!--end carousal-item-->
                
            </div>
            <!--end carousel-inner-->
            <button class="carousel-control-prev" type="button" data-bs-target="#hero-slider"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#hero-slider"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div><!--end carousel-->
    </section>
    <!--END HOME-->

    <!-- PROFIL START -->
    <section class="section bg-primary" id="profile">        

        <div class="container">
            <div class="row justify-content-center"> 
                <div class="col-lg-10 text-center">
                    <div class="features text-white">
                        <div>   
                            <h2 class="display-6 text-white mb-4">Tentang Perumahan Kami</h2>                              
                            <p class="op-8">Website perumahan dapat membantu Anda memasarkan properti Anda dengan efektif dan mencapai target pasar yang lebih luas. Desain dan template website perumahan yang tepat sangat penting untuk membuat website Anda</p>
                            <a href="/about-us" class="btn btn-outline-white mt-2 ms-2">Selengkapnya</a>
                        </div>
                    </div>
                </div>               

            </div>

        </div>
    </section>
    <!-- PROFIL END -->

    <!-- LAYANAN START -->
    <section class="section large-padding bg-secondary" id="product">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h2 class="display-6 mb-5 text-primary">Tipe Unit</h2>                        
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-lg-4">
                    <div class="blog-menu mt-4">
                        <a href="design-website-template-perumahan-real-estate-detail-produk.html"><img src="{{ asset('') }}frontend/images/perumahan/product-1.jpg" class="img-fluid" alt=""></a>
                        <div class="mt-3 text-center">                            
                            <h3><a href="design-website-template-perumahan-real-estate-detail-produk.html">Azalea</a></h3> 
                            <p>LT:130m LB:100m</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-menu mt-4">
                        <a href="design-website-template-perumahan-real-estate-detail-produk.html"><img src="{{ asset('') }}frontend/images/perumahan/product-2.jpg" class="img-fluid" alt=""></a>
                        <div class="mt-3 text-center">                            
                            <h3><a href="design-website-template-perumahan-real-estate-detail-produk.html">Sevilla</a></h3> 
                            <p>LT:130m LB:100m</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-menu mt-4">
                        <a href="design-website-template-perumahan-real-estate-detail-produk.html"><img src="{{ asset('') }}frontend/images/perumahan/product-3.jpg" class="img-fluid" alt=""></a>
                        <div class="mt-3 text-center">                            
                            <h3><a href="design-website-template-perumahan-real-estate-detail-produk.html">Volendam</a></h3> 
                            <p>LT:130m LB:100m</p>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
    <!-- LAYANAN END -->

    <!-- UNIT START -->
    <section class="section" id="layanan">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="text-center">                        
                        <h2 class="display-6 mb-5 text-primary">Fasilitas</h2>                        
                    </div>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-lg-6">
                    <div class="services-blog mt-4 rd10">
                        <div>
                            <img src="{{ asset('') }}frontend/images/caleg-merah/winner.png" class="img-fluid" alt="">
                        </div>
                        <div class="service-head">
                            <h3 class="text-primary">Lokasi Strategis</h3>
                            <p class="text-muted mb-0">Neque porro quisqua are members of the same family. Their
                                separate existence is a myth. For science, music, sport, etc.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="services-blog mt-4 rd10">
                        <div>
                            <img src="{{ asset('') }}frontend/images/caleg-merah/kemiskinan.png" class="img-fluid" alt="">
                        </div>
                        <div class="service-head">
                            <h3 class="text-primary">Fasilitas Lengkap</h3>
                            <p class="text-muted mb-0">Neque porro quisqua language will be more simple and regular than the
                                existing European languages. It will be as simple as Occidental</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-lg-6">
                    <div class="services-blog mt-4 rd10">
                        <div>
                            <img src="{{ asset('') }}frontend/images/caleg-merah/muda-berjaya.png" class="img-fluid" alt="">
                        </div>
                        <div class="service-head">
                            <h3 class="text-primary">Infrastruktur Matang</h3>
                            <p class="text-muted mb-0">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,
                                consectetur adipisci velit sed quia non numquam modi eius.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="services-blog mt-4  rd10">
                        <div>
                            <img src="{{ asset('') }}frontend/images/caleg-merah/education.png" class="img-fluid" alt="">
                        </div>
                        <div class="service-head">
                            <h3 class="text-primary">Ramah Pejalan Kaki</h3>
                            <p class="text-muted mb-0">Neque porro quisqua existence is a myth. For science, music, sport,
                                etc, Europe uses the same vocabulary their pronunciation.</p>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
    </section>
    <!-- UNIT END -->

    <!--START GALERI-->
    <section class="section pb-0 pt-5" id="gallery">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="text-center">
                        <h2 class="display-6">Galeri</h2> 
                    </div>
                </div>
                <!--end col-->

            </div>
            <!--end row-->
        </div>
        <!--end container-->
        
        <div class="container-fluid px-0 mt-5">
            <div class="row g-0" id="grid">
                <div class="col-md-3 picture-item" data-groups='["profile"]'>
                    <div class="card portfolio overflow-hidden">
                        <div>
                            <img src="{{ asset('') }}frontend/images/caleg-dpd/news-1.jpg" alt="01" class="img-fluid" />
                            <div class="portfolio-overlay"></div>
                            <div class="portfolio-icon position-absolute start-50 translate-middle">
                                <a href="{{ asset('') }}frontend/images/caleg-dpd/news-6.jpg" class="lightbox">
                                    <i class="mdi mdi-plus text-white"></i>
                                </a>
                            </div>
                        </div>
                        <div class="portfolio-content p-4">
                            <a href="#">
                                <h5 class="text-white mb-0">Judul Kegiatan atau Foto</h5>
                            </a>
                        </div>
                    </div>
                    <!--end portfolio-->
                </div>
                <!--end col-->
                <div class="col-md-3 picture-item" data-groups='["business"]'>
                    <div class="card portfolio overflow-hidden">
                        <div>
                            <img src="{{ asset('') }}frontend/images/caleg-dpd/news-8.jpg" alt="01" class="img-fluid" />
                            <div class="portfolio-overlay"></div>
                            <div class="portfolio-icon position-absolute start-50 translate-middle">
                                <a href="{{ asset('') }}frontend/images/caleg-dpd/news-8.jpg" class="lightbox">
                                    <i class="mdi mdi-plus text-white"></i>
                                </a>
                            </div>
                        </div>
                        <div class="portfolio-content p-4">
                            <a href="#">
                                <h5 class="text-white mb-0">Judul Kegiatan atau Foto</h5>
                            </a>
                        </div>
                    </div>
                    <!--end portfolio-->
                </div>
                <!--end col-->
                <div class="col-md-3 picture-item" data-groups='["marketing"]'>
                    <div class="card portfolio overflow-hidden">
                        <div>
                            <img src="{{ asset('') }}frontend/images/caleg-dpd/news-7.jpg" alt="01" class="img-fluid" />
                            <div class="portfolio-overlay"></div>
                            <div class="portfolio-icon position-absolute start-50 translate-middle">
                                <a href="{{ asset('') }}frontend/images/caleg-dpd/news-7.jpg" class="lightbox">
                                    <i class="mdi mdi-plus text-white"></i>
                                </a>
                            </div>
                        </div>
                        <div class="portfolio-content p-4">
                            <a href="#">
                                <h5 class="text-white mb-0">Judul Kegiatan atau Foto</h5>
                            </a>
                        </div>
                    </div>
                    <!--end portfolio-->
                </div>
                <!--end-col-->
                <div class="col-md-3 picture-item" data-groups='["finance"]'>
                    <div class="card portfolio overflow-hidden">
                        <div>
                            <img src="{{ asset('') }}frontend/images/caleg-dpd/news-5.jpg" alt="01" class="img-fluid" />
                            <div class="portfolio-overlay"></div>
                            <div class="portfolio-icon position-absolute start-50 translate-middle">
                                <a href="{{ asset('') }}frontend/images/caleg-dpd/news-5.jpg" class="lightbox">
                                    <i class="mdi mdi-plus text-white"></i>
                                </a>
                            </div>
                        </div>
                        <div class="portfolio-content p-4">
                            <a href="#">
                                <h5 class="text-white mb-0">Judul Kegiatan atau Foto</h5>
                            </a>
                        </div>
                    </div>
                    <!--end portfolio-->
                </div>
                <!--end col-->
                <div class="col-md-3 picture-item" data-groups='["branding"]'>
                    <div class="card portfolio overflow-hidden">
                        <div>
                            <img src="{{ asset('') }}frontend/images/caleg-dpd/news-4.jpg" alt="01" class="img-fluid" />
                            <div class="portfolio-overlay"></div>
                            <div class="portfolio-icon position-absolute start-50 translate-middle">
                                <a href="{{ asset('') }}frontend/images/caleg-dpd/news-4.jpg" class="lightbox">
                                    <i class="mdi mdi-plus text-white"></i>
                                </a>
                            </div>
                        </div>
                        <div class="portfolio-content p-4">
                            <a href="#">
                                <h5 class="text-white mb-0">Judul Kegiatan atau Foto</h5>
                            </a>
                        </div>
                    </div>
                    <!--end portfolio-->
                </div>
                <!--end col-->
                <div class="col-md-3 picture-item" data-groups='["marketing"]'>
                    <div class="card portfolio overflow-hidden">
                        <div>
                            <img src="{{ asset('') }}frontend/images/caleg-dpd/news-3.jpg" alt="01" class="img-fluid" />
                            <div class="portfolio-overlay"></div>
                            <div class="portfolio-icon position-absolute start-50 translate-middle">
                                <a href="{{ asset('') }}frontend/images/caleg-dpd/news-3.jpg" class="lightbox">
                                    <i class="mdi mdi-plus text-white"></i>
                                </a>
                            </div>
                        </div>
                        <div class="portfolio-content p-4">
                            <a href="#">
                                <h5 class="text-white mb-0">Judul Kegiatan atau Foto</h5>
                            </a>
                        </div>
                    </div>
                    <!--end portfolio-->
                </div>
                <!--end col-->
                <div class="col-md-3 picture-item" data-groups='["marketing"]'>
                    <div class="card portfolio overflow-hidden">
                        <div>
                            <img src="{{ asset('') }}frontend/images/caleg-dpd/news-2.jpg" alt="01" class="img-fluid" />
                            <div class="portfolio-overlay"></div>
                            <div class="portfolio-icon position-absolute start-50 translate-middle">
                                <a href="{{ asset('') }}frontend/images/caleg-dpd/news-2.jpg" class="lightbox">
                                    <i class="mdi mdi-plus text-white"></i>
                                </a>
                            </div>
                        </div>
                        <div class="portfolio-content p-4">
                            <a href="#">
                                <h5 class="text-white mb-0">Judul Kegiatan atau Foto</h5>
                            </a>
                        </div>
                    </div>
                    <!--end portfolio-->
                </div>
                <!--end col-->
                <div class="col-md-3 picture-item" data-groups='["business"]'>
                    <div class="card portfolio overflow-hidden">
                        <div>
                            <img src="{{ asset('') }}frontend/images/caleg-dpd/news-1.jpg" alt="01" class="img-fluid" />
                            <div class="portfolio-overlay"></div>
                            <div class="portfolio-icon position-absolute start-50 translate-middle">
                                <a href="{{ asset('') }}frontend/images/caleg-dpd/news-1.jpg" class="lightbox">
                                    <i class="mdi mdi-plus text-white"></i>
                                </a>
                            </div>
                        </div>
                        <div class="portfolio-content p-4">
                            <a href="#">
                                <h5 class="text-white mb-0">Judul Kegiatan atau Foto</h5>
                            </a>
                        </div>
                    </div>
                    <!--end portfolio-->
                </div>
                <!--end col-->
            </div>
        </div>
    </section>
    <!--END GALERI-->

    <!-- KONTAK START -->
    <section class="section" id="contact" style="background-image:url('{{ asset('') }}frontend/images/perumahan/bg-section-support.jpg');">
        
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="hero-contact text-white">
                        <p class="text-capitalize f-24">We are creative</p>
                        <h1 class="display-4 text-capitalize mt-4 font-weight-500">Looking for small Business Consulting</h1>
                        <p class="text-white-50 mt-4">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod minim tempor incididunt ut labore et dolore magna aliqua. Ut enim veniam
                            nostrud exercitation laboris nisi ut aliquip consequat.
                        </p>                           
                    </div>
                    <!--end homt-title-->
                </div>
                <!--end col-->
                <div class="col-lg-4 offset-lg-1">
                    <div class="card mt-3 mt-lg-0">
                        <div class="query-form card-body text-center mt-5 mt-lg-0 p-4 ">
                            <form method="POST">
                                <h3 class="mb-4">Hubungi Kami</h3>
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="inputtname" placeholder="Name" required>
                                </div>
                                <div class="mb-3">
                                    <input type="email" class="form-control" id="inputemail" placeholder="Email" required>
                                </div>
                                <div class="mb-3">
                                    <input type="email" class="form-control" id="inputemail" placeholder="Email" required>
                                </div>
                                <div class="mb-4">
                                    <textarea class="form-control" placeholder="Type your query here..." id="query" style="height: 100px;"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary btn-sm text-uppercase w-100">Kirim</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>

    
    </section>
    <!-- KONTAK END -->

@endsection