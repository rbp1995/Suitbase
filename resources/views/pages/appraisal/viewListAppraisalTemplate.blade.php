@extends('layoutTemplate')
<body>
    @section('content')

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Appraisal Templates</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <!--<div class="panel-heading">
                        DataTables Advanced Tables
                    </div>-->
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="dataTable_wrapper">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <a href="/createAppraisal">
                                    <i class="fa fa-plus fa-fw"></i>
                                    <label>
                                        Create Template
                                    </label>
                                </a>
                                <thead>
                                    <tr>
                                        <th style="text-align: center">No</th>
                                        <th style="text-align: center">Date Start</th>
                                        <th style="text-align: center">Date End</th>
                                        <th style="text-align: center">Appraisal Title</th>
                                        <th style="text-align: center">Appraisal Template</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody style="text-align: center">
                                   <?php $i=1; ?>
                                   @foreach ($appraisalsTemplate as $appraisalTemplate)
                                   <tr class="odd gradeA">
                                    <td>{{$i}}</td>
                                    <td>{{$appraisalTemplate->date_start}}</td>
                                    <td>{{$appraisalTemplate->date_end}}</td>
                                    <td>{{$appraisalTemplate->title}}</td>
                                    <td>{{$appraisalTemplate->division->name}}</td>
                                    <th><a href="{{ route('appraisal.edit', ['id' => $appraisalTemplate->id]) }}" class="btn btn-default btn-edit" role="button">Edit</a></th>
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

<!-- jQuery -->
<script src="../bower_components/jquery/dist/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

<!-- DataTables JavaScript -->
<script src="../bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
<script src="../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="../dist/js/sb-admin-2.js"></script>

<!-- Page-Level Demo Scripts - Tables - Use for reference -->
<script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
</script>

</body>

</html>
