<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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

                            <form id="registerForm" action="{{ route('register.store') }}" method="POST" class="pt-3">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputUsername1">First Name</label>
                                    <input type="text" class="form-control" name="fname" placeholder="Enter First Name" required>
                                    <div class="error fname-error text-danger"></div>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputUsername1">Last Name</label>
                                    <input type="text" class="form-control" name="lname" placeholder="Enter Last Name" required>
                                    <div class="error lname-error text-danger"></div>
                                </div>


                                <div class="form-group">
                                    <label for="exampleInputUsername1">Username</label>
                                    <input type="text" class="form-control" name="username" placeholder="Enter Username" required>
                                    <div class="error username-error text-danger"></div>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputUsername1">Email</label>
                                    <input type="email" class="form-control" name="email" placeholder="Enter Email" required>
                                    <div class="error email-error text-danger"></div>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputUsername1">Phone Number</label>
                                    <input type="text" class="form-control" name="phone" placeholder="Enter Phone" required>
                                    <div class="error phone-error text-danger"></div>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputUsername1">Country</label>
                                    <select class="form-select" name="country">
                                        @include('cloudwork.parts.country')
                                    </select>
                                    <div class="error country-error text-danger"></div>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputUsername1">Password</label>
                                    <input type="password" class="form-control" name="password" placeholder="Enter Password" required>
                                    <div class="error password-error text-danger"></div>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputUsername1">Password Confirmation</label>
                                    <input type="password" class="form-control" name="password_confirmation" placeholder="Enter Confirm Password" required>
                                    <div class="error password_confirmation-error text-danger"></div>
                                </div>

                                <div class="mb-4">
                                    <div class="form-check">
                                        <label class="form-check-label text-muted">
                                            <input type="checkbox" name="terms" class="form-check-input"> I agree to all Terms & Conditions</label>
                                        <div class="error terms-error text-danger"></div>
                                    </div>
                                </div>
                                <div class="mt-3 d-grid gap-2">
                                    <button type="submit" class="btn btn-block btn-primary btn-lg fw-medium auth-form-btn">SIGN UP</button>
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
        document.getElementById('registerForm').addEventListener('submit', function(e) {
            e.preventDefault(); // Stop form submit

            let form = this;
            let formData = new FormData(form);

            // Clear all previous errors
            document.querySelectorAll('.error').forEach(el => el.textContent = '');

            let hasEmpty = false;

            // 1️⃣ Check empty inputs (text, email, password) and selects
            form.querySelectorAll('input, select').forEach(input => {
                if (!input.value.trim()) {
                    document.querySelector(`.${input.name}-error`).textContent = "This field is required";
                    hasEmpty = true;
                }
            });

            let checkbox = form.querySelector('input[name="terms"]');
            if (checkbox && !checkbox.checked) {
                document.querySelector('.terms-error').textContent = "You must agree to the terms";
                hasEmpty = true;
            }

            // 2️⃣ Check password match
            let password = form.querySelector('input[name="password"]').value.trim();
            let confirmPassword = form.querySelector('input[name="password_confirmation"]').value.trim();
            if (password && confirmPassword && password !== confirmPassword) {
                document.querySelector('.password_confirmation-error').textContent = "Passwords do not match";
                hasEmpty = true;
            }

            // Stop here if empty fields or mismatched passwords
            if (hasEmpty) return;

            // 3️⃣ Check database for existing username/email/phone
            fetch('{{ route("users.check") }}', {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: formData
                })
                .then(res => res.json())
                .then(data => {
                    let hasError = false;

                    if (data.username) {
                        document.querySelector('.username-error').textContent = "Username already exists";
                        hasError = true;
                    }
                    if (data.email) {
                        document.querySelector('.email-error').textContent = "Email already exists";
                        hasError = true;
                    }
                    if (data.phone) {
                        document.querySelector('.phone-error').textContent = "Phone already exists";
                        hasError = true;
                    }

                    // 4️⃣ If no errors → submit form
                    if (!hasError) {
                        form.submit();
                    }
                })
                .catch(err => {
                    console.error('Error checking user data:', err);
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