@extends('backend.layout.main')
@section('content')
<section class="content">
    <div class="container-fluid">
      <form action="/control/news" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card card-secondary">
            <div class="card-header">
                <h3 class="card-title">Add New</h3>
            </div>
              <!-- /.card-header -->
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <!-- <label for="customFile">Custom File</label> -->
                        <img class="img-preview img-fluid mb-3 col-sm-3"/>
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
                        <input type="text" class="form-control @error('title') is-invalid @enderror" placeholder="Title" id="title" name="title" value="{{ old('title') }}">
                        @error('title')
                          <span id="exampleInputEmail1-error" class="error invalid-feedback">{{ $message }}</span>
                        @enderror
                      </div>
                      
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Url</label>
                        <input type="text" class="form-control @error('url') is-invalid @enderror" placeholder="url" id="url" name="url" value="{{ old('url') }}">
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
                        <input type="text" class="form-control @error('subtitle') is-invalid @enderror" placeholder="Sub Title" id="subtitle" name="subtitle" value="{{ old('subtitle') }}">
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
                        {{ old('content') }}
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
                        
                          <option value="1" @if(old('status') == 1) selected  @endif>Aktif</option>
                          <option value="0" @if(old('status') == 0) selected  @endif>Non aktif</option>
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
  const slug = document.querySelector('#url');

  title.addEventListener('change', function(){
    //kita akan fetch data dari method controller dashboard
    fetch('/control/news/checkSlug?title=' + title.value)
    .then(response => response.json())
    .then(data => slug.value = data.slug)
  });

  document.addEventListener('trix-file-accept', function(e){
    e.preventDefault();
  });
  
</script>
@endsection