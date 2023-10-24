@extends('backend.layout.main')
@section('content')
<section class="content">
    <div class="container-fluid">
      <form action="/control/news/{{ $news->url }}" method="post" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="card card-secondary">
            <div class="card-header">
                <h3 class="card-title">Edit</h3>
            </div>
              <!-- /.card-header -->
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <!-- <label for="customFile">Custom File</label> -->
                        <input type="hidden" name="oldImage" value="{{ $news->image }}">
                        @if($news->image)
                        <img src="{{ asset('storage/' . $news->image) }}" class="img-preview img-fluid mb-3 col-sm-3"/>
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
                        <label>Title</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" placeholder="Title" id="title" name="title" value="{{ old('title', $news->title) }}">
                        @error('title')
                          <span id="exampleInputEmail1-error" class="error invalid-feedback">{{ $message }}</span>
                        @enderror
                      </div>
                      
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Url</label>
                        <input type="text" class="form-control @error('url') is-invalid @enderror" placeholder="url" id="url" name="url" value="{{ old('url', $news->url) }}">
                        @error('url')
                          <span id="exampleInputEmail1-error" class="error invalid-feedback">{{ $message }}</span>
                        @enderror
                      </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Sub Title</label>
                        <input type="text" class="form-control @error('subtitle') is-invalid @enderror" placeholder="Sub Title" id="subtitle" name="subtitle" value="{{ old('subtitle', $news->subtitle) }}">
                        @error('subtitle')
                          <span id="exampleInputEmail1-error" class="error invalid-feedback">{{ $message }}</span>
                        @enderror
                      </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Description</label>
                        @error('content')
                          <span id="exampleInputEmail1-error" class="error invalid-feedback">{{ $message }}</span>
                        @enderror
                        <textarea id="summernote" name="content">
                        {{ old('content', $news->content) }}
                        </textarea>
                      </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Status</label>
                        <select class="custom-select @error('status') is-invalid @enderror" id="status" name="status">
                        
                          <option value="1" @if(old('status', $news->status) == 1) selected  @endif>Aktif</option>
                          <option value="0" @if(old('status', $news->status) == 0) selected  @endif>Non aktif</option>
                        </select>
                      </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-info">Submit</button>
                <!-- <button type="cancel" class="btn btn-default float-right">Cancel</button> -->
            </div>
        </div>
      </form>
    </div>
</section>

<script>
  const title = document.querySelector('#title');
  const url   = document.querySelector('#url');

  title.addEventListener('change', function() {
    fetch('/control/news/checkSlug?title=' + title.value)
      // .then(response => response.json())
      // .then(data => url.value = data.slug)
      
    console.log(title.value)
  });
</script>
@endsection