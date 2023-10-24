@extends('backend.layout.main')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                @if(session()->has('success'))
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h5><i class="icon fas fa-check"></i> Success!</h5>
                    {{ session('success') }}
                </div>
                @endif
                <form action="/control/aboutus/{{ $aboutus->id }}" method="post" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="card card-outline card-info">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label for="customFile">Photos</label>
                                <input type="hidden" name="oldImage" value="{{ $aboutus->image }}">
                                @if($aboutus->image)
                                <img src="{{ asset('storage/' . $aboutus->image) }}" class="img-preview img-fluid mb-3 col-sm-3"/>
                                @else
                                <img class="img-preview img-fluid mb-3 col-sm-3"/>
                                @endif
                                <div class="custom-file">
                                <input type="file" class="custom-file-input @error('image') is-invalid @enderror" id="image" name="image" onchange="previewImg()">
                                <label class="custom-file-label" for="image">Choose file</label>
                                @error('image')
                                    <span id="exampleInputEmail1-error" class="error invalid-feedback">{{ $message }}</span>
                                @enderror
                                </div>
                                
                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                <label>Header Title</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror" placeholder="Sub Title" id="title" name="title" value="{{ old('title', $aboutus->title) }}">
                                @error('title')
                                    <span id="exampleInputEmail1-error" class="error invalid-feedback">{{ $message }}</span>
                                @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Content</label>
                                @error('content')
                                <span id="exampleInputEmail1-error" class="error invalid-feedback">{{ $message }}</span>
                                @enderror
                                <textarea id="summernote" name="content">
                                {{ old('content', $aboutus->content ) }}
                                </textarea>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                    <button type="submit" class="btn btn-info">Submit</button>
                    </div>
                </div>
                </form>
            </div>
            <!-- /.col-->
        </div>
    </div>
</section>
@endsection