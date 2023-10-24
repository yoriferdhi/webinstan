@extends('frontend.layout.main')
@section('title', 'News')
@section('content')
    <!-- News START -->
    <section class="section large-padding bg-secondary" id="berita">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h2 class="display-6 mb-5 text-primary">{{ $title }}</h2>                        
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-6">
                <form action="/news">
                    <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search.." name="search" value="">
                    <button class="btn btn-primary btn-sm text-uppercase" type="submit">Search</button>
                    </div>
                </form>
                </div>
            </div>

            <div class="row mt-4">

                @foreach ($news as $data)
                <div class="col-lg-4">
                    <div class="blog-menu mt-4">
                        <a href="/news/{{ $data->url }}"><img src="{{ asset('storage/' . $data->image) }}" class="img-fluid" alt=""></a>
                        <div class="mt-3 text-center">                            
                            <h4><a href="/news/{{ $data->url }}">{{ $data->title }}</a></h4> 
                            <p>{{ $data->created_at->diffForHumans() }} </p>
                        </div>
                    </div>
                </div>
                @endforeach
                
            </div>
            
        </div>
    </section>
    <!-- News END -->
@endsection