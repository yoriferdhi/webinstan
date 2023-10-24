@extends('backend.layout.main')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <!-- Box Comment -->
            <div class="card card-widget">
              <div class="card-header">
              <h3 class="card-title">{{ $news->title }}</h3>
                <!-- <div class="user-block"> -->
                  <!-- <img class="img-circle" src="../dist/img/user1-128x128.jpg" alt="User Image"> -->
                  <!-- <span class="username"><a href="#">Jonathan Burke Jr.</a></span> -->
                  <!-- <span class="description">Shared publicly - 7:30 PM Today</span> -->
                <!-- </div> -->
                <!-- /.user-block -->
                <div class="card-tools">
                  <!-- <button type="button" class="btn btn-tool" title="Mark as read">
                    <i class="far fa-circle"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button> -->
                  <a href="/control/news" class="btn btn-tool"><i class="fas fa-times"></i></a>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                @if($news->image)
                <img class="img-fluid" src="{{ asset('storage/' . $news->image) }}" alt="Photo">
                @else
                  <img class="img-fluid" src="{{ asset('') }}adminlte/dist/img/photo2.png" alt="Photo">
                @endif                
              </div>
              <!-- /.card-body -->
              <div class="card-footer card-comments">
                <div class="card-comment">

                  <div class="comment-text">
                    <span class="username">
                      {{ $news->subtitle }}
                    </span><!-- /.username -->
                        {{ $news->content }}
                  </div>
                  <!-- /.comment-text -->
                </div>
              </div>
              <!-- /.card-footer -->
              <div class="card-footer">
                  <!-- .img-push is used to add margin to elements next to floating images -->
                  <div class="img-push">
                    Footer Button
                  </div>
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          
        </div>
        <!-- /.row -->
    </div>
</section>
@endsection