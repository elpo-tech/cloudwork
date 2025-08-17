<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Complete Task | Cloud Workly </title>
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
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <form id="registrati" action="{{url('submit_task/'.$task->id)}}" Method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">

                                            <div class="col-sm-12">
                                                <div class="form-group ">
                                                    <label>Task Insrtuctions</label>
                                                    <textarea style="height: 300px;" class="form-control" id="exampleTextarea1" name="descr" disabled rows="4" placeholder="Type Here ....">{{$task->instruct}}</textarea>


                                                </div>
                                            </div>

                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label>Order Code</label>
                                                    <input type="text" class="form-control" value="#{{$task->code}}" disabled>

                                                </div>
                                            </div>


                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label>Order Name</label>
                                                    <input type="text" class="form-control" name="oname" value="{{$task->title}}" disabled required>

                                                </div>
                                            </div>

                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label>Budget($)</label>
                                                    <input type="text" class="form-control" name="amnt" min="0" value="${{number_format($task->pay, 2, '.', ',')}}" disabled required>

                                                </div>
                                            </div>


                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label>Duration (Minutes)</label>
                                                    <input type="text" class="form-control" name="time" value="{{$task->dead}}" disabled required>

                                                </div>
                                            </div>


                                        </div>

                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>Proof Upload</label>
                                                <input type="file" name="file" class="file-upload-default">
                                                <div class="input-group col-xs-12">
                                                    <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                                                    <span class="input-group-append">
                                                        <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>

                                        <button type="submit" class="btn btn-success btn-rounded btn-fw" onclick="confirmationdo(event)">
                                            <i class="fa fa-file-text"></i> Upload Task
                                        </button>


                                        <a class="btn btn-primary btn-rounded btn-fw" href="{{url('/progress-task')}}">
                                            <i class="fa fa-times"></i> Cancel
                                        </a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->

                @include('cloudwork.parts.footer')