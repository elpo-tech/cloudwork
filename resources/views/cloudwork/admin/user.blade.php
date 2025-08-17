<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>All Users | Cloud Workly </title>
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
                                    <h4 class="card-title">All Registered Users</h4>
                                    <h5>{{$task->count()}} Users</h5> <br><br>
                                    </p>
                                    <div class="table-responsive">
                                        <table class="table" id="example1">
                                            <thead>
                                                <tr>
                                                    <th>user</th>
                                                    <th>Full Name</th>
                                                    <th>Phone</th>
                                                    <th>Email</th>
                                                    <th>Level</th>
                                                    <th>Reg Date</th>
                                                    <th>Status</th>
                                                    <th>Earned</th>
                                                    <th>Balance</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($task AS $ts)
                                                <tr>
                                                    <td>{{$ts->username}}</td>
                                                    <td>{{$ts->fname}} {{$ts->lname}}</td>
                                                    <td>{{$ts->phone}}</td>
                                                    <td>{{$ts->email}}</td>
                                                    <td>
                                                        <select data-id="{{$ts->id}}" name="level" id="level" class="form-control select2bs4 editable-select" data-column="level" style="min-width: 150px; width: 100%; color:black;">
                                                            <option selected>{{$ts->level}}</option>
                                                            <option disabled>Select Levels</option>
                                                            <option>Level 1</option>
                                                            <option>Level 2</option>
                                                            <option>Level 3</option>
                                                        </select>
                                                    </td>
                                                    <td>{{ date('d/m/Y', strtotime($ts->created_at)) }}</td>
                                                    <td>
                                                        @if($ts->status == '1')
                                                        <label class="badge badge-success">Active</label>
                                                        @else
                                                        <label class="badge badge-danger">Inactive</label>
                                                        @endif
                                                    </td>
                                                    <td>${{number_format($ts->earn ? $ts->earn->earn : '0', 2, '.', ',')}}</td>

                                                    <td>${{number_format($ts->earn ? $ts->earn->bal : '0', 2, '.', ',')}}</td>
                                                    <td>

                                                        <a class="btn btn-danger btn-sm" href="{{url('/delete_user/'.$ts->id)}}" onclick="confirmationdel(event)">
                                                            <i class="ti ti-trash"></i> Delete
                                                        </a>

                                                    </td>
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
                <script>
                    document.querySelectorAll('.editable').forEach(cell => {
                        cell.addEventListener('blur', function() {
                            const id = cell.dataset.id;
                            const column = cell.dataset.column;
                            const value = cell.innerText.trim();

                            updateCell(id, column, value);
                        });
                    });


                    // Handle checkbox toggle
                    document.querySelectorAll('.editable-checkbox').forEach(checkbox => {
                        checkbox.addEventListener('change', function() {
                            const id = checkbox.closest('tr').dataset.id;
                            const column = checkbox.dataset.column;
                            const value = checkbox.checked ? 1 : 0;

                            updateCell(id, column, value);
                        });
                    });


                    document.querySelectorAll('.editable-date').forEach(cell => {
                        cell.addEventListener('click', function() {
                            if (cell.querySelector('input')) return; // Already editing

                            const oldDate = cell.innerText.trim();
                            const column = cell.dataset.column;
                            const id = cell.dataset.id;

                            // Create a date input element
                            const input = document.createElement('input');
                            input.type = 'date';
                            input.value = oldDate;
                            input.style.width = '100%';

                            // Replace cell text with input
                            cell.innerText = '';
                            cell.appendChild(input);
                            input.focus();

                            // When date is picked or input loses focus
                            input.addEventListener('blur', () => {
                                const newDate = input.value;

                                // Update visually
                                cell.innerText = newDate;

                                // Send to server
                                updateCell(id, column, newDate);
                            });

                            // Optional: Pressing Enter will also save
                            input.addEventListener('keydown', (e) => {
                                if (e.key === 'Enter') input.blur();
                            });
                        });
                    });

                    document.querySelectorAll('.editable-select').forEach(select => {
                        select.addEventListener('change', function() {
                            const id = select.dataset.id;
                            const column = select.dataset.column;
                            const value = select.value;

                            updateCell(id, column, value);
                        });
                    });

                    function updateCell(id, column, value) {
                        fetch(`/edit_user/${id}`, {
                                method: 'POST',
                                headers: {
                                    'Content-Type': 'application/json',
                                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                                },
                                body: JSON.stringify({
                                    column: column,
                                    value: value
                                })
                            })
                            .then(res => res.json())
                            .then(response => {
                                console.log('Updated successfully');
                            })
                            .catch(err => {
                                console.error('Update failed', err);
                            });
                    }
                </script>
                @include('cloudwork.parts.footer')