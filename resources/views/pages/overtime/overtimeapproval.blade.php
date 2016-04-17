@extends('layoutTemplate')
<!DOCTYPE html>
<html lang="en">

<head>

</head>

<body>
    @section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">OVERTIME DETAIL</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-4">
            </div>
            <div class="col-lg-8 detail">
                <div class="panel panel-default">
                    <div class="panel-heading">
                    </div>
                    <div class="panel-body">
                        <div class = "content">
                            <form class = "form-horizontal">
                                <div class = "form-group">
                                    <label class="col-md-4 control-label">Name</label>
                                    <div class = "right-side">
                                        <label class="col-md-6">: {{$overtimes[0]->username}}</label>
                                    </div>
                                </div>
                                <div class = "form-group">
                                    <label class="col-md-4 control-label">Divison</label>
                                    <div class = "right-side">
                                        <label class="col-md-6">: {{$overtimes[0]->division}}</label>
                                    </div>
                                </div>
                                <div class = "form-group">
                                    <label class="col-md-4 control-label">Date </label>
                                    <div class = "right-side">
                                        <label class="col-md-6">: {{$overtimes[0]->date}}</label>
                                    </div>
                                </div>
                                <div class = "form-group">
                                    <label class="col-md-4 control-label">Time Start</label>
                                    <div class = "right-side">
                                        <label class="col-md-6">: {{$overtimes[0]->time_start}}</label>
                                    </div>
                                </div>
                                <div class = "form-group">
                                    <label class="col-md-4 control-label">Time End</label>
                                    <div class = "right-side">
                                        <label class="col-md-6">: {{$overtimes[0]->time_end}}</label>
                                    </div>
                                </div>
                                <div class = "form-group">
                                    <label class="col-md-4 control-label">Total Hours </label>
                                    <div class = "right-side">
                                        <label class="col-md-6">: {{$overtimes[0]->time_end - $overtimes[0]->time_start}}</label>
                                    </div>
                                </div>
                                <div class = "form-group">
                                        <label class="col-md-4 control-label">Description </label>
                                    <div class = "right-side">
                                        <label class="col-md-6">: {{$overtimes[0]->description}} </label>
                                    </div>
                                </div>
                                <div class = "form-group">
                                    <label class="col-md-4 control-label">Status </label>
                                    <div class = "right-side">
                                        <label class="col-md-6">: {{$overtimes[0]->status}} </label>
                                    </div>
                                </div>
                            </form>
                            <div class="row buttonApproval">
                                <div class="col-lg-2 col-lg-offset-1">
                                    <a href="listOfOvertime" class="btn btn-default" role="button">Back</a>
                                </div>
                                <?php 
                                    $status = explode(" ", $overtimes[0]->status);
                                ?>
                                @if ($status[0] == "Rejected" || $status[0] == "Approved" || $status[0] == "Cancelled")
                                    <div class="col-lg-2">
                                         <button class="btn btn-default" disabled>Reject</button>
                                    </div>
                                    <div class="col-lg-2">
                                        <button class="btn btn-default" disabled>Approve</button>
                                    </div>
                                @else   
                                    <div class="col-lg-2">
                                         <a href="/rejectOvertime:{{ $overtimes[0]->id }}" class="btn btn-default" role="button">Reject</a>
                                    </div>
                                    <div class="col-lg-2">
                                        <a href="/approveOvertime:{{ $overtimes[0]->id }}" class="btn btn-default" role="button">Approve</a>
                                    </div>
                                @endif
                            </div>
                            <!--row-->
                        </div><!--content-->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-8 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /#wrapper -->
    @endsection
    <!-- jQuery -->
    <script src="/assets/plugins/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/assets/plugins/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="/assets/plugins/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="/assets/js/sb-admin-2.js"></script>

</body>

</html>
