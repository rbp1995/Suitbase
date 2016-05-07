@extends('layoutTemplate')
@section('content')

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">MY TRAINING REQUESTS</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="dataTable_wrapper">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>No. </th>
                                        <th>Training Title</th>
                                        <th>Status</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1; ?>
                                    @foreach ($trainings as $training)
                                    <tr class="odd gradeA">
                                        <td>{{$i}}</td>
                                        <td><a href="/detailTraining:{{$training->id}}">{{$training->title}}</a></td>
                                        <td>{{$training->status}}</td>
                                        <?php 
                                                $status = explode(" ", $training->status);
                                            ?>
                                        @if (strtotime('today') > strtotime($training->date) || $status[0] == "Rejected" || $status[0] == "Approved" || $status[0] == "Cancelled")
                                            <th>
                                                <button type="submit" class="btn btn-default btn-edit" disabled="">Edit</button>
                                                <button type="submit" class="btn btn-default btn-danger" disabled="">Cancel</button>
                                            </th>
                                        @elseif (strtotime('today') < strtotime($training->date))
                                            <th><a href="/editTraining:{{ $training->id }}" class="btn btn-default btn-edit" role="button">Edit</a>
                                            <a href="/cancelTraining:{{ $training->id }}" class="btn btn-default btn-danger" role="button">Cancel</a></th>
                                        @endif
                                    </tr>
                                    <?php $i++; ?>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->

        </div>
        <!-- /#page-wrapper -->
        @endsection