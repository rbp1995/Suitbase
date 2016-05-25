@extends('layoutTemplate')
@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">TRAINING DETAIL</h1>
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
                                    <label class="col-md-4 control-label">Training Title </label>
                                    <div class = "right-side">
                                        <label class="col-md-6">: {{$training[0]->title}} </label>
                                    </div>
                                </div>
                                <div class = "form-group">
                                    <label class="col-md-4 control-label">Date </label>
                                    <div class = "right-side">
                                        <label class="col-md-6">: {{$training[0]->date}}</label>
                                    </div>
                                </div>
                                <div class = "form-group">
                                    <label class="col-md-4 control-label">Price Estimate</label>
                                    <div class = "right-side">
                                        <label class="col-md-6">: Rp {{number_format($training[0]->estimate_price,2,',','.')}} </label>
                                    </div>
                                </div>
                                <div class = "form-group">
                                    <label class="col-md-4 control-label">Status </label>
                                    <div class = "right-side">
                                        <label class="col-md-6">: {{$training[0]->status}} </label>
                                    </div>
                                </div>
                                <div class = "form-group">
                                        <label class="col-md-4 control-label">Description </label>
                                    <div class = "right-side">
                                        <label class="col-md-6">: {{$training[0]->description}} </label>
                                    </div>
                                </div>
                            </form>
                                    <div class="form-group">
                                            <div class="col-md-6 control-label"></div>
                                            <div class = "col-md-2 col-md-offset-3">
                                                <a href="{{ route('trainings.list.current') }}" class="btn btn-default" role="button">Back</a>
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
