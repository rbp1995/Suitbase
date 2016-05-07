@extends('layoutTemplate')
@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">EDIT REMOTE REQUEST</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        @if (Session::has('success'))
            <div class = "alert alert-success">
                {{ Session::get('success') }}
            </div>
        @endif
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class = "content-form">
                                    <form class = "form-horizontal" role="form" method = "post" action = "/updateRemote">
                                        <div class="form-group">
                                            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                                            <input class="form-control" name = "id" type = "hidden" value = "{{ $remotes[0]->id }}">
                                            <label class="col-md-4 control-label">Start Date</label>
                                            <div class = "col-md-6">
                                                <input class="form-control" name = "startdate" type = "date" value = "{{ $remotes[0]->date_start }}" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">End Date</label>
                                            <div class = "col-md-6">
                                                <input class="form-control" name = "enddate" type = "date" value = "{{ $remotes[0]->date_end }}" required>
                                            </div> 
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Reason</label>
                                            <div class = "col-md-6">
                                                <textarea class ="form-control" name = "reason" required>{{ $remotes[0]->description }}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-5 control-label"></div>
                                            <div class = "col-md-2 col-md-offset-3">
                                                <button type="submit" class="btn btn-default">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            
                        </div>
                        <!-- /.row (nested) -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /#wrapper -->
    @endsection