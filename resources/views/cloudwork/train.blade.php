<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Training Center | Cloud Workly </title>
    <!-- plugins:css -->
    @include('cloudwork.parts.head')
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        @include('cloudwork.parts.topnav')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_sidebar.html -->
            @include('cloudwork.parts.sidenav')
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-md-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Cloudworkly Training Bootcamp</h4>

                                    <p> Increase your task pay with our online bootcamp. Get Matched with trainers who will teach you to do the highest paying tasks</p>
                                    <a href="{{url('/paytrain/2500')}}" class="btn btn-primary btn-rounded btn-fw">Pay For Training</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


                    <div class="row">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Training Modules</h4>

                                    </p>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Category</th>
                                                    <th>Training No.</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Image & Video Annotation</td>
                                                    <td>53275531</td>
                                                    <td><a class=" btn badge badge-success" href="{{url('/paytrain/2500')}}" onclick="train(event)">Get Started</a></td>
                                                </tr>
                                                <tr>
                                                    <td>Audio Transcription</td>
                                                    <td>53275532</td>

                                                    <td><a class=" btn badge badge-success" href="{{url('/paytrain/2500')}}" onclick="train(event)">Get Started</a></td>
                                                </tr>
                                                <tr>
                                                    <td>Data Categorization</td>
                                                    <td>53275533</td>

                                                    <td><a class=" btn badge badge-success" href="{{url('/paytrain/2500')}}" onclick="train(event)">Get Started</a></td>
                                                </tr>
                                                <tr>
                                                    <td>LiDAR Annotation</td>
                                                    <td>53275534</td>

                                                    <td><a class=" btn badge badge-success" href="{{url('/paytrain/2500')}}" onclick="train(event)">Get Started</a></td>
                                                </tr>
                                                <tr>
                                                    <td>Content Moderation</td>
                                                    <td>53275535</td>

                                                    <td><a class=" btn badge badge-success" href="{{url('/paytrain/2500')}}" onclick="train(event)">Get Started</a></td>
                                                </tr>
                                                <tr>
                                                    <td>Online Writing</td>
                                                    <td>53275535</td>

                                                    <td><a class=" btn badge badge-success" href="{{url('/paytrain/2500')}}" onclick="train(event)">Get Started</a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->

                @include('cloudwork.parts.footer')