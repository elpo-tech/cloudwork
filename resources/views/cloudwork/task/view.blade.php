<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>View Task | Cloud Workly </title>
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

                                    <div class="row">

                                        <div class="col-sm-12">
                                            <div class="form-group ">
                                                <label>Task Insrtuctions</label>
                                                <textarea style="height: 300px;" class="form-control" id="exampleTextarea1" name="descr" rows="4" disabled placeholder="Type Here ....">{{$task->instruct}}</textarea>


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

                                    <a class="btn btn-success btn-rounded btn-fw" href="{{url('take_task/'.$task->id)}}" onclick="confirmationbid(event)">
                                        <i class="fa fa-file-text"></i> Take Order
                                    </a>


                                    <a class="btn btn-primary btn-rounded btn-fw" href="{{url('/available-task')}}">
                                        <i class="fa fa-times"></i> Cancel
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->

                @include('cloudwork.parts.footer')