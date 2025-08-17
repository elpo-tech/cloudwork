<div class="modal fade" id="edittask{{$ts->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Task</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="registrati" action="{{url('edit_task/'.$ts->id)}}" Method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="row">

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Order Code</label>
                                    <input type="text" class="form-control" value="#{{$ts->code}}" disabled>

                                </div>
                            </div>


                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Order Name</label>
                                    <input type="text" class="form-control" name="oname" value="{{$ts->title}}" required>

                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Budget($)</label>
                                    <input type="number" class="form-control" name="amnt" min="0" value="{{$ts->pay}}" required>

                                </div>
                            </div>


                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Duration (Minutes)</label>
                                    <input type="text" class="form-control" name="time" value="{{$ts->dead}}" required>

                                </div>
                            </div>



                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Number Of Submissions Required</label>
                                    <input type="number" class="form-control" name="sub" min="1" value="{{$ts->done}}" required>

                                </div>
                            </div>



                            <div class="col-sm-4">
                                <div class="form-group ">
                                    <label>Status</label>
                                    <select name="status" id="status" class="form-control select2bs4" style="width: 100%;">
                                        <option disabled>Select Status</option>
                                        @if($ts->status == '1')
                                        <option value="1" selected>Active</option>
                                        @else
                                        <option value="0" selected>Inactive</option>
                                        @endif
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>


                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group ">
                                    <label>Task Insrtuctions</label>
                                    <textarea class="form-control" id="exampleTextarea1" name="descr" rows="4" placeholder="Type Here ....">{{$ts->instruct}}</textarea>


                                </div>
                            </div>


                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Tasks Uploads</label>
                                    <input type="file" name="file" class="file-upload-default">
                                    <div class="input-group col-xs-12">
                                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                                        <span class="input-group-append">
                                            <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                        </span>
                                    </div>
                                </div>
                            </div>



                        </div>


                    </div>



            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Edit Task</button>
            </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>