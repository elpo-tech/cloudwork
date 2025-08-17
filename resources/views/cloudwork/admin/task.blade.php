<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>All Tasks | Cloud Workly </title>
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
                                    <a data-bs-toggle="modal" data-bs-target="#addtask" class="btn btn-primary btn-rounded btn-fw">Add Tasks</a><br><br>
                                    @include('cloudwork.modal.addtask')
                                    <h4 class="card-title">List Of Available Task For you</h4>

                                    </p>
                                    <div class="table-responsive">
                                        <table class="table" id="example1">
                                            <thead>
                                                <tr>
                                                    <th>Order Code</th>
                                                    <th>Order Name</th>
                                                    <th>Amount</th>
                                                    <th>Duration</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($tasks AS $ts)
                                                <tr>
                                                    <td>#{{$ts->code}}</td>
                                                    <td>{{$ts->title}}</td>
                                                    <td>${{number_format($ts->pay, 2, '.', ',')}}</td>
                                                    <td>{{$ts->dead}} Minutes</td>
                                                    <td>
                                                        <div class="form-check form-check-success">
                                                            <label class="form-check-label">
                                                                @if($ts->status == '1')
                                                                <input type="checkbox" class="form-check-input" checked> Active
                                                                @else
                                                                <input type="checkbox" class="form-check-input"> Inactive
                                                                @endif
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#edittask{{$ts->id}}">
                                                            <i class="ti ti-pencil-alt"></i> Edit
                                                        </a>
                                                        <a class="btn btn-danger btn-sm" href="{{url('delete_task/'.$ts->id)}}" onclick="confirmationtask(event)">
                                                            <i class="ti ti-trash"></i> Delete
                                                        </a>

                                                    </td>
                                                </tr>
                                                @include('cloudwork.modal.edittask')
                                                @endforeach
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