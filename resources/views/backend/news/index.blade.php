@extends('backend.layout.main')
@section('content')
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="card">
              <div class="card-header">
                <h3 class="card-title">List {{ $title }}</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                @if(session()->has('success'))
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h5><i class="icon fas fa-check"></i> Success!</h5>
                    {{ session('success') }}
                </div>
                @endif
              <a href="/control/news/create" class="btn btn-secondary buttons-copy buttons-html5" tabindex="0" aria-controls="example1"><span><i class="fas fa-plus"></i> Add New</span></a>
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Title</th>
                            <th>Url</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($news as $data)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $data->title }}</td>
                            <td>{{ $data->url }}</td>
                            <td>{{ $data->status }}</td>
                            <td><a href="/control/news/{{ $data->url }}" class="btn btn-tool">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="/control/news/{{ $data->url }}/edit" class="btn btn-tool">
                                    <i class="fas fa-pen"></i>
                                </a>
                                <form action="/control/news/{{ $data->url }}" method="post" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-tool border-0" onclick="return confirm('Are you sure to delete ?')"> <i class="fas fa-minus"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
    </div>
</section>
@endsection