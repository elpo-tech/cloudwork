<div class="modal fade" id="addreq" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-m">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Request Withdrawal</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="registrati" action="{{url('add_request')}}" Method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <h5 class="text-danger">Note: System Automatically Detects Your Region Preffered Payment Method</h5>

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Payment Method</label>
                                    <input type="text" class="form-control" name="oname" value="M-Pesa" disabled>

                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Phone Number (safaricom)</label>
                                    <input type="number" class="form-control" name="phone" min="0" required>

                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Amount($)</label>
                                    <input type="number" class="form-control" name="amnt" min="0" required>

                                </div>
                            </div>



                            <div class="col-sm-12">
                                <div class="form-group ">
                                    <label>Description (If Any) </label>
                                    <textarea class="form-control" id="exampleTextarea1" name="descr" rows="4" placeholder="Type Here ...."></textarea>


                                </div>
                            </div>


                        </div>


                    </div>



            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit Request</button>
            </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>