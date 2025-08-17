<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Approved Tasks | Cloud Workly </title>
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
                                    <h4 class="card-title">List Of Approved Tasks</h4>
                                    <h5>{{$task->count()}} Tasks</h5> <br><br>
                                    </p>
                                    <div class="table-responsive">
                                        <table class="table" id="example1">
                                            <thead>
                                                <tr>
                                                    <th>Order Code</th>
                                                    <th>Order Name</th>
                                                    <th>User</th>
                                                    <th>Status</th>
                                                    <th>Payment</th>
                                                    <th>Date</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($task AS $ts)
                                                <tr>
                                                    <td>#{{$ts->code}}</td>
                                                    <td>{{$ts->title}}</td>
                                                    <td>{{ $ts->sta ? $ts->sta->username : 'Unassigned' }}</td>
                                                    <td>
                                                        <label class="badge badge-success">{{$ts->status}}</label>
                                                    </td>
                                                    <td>${{number_format($ts->pay, 2, '.', ',')}}</td>
                                                    <td>{{ date('d/m/Y', strtotime($ts->updated_at)) }}</td>

                                                </tr>

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