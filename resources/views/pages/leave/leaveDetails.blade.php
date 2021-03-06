@extends('layoutTemplate')
@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">LEAVE DETAIL</h1>
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
                                    <label class="col-md-4 control-label">Start Date </label>
                                    <div class = "right-side">
                                        <label class="col-md-6">: {{ $leaves[0]->date_start }}</label>
                                    </div>
                                </div>
                                <div class = "form-group">
                                    <label class="col-md-4 control-label">End Date </label>
                                    <div class = "right-side">
                                        <label class="col-md-6">: {{ $leaves[0]->date_end }}</label>
                                    </div>
                                </div>
                                <div class = "form-group">
                                    <label class="col-md-4 control-label">Status </label>
                                    <div class = "right-side">
                                        <label class="col-md-6">: {{ $leaves[0]->status }}</label>
                                    </div>
                                </div>
                                <div class = "form-group">
                                        <label class="col-md-4 control-label">Description </label>
                                    <div class = "right-side">
                                        <label class="col-md-6">: {{ $leaves[0]->description }}</label>
                                    </div>
                                </div>
                            </form>
                                    <div class="form-group">
                                        <div class="col-md-6 control-label"></div>
                                        <div class = "col-md-2 col-md-offset-3">
                                            <a href="{{ route('leaves.list.current') }}" class="btn btn-default" role="button">Back</a>
                                        </div>
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
