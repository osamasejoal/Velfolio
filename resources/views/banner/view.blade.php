@extends('layouts/admin_master')

@section('dashboard_content')
    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>"View Banner", <span>Welcome Here</span></h1>
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
                <section id="main-content" class="mb-5">
                    <div class="row">

                        <table class="table table-striped table-bordered col-8 text-center mx-auto mt-5">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Your Name</th>
                                    <th>Your Bio</th>
                                    <th>Your Image</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($banner_data as $banner_datas)
                                    <tr>
                                        <td>{{$banner_datas->id}}</td>
                                        <td>{{$banner_datas->your_name}}</td>
                                        <td>{{$banner_datas->your_bio}}</td>
                                        <td>
                                            <img width="200px" src="{{asset('uploads/banner_img/' . $banner_datas->your_img)}}" alt="">
                                        </td>
                                        <td style="justify-content: space-around" class="text-center d-flex">
                                            <a class="btn btn-info" href="{{route('banner.edit', $banner_datas->id)}}">Edit</a>
                                            <a class="btn btn-danger" href="#">Dlelete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
