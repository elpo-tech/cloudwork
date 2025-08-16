<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Profile | Cloud Workly </title>
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

                        <div class="col-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-3">

                                            <!-- Profile Image -->
                                            <div class="card card-primary card-outline">
                                                <div class="card-body box-profile">
                                                    <div class="text-center">
                                                        <img class="img rounded-circle" width="70%"
                                                            src="{{ asset('assets/profiles/' . Auth::user()->foth1) }}"
                                                            alt="User profile picture">
                                                    </div><br>

                                                    <h4 class="profile-username text-center">{{strtoupper(Auth::User()->fname)}} {{strtoupper(Auth::User()->lname)}}</h4>

                                                    <p class="text-muted text-center">Level: {{ Auth::user()->level}}</p>


                                                    <a href="#" class="btn btn-primary btn-block text-center"><b>Update Picture</b></a>
                                                </div>
                                                <!-- /.card-body -->
                                            </div>
                                            <!-- /.card -->

                                            <!-- About Me Box -->

                                            <!-- /.card -->
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-md-9">
                                            <div class="card card-rounded">
                                                <div class="card-header p-2">
                                                    <ul class="nav nav-pills">
                                                        <li class="nav-item"><a class="nav-link active" href="#settings" data-bs-toggle="tab">Change Settings</a></li>
                                                        <li class="nav-item"><a class="nav-link" href="#password" data-bs-toggle="tab">Change Password</a></li>
                                                    </ul>
                                                </div><!-- /.card-header -->
                                                <div class="card-body">
                                                    <div class="tab-content">

                                                        <!-- /.tab-pane -->

                                                        <div class="active tab-pane" id="settings">
                                                            <form class="form-horizontal">
                                                                <div class="form-group row">
                                                                    <label for="inputName" class="col-sm-2 col-form-label">Username</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control" placeholder="Name" value="{{ Auth::user()->username}}" disabled>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label for="inputName" class="col-sm-2 col-form-label">Full Name</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control" placeholder="Name" value="{{strtoupper( Auth::user()->fname)}} {{strtoupper(Auth::User()->fname)}} {{strtoupper(Auth::User()->lname)}}">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="email" class="form-control" placeholder="Email" value="{{strtoupper( Auth::user()->email)}}">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label for="inputName2" class="col-sm-2 col-form-label">Phone</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control" placeholder="Phone" value="{{ Auth::user()->phone}}">
                                                                    </div>
                                                                </div>


                                                                <div class="form-group row">
                                                                    <div class="offset-sm-2 col-sm-10">
                                                                        <button type="submit" class="btn btn-primary">Update</button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>


                                                        <div class="tab-pane" id="password">
                                                            <form class="form-horizontal">
                                                                <div class="form-group row">
                                                                    <label for="inputName" class="col-sm-2 col-form-label">New Password</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="password" class="form-control" placeholder="New Password">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label for="inputEmail" class="col-sm-2 col-form-label">Confirm New Password</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="password" class="form-control" placeholder="Confirm Password">
                                                                    </div>
                                                                </div>


                                                                <div class="form-group row">
                                                                    <div class="offset-sm-2 col-sm-10">
                                                                        <button type="submit" class="btn btn-primary">Change Password</button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <!-- /.tab-pane -->
                                                    </div>
                                                    <!-- /.tab-content -->
                                                </div><!-- /.card-body -->
                                            </div>
                                            <!-- /.card -->
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->

                @include('cloudwork.parts.footer')