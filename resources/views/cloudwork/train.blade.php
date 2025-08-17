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
                                    <input type="text" id="tcheck" value="{{Auth::user()->level}}" hidden />
                                    <p> Increase your task pay with our online bootcamp. Get Matched with trainers who will teach you to do the highest paying tasks</p>
                                    @if(Auth::user()->level == 'Level 1')
                                    <a href="{{url('/paytrain/2500')}}" class="btn btn-primary btn-rounded btn-fw">Pay For Training</a>
                                    @endif
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
                                                    <td><a class=" btn badge badge-success get-started">Get Started</a></td>
                                                </tr>
                                                <tr>
                                                    <td>Audio Transcription</td>
                                                    <td>53275532</td>

                                                    <td><a class=" btn badge badge-success get-started">Get Started</a></td>
                                                </tr>
                                                <tr>
                                                    <td>Data Categorization</td>
                                                    <td>53275533</td>

                                                    <td><a class=" btn badge badge-success get-started">Get Started</a></td>
                                                </tr>
                                                <tr>
                                                    <td>LiDAR Annotation</td>
                                                    <td>53275534</td>

                                                    <td><a class=" btn badge badge-success get-started">Get Started</a></td>
                                                </tr>
                                                <tr>
                                                    <td>Content Moderation</td>
                                                    <td>53275535</td>

                                                    <td><a class=" btn badge badge-success get-started">Get Started</a></td>
                                                </tr>
                                                <tr>
                                                    <td>Online Writing</td>
                                                    <td>53275535</td>

                                                    <td><a class=" btn badge badge-success get-started">Get Started</a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- SweetAlert2 CDN -->
                <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

                <script>
                    document.querySelectorAll('.get-started').forEach(button => {
                        button.addEventListener('click', function() {
                            let level = document.getElementById('tcheck').value;

                            if (level.toLowerCase() === 'level 1') {
                                Swal.fire({
                                    title: "You have not paid for this training",
                                    text: "Pay To Proceed",
                                    icon: "warning",
                                    showCancelButton: true,
                                    confirmButtonColor: "#162C84",
                                    cancelButtonColor: "#d33",
                                    confirmButtonText: "Pay"
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        // Redirect to payment page
                                        window.location.href = "/paytrain/2500";
                                    }
                                });
                            } else {
                                // Redirect to training page
                                window.location.href = "youtube.com";
                            }
                        });
                    });
                </script>

                <script>
                    function train(ev) {
                        ev.preventDefault();

                        var tcheck = Document.getElementById("tcheck").value;

                        alert(tcheck);

                        if (tcheck == 'Level 1') {
                            ev.preventDefault();
                            var urlToRedirect = ev.currentTarget.getAttribute('href');

                            console.log(urlToRedirect);
                            Swal.fire({
                                title: "You have not paid for this training",
                                text: "Pay To Proceed",
                                icon: "warning",
                                showCancelButton: true,
                                confirmButtonColor: "#162C84",
                                cancelButtonColor: "#d33",
                                confirmButtonText: "Pay"
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    window.location.href = urlToRedirect;

                                }
                            });
                        } else {
                            window.location.href = "youtube.com";

                        }

                    }
                </script>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->

                @include('cloudwork.parts.footer')