@extends('layouts/admin_master')

@section('dashboard_content')

    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>"Add Banner", <span>Welcome Here.</span></h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Home</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <section id="main-content">
                    <div class="row">
                        <div class="ml-5 mt-3">
                            <form action="{{route('banner.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="float-left mr-5">
                                    <div class="form-group mb-5">
                                        <label for="your_name">
                                            <h4>Your Name</h4>
                                        </label>
                                        <input type="text" class="form-control" id="your_name" name="your_name"
                                            aria-describedby="emailHelp" placeholder="Enter your name">

                                    </div>
                                    <div class="form-group mb-5">
                                        <label for="your_bio">
                                            <h4>Your Bio</h4>
                                        </label>
                                        <input type="text" class="form-control" id="your_bio" name="your_bio"
                                            placeholder="Enter Your Bio">
                                        <small id="emailHelp" class="form-text text-muted">It will be highest 20
                                            words.</small>
                                    </div>
                                </div>
                                <div class="float-right ml-5">
                                    <div class="form-group mb-5">
                                        <label for="your_img">
                                            <h4>Your Image</h4>
                                        </label>
                                        <input type="file" class="form-control" id="your_img" name="your_img">
                                    </div>
                                </div>
                                <div class="clearfix"></div>

                                <button type="submit" name="submit" class="btn btn-primary">Submit</button>

                            </form>

                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

@endsection
