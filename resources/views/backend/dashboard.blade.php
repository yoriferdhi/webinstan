@extends('backend.layout.main')
@section('content')
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>{{ auth()->user()->name }}</h3>

                        <p>Welcome</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <!-- <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="small-box-footer bg-white border-0">LogOut <i class="fas fa-arrow-circle-right"></i></button>
                    </form> -->
                    <!-- <a href="#" class="small-box-footer">LogOut <i class="fas fa-arrow-circle-right"></i></a> -->
                </div>
            </div>
            <!-- ./col -->
            
        </div>
        <!-- /.row -->
    </div>
</section>
@endsection