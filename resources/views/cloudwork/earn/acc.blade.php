<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Earnings | Cloud Workly </title>
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
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="statistics-details d-flex align-items-center justify-content-between">


                                                <div>
                                                    <p class="statistics-title">Total Earned</p>
                                                    <h3 class="rate-percentage">${{number_format($earn->earn, 2, '.', ',')}}</h3>
                                                    <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>${{number_format($earn->earn, 2, '.', ',')}}</span></p>
                                                </div>
                                                <div class="d-none d-md-block">
                                                    <p class="statistics-title">Available For Withdrawal</p>
                                                    <h3 class="rate-percentage">${{number_format($earn->bal, 2, '.', ',')}}</h3>
                                                    <p class="text-success d-flex"><i class="mdi mdi-menu-down"></i><span>${{number_format($earn->bal, 2, '.', ',')}}</span></p>
                                                </div>
                                                <div class="d-none d-md-block">
                                                    <p class="statistics-title">Total Withdrawn</p>
                                                    <h3 class="rate-percentage">${{number_format($earn->with, 2, '.', ',')}}</h3>
                                                    <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>${{number_format($earn->with, 2, '.', ',')}}</span></p>
                                                </div>
                                                <div>
                                                    <p class="statistics-title">Account Balance</p>
                                                    <h3 class="rate-percentage">${{number_format($earn->bal, 2, '.', ',')}}</h3>
                                                    <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>${{number_format($earn->bal, 2, '.', ',')}}</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


                    <div class="row">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">My Transactions</h4>

                                    </p>
                                    <div class="table-responsive">
                                        <table class="table" id="example1">
                                            <thead>
                                                <tr>
                                                    <th>Ref Number</th>
                                                    <th>Service</th>
                                                    <th>Date</th>
                                                    <th>Status</th>
                                                    <th>Amount</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($trans AS $ts)
                                                <tr>
                                                    <td>#{{$ts->ref}}</td>
                                                    <td>{{$ts->type}}</td>
                                                    <td>{{ date('d/m/Y', strtotime($ts->created_at)) }}</td>
                                                    <td>
                                                        <label class="badge badge-success">{{$ts->status}}</label>
                                                    </td>
                                                    <td>${{number_format($ts->amnt, 2, '.', ',')}}</td>


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