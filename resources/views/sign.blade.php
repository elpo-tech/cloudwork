<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sign Up | Cloud Workly</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="/assets/vendors/feather/feather.css">
    <link rel="stylesheet" href="/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/assets/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="/assets/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/vendors/typicons/typicons.css">
    <link rel="stylesheet" href="/assets/vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="/assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="/assets/css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="/assets/images/favicon.png" />
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth px-0">
                <div class="row w-100 mx-0">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                            <div>
                                <center> <img src="/assets/images/logo.png" alt="logo" width="50%"></center>
                            </div>
                            <h4>Fill The Form To Get Started</h4>

                            <form id="registerForm" class="pt-3">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputUsername1">First Name</label>
                                    <input type="text" class="form-control" name="fname" placeholder="Enter First Name" required>
                                    <small class="error" data-error-for="fname" style="color:red"></small>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputUsername1">Last Name</label>
                                    <input type="text" class="form-control" name="lname" placeholder="Enter Last Name" required>
                                    <small class="error" data-error-for="lname" style="color:red"></small>
                                </div>


                                <div class="form-group">
                                    <label for="exampleInputUsername1">Username</label>
                                    <input type="text" class="form-control" name="username" placeholder="Enter Username" required>
                                    <small class="error" data-error-for="username" style="color:red"></small>
                                    @if($errors->has('username'))
                                    <span class="text-danger">{{$errors->first('username')}}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputUsername1">Email</label>
                                    <input type="email" class="form-control" name="email" placeholder="Enter Email" required>
                                    <small class="error" data-error-for="email" style="color:red"></small>
                                    @if($errors->has('email'))
                                    <span class="text-danger">{{$errors->first('email')}}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputUsername1">Phone Number</label>
                                    <input type="text" class="form-control" name="phone" placeholder="Enter Phone" required>
                                    <small class="error" data-error-for="phone" style="color:red"></small>
                                    @if($errors->has('phone'))
                                    <span class="text-danger">{{$errors->first('phone')}}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputUsername1">Country</label>
                                    <select class="form-select" name="country">
                                        @include('cloudwork.parts.country')
                                    </select>
                                    <small class="error" data-error-for="country" style="color:red"></small>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputUsername1">Password</label>
                                    <input type="password" class="form-control" name="password" placeholder="Enter Password" required>
                                    <small class="error" data-error-for="password" style="color:red"></small>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputUsername1">Password Confirmation</label>
                                    <input type="password" class="form-control" name="password_confirmation" placeholder="Enter Confirm Password" required>
                                    <small class="error" data-error-for="password_confirmation" style="color:red"></small>
                                </div>

                                <div class="mb-4">
                                    <div class="form-check">
                                        <label class="form-check-label text-muted">
                                            <input type="checkbox" name="terms" class="form-check-input"> I agree to all Terms & Conditions</label>
                                        <small class="error" data-error-for="terms" style="color:red"></small>
                                    </div>
                                </div>
                                <div class="mt-3 d-grid gap-2">
                                    <button class="btn btn-block btn-primary btn-lg fw-medium auth-form-btn">SIGN UP</button>
                                </div>
                                <div class="text-center mt-4 fw-light"> Already have an account? <a href="{{url('/')}}" class="text-primary">Login</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(function() {

            function setError(field, message) {
                $(`[data-error-for="${field}"]`).text(message);
            }

            function clearError(field) {
                $(`[data-error-for="${field}"]`).text("");
            }

            // Live uniqueness check on blur
            $("[name='username'], [name='email'], [name='phone']").on("blur", function() {
                let field = $(this).attr("name");
                let value = $(this).val().trim();

                if (value === "") {
                    setError(field, `${field} is required`);
                    return;
                }

                $.get('/check-unique', {
                    field,
                    value
                }, function(res) {
                    if (!res.unique) {
                        setError(field, `${field} is already taken`);
                    } else {
                        clearError(field);
                    }
                });
            });

            // Password match check on blur
            $("[name='password'], [name='password_confirmation']").on("blur", function() {
                let pass = $("[name='password']").val();
                let passConf = $("[name='password_confirmation']").val();

                if (pass && passConf && pass !== passConf) {
                    setError('password_confirmation', "Passwords do not match");
                } else {
                    clearError('password_confirmation');
                }
            });

            // Final submit check
            $("#registerForm").on("submit", function(e) {
                e.preventDefault();
                let form = $(this);
                let formData = form.serialize();
                let hasError = false;

                // Required field check
                form.find("input[required], select[required]").each(function() {
                    let field = $(this).attr("name");
                    if (!$(this).val()) {
                        setError(field, `${field} is required`);
                        hasError = true;
                    } else {
                        clearError(field);
                    }
                });

                // Password match check
                let pass = $("[name='password']").val();
                let passConf = $("[name='password_confirmation']").val();
                if (pass !== passConf) {
                    setError('password_confirmation', "Passwords do not match");
                    hasError = true;
                }

                // Terms check
                if (!$("[name='terms']").is(":checked")) {
                    setError('terms', "You must agree to the terms");
                    hasError = true;
                } else {
                    clearError('terms');
                }

                // Stop if any errors
                $(".error").each(function() {
                    if ($(this).text() !== "") hasError = true;
                });
                if (hasError) return;


                // AJAX submit
                $.ajax({
                    url: "{{ route('register.store') }}",
                    method: "POST",
                    data: formData,
                    success: function(response) {
                        window.location.href = "/mpesa-payment/" + response.user_id;
                    },
                    error: function() {

                        alert("An error occurred while registering");
                    }
                });
            });

        });
    </script>


    <script src="/assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="/assets/js/off-canvas.js"></script>
    <script src="/assets/js/template.js"></script>
    <script src="/assets/js/settings.js"></script>
    <script src="/assets/js/hoverable-collapse.js"></script>
    <script src="/assets/js/todolist.js"></script>
    <!-- endinject -->
</body>

</html>